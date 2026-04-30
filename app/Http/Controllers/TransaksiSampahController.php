<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\ITransactionService;

class TransaksiSampahController extends Controller
{
    private $transactionService;
    //
    public function __construct(ITransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }
    public function orderKurir(Request $request)
    {
        $create = $this->transactionService->createTransaction($request->all());
        if($create != null){
            return redirect('/order-menu')->with('success', 'Data berhasil disimpan');
        }
        return redirect('/order-menu')->with('error', 'Data gagal disimpan');
    }

    public function history()
    {
        
    }
}
