<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel; 

class MenuController extends BaseController
{
     protected $product;
    function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
       return view('menu',$data);

    }
}
