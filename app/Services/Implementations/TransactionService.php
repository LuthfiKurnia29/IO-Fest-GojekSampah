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
        // ambil user yang memesan
         $user = User::find($request->user_id);
         if($user == null){
            throw new RecordNotFoundException("Users not found", 404);
         }

         // Ambil kurir dengan status available
         $kurir = User::where('role', 'kurir')
            ->where('is_available', 'available')
            ->first();
        if($kurir == null){
            throw new Exception("Kurir sedang penuh, mohon coba beberapa saat lagi.", 404);
        }
        $jenis = JenisSampah::where('id', $request->jenis_sampah_id)->first();
        // create pesanan dari order diatas
        $orderFix = TransaksiSampah::create([
            'user_id' => $user->id,
            'jenis_sampah_id' => $jenis->id,
            'berat' => $request->berat,
            'harga' => $request->berat * $jenis->harga,
            'kurir_id' => $kurir->id,
            'status' => 'taken',
        ]);

        // ubah status kurir menjadi booked
        $kurir->update([
            'is_available' => 'booked',
        ]);

        return $orderFix;
        //  dd($kurir);
    }
}
