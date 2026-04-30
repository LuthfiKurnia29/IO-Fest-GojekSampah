<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\ITransactionService;
use App\Services\Interfaces\IJenisSampahService;
class TransaksiSampahController extends Controller
{
    private $transactionService;
    private $jenisSampahService;
    //
    public function __construct(ITransactionService $transactionService, IJenisSampahService $jenisSampahService)
    {
        $this->transactionService = $transactionService;
        $this->jenisSampahService = $jenisSampahService;
    }

    public function getViewMarket()
    {
        $jenisSampah = $this->jenisSampahService->getAllJenisSampahs();
        return view('order.user.order-pengambilan', compact('jenisSampah'));
    }

    public function order(Request $request)
    {
        try {
            $create = $this->transactionService->createOrder($request->all());
            if($create != null){
                return redirect('/order-pengambilan')->with('success', 'Penjemputan berhasil diajukan!');
            }
            return redirect('/order-pengambilan')->with('error', 'Gagal mengajukan penjemputan. Pastikan data terisi dengan benar.');
        } catch (\Exception $e) {
            return redirect('/order-pengambilan')->with('error', $e->getMessage());
        }
    }

    public function getRunningOrder(){
        try {
            // get order by user id where status = running
            $orders = $this->transactionService->getRunningOrder();
            if($orders != null){
                return redirect('/running-order')->with('success', 'Anda memiliki order yang sedang berjalan!');
            }
            // return redirect('/order-pengambilan')->with('error', 'Gagal mengajukan penjemputan. Pastikan data terisi dengan benar.');
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }
    }

    public function history()
    {
        
    }
}
