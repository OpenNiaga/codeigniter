<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
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
    return "index_pages";
  }

  public function edit()
  {
    return "edit_pages"
  }

  public function delete()
  {
    return "delete_pages";
  }

  public function create()
  {
    return "create_pages";
  }
}
