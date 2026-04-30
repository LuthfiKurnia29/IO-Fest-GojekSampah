<?php

namespace App\Services\Implementations;

use App\Models\JenisSampah;
use App\Models\TransaksiSampah;
use App\Services\Interfaces\ITransactionService;
use App\Models\Transaction;
use Exception;
use Illuminate\Database\RecordNotFoundException;
use App\Models\User;
class TransactionService implements ITransactionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {   
        //
    }
    public function createOrder($request){
        $user = auth()->user() ?? (isset($request['user_id']) ? User::find($request['user_id']) : null);
        
        if($user == null){
           throw new RecordNotFoundException("Users not found", 404);
        }

        // Update alamat user jika diinputkan yang baru
        if(isset($request['alamat'])){
            $user->update(['alamat' => $request['alamat']]);
        }

        // Ambil kurir dengan status available
        $kurir = User::where('role', 'kurir')
           ->where('is_available', 'available')
           ->first();
       
        if($kurir == null){
            throw new Exception("Kurir sedang penuh, mohon coba beberapa saat lagi.", 404);
        }

        $orderFix = null;
        
        // Loop through arrays from form
        if(isset($request['jenis_sampah']) && is_array($request['jenis_sampah'])){
            foreach($request['jenis_sampah'] as $key => $jenisId){
                $berat = $request['berat_sampah'][$key] ?? 0;
                if($berat <= 0) continue;

                $jenis = JenisSampah::find($jenisId);
                if(!$jenis) continue;

                $orderFix = TransaksiSampah::create([
                    'user_id' => $user->id,
                    'jenis_sampah_id' => $jenis->id,
                    'berat' => $berat,
                    'harga' => $berat * $jenis->harga,
                    'kurir_id' => $kurir->id,
                    'wilayah_id' => $user->wilayah_id ?? $kurir->wilayah_id ?? 1,
                    'status' => 'taken',
                ]);
            }
        }

        if($orderFix){
            // ubah status kurir menjadi booked
            $kurir->update([
                'is_available' => 'booked',
            ]);
        }

        return $orderFix;
    }

    public function getRunningOrder(){
        $user = auth()->user();
        $order = TransaksiSampah::where('user_id', $user->id)->where('status', 'taken')->first();
        return $order;
    }
}
