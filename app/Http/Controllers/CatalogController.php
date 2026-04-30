<?php

namespace App\Http\Controllers;

use App\Models\BarangMarketplace;
use App\Services\Interfaces\ICatalogService;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    protected $catalogService;
    public function __construct(ICatalogService $catalogService) {
        $this->catalogService = $catalogService;
    }
    //
    public function index(){
        // get data barang marketplace
        $catalog = $this->catalogService->getAllBarangMarketplaces();
        return view('catalog.index', compact('catalog'));
    }
    
    
}
