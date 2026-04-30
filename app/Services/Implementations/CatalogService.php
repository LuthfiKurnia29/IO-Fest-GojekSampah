<?php

namespace App\Services\Implementations;

use App\Services\Interfaces\ICatalogService;
use App\Models\BarangMarketplace;
class CatalogService implements ICatalogService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getAllBarangMarketplaces(){
        return BarangMarketplace::all();
    }
    public function getBarangMarketplaceById($id){
        return BarangMarketplace::find($id);
    }
    public function createBarangMarketplace(array $data){
        return BarangMarketplace::create($data);
    }
    public function updateBarangMarketplace($id, array $data){
        return BarangMarketplace::find($id)->update($data);
    }
    public function deleteBarangMarketplace($id){
        return BarangMarketplace::find($id)->delete();
    }
}
