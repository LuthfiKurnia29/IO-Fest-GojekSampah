<?php

namespace App\Services\Implementations;

use App\Services\Interfaces\IJenisSampahService;
use App\Models\JenisSampah;

class JenisSampahService implements IJenisSampahService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getAllJenisSampahs()
    {
        return JenisSampah::all();
    }
    public function getJenisSampahById($id)
    {
        return JenisSampah::find($id);
    }
    public function createJenisSampah(array $data)
    {
        return JenisSampah::create($data);
    }
    public function updateJenisSampah($id, array $data)
    {
        return JenisSampah::find($id)->update($data);
    }
    public function deleteJenisSampah($id)
    {
        return JenisSampah::find($id)->delete();
    }
}
