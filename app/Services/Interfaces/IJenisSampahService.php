<?php

namespace App\Services\Interfaces;

interface IJenisSampahService
{
    public function getAllJenisSampahs();
    public function getJenisSampahById($id);
    public function createJenisSampah(array $data);
    public function updateJenisSampah($id, array $data);
    public function deleteJenisSampah($id);
}
