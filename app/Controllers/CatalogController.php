<?php

namespace App\Controllers;
use App\Models\CatalogModel;

class CatalogController extends BaseController
{
    public function index()
    {
        $title = 'Catalog';
        $CatalogModel = new CatalogModel();
        $catalog = $CatalogModel->findAll(); 
        return view('catalog/index',['catalog' => $catalog,'title'=> $title]);
    }
}