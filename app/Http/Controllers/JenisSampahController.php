<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IJenisSampahService;

class JenisSampahController extends Controller
{
    //
    private $jenisSampahService;
    public function __construct(IJenisSampahService $iJenisSampahService) {
        $this->jenisSampahService = $iJenisSampahService;
    }
    public function getJenisSampah(){
        return $this->jenisSampahService->getAllJenisSampahs();
    }
    public function createJenisSampah(Request $request){
        return $this->jenisSampahService->createJenisSampah($request->all());
    }
    public function updateJenisSampah(Request $request, $id){
        return $this->jenisSampahService->updateJenisSampah($id, $request->all());
    }
    public function deleteJenisSampah($id){
        return $this->jenisSampahService->deleteJenisSampah($id);
    }
}
