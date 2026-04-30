<?php

namespace App\Services\Interfaces;

interface ICatalogService
{
    //
    public function getAllBarangMarketplaces();
    public function getBarangMarketplaceById($id);
    public function createBarangMarketplace(array $data);
    public function updateBarangMarketplace($id, array $data);
    public function deleteBarangMarketplace($id);
}
