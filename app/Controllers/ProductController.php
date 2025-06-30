<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
  protected $productModel;

  public function __construct()
  {
    $this->productModel = new ProductModel();
    helper(['form', 'url']);
  }

  public function index()
  {
    $data['products'] = $this->productModel->findAll();
    return view('product/index', $data);
  }

  public function create()
  {
    return view('product/create');
  }

  public function save()
  {
    $validationRule = [
      'foto' => [
        'label' => 'Foto',
        'rules' => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
      ]
    ];

    if (! $this->validate($validationRule)) {
      return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
    }

    $file = $this->request->getFile('foto');
    $filename = $file->getRandomName();
    $file->move('uploads', $filename);

    $this->productModel->save([
      'nama'   => $this->request->getPost('nama'),
      'harga'  => $this->request->getPost('harga'),
      'jumlah' => $this->request->getPost('jumlah'),
      'foto'   => $filename
    ]);

    return redirect()->to('/product')->with('success', 'Produk berhasil disimpan');
  }

  public function edit($id)
  {
    $product = $this->productModel->find($id);
    if (!$product) {
      return redirect()->to('/product')->with('error', 'Produk tidak ditemukan');
    }

    return view('product/edit', ['product' => $product]);
  }

  public function update($id)
  {
    $product = $this->productModel->find($id);
    if (!$product) {
      return redirect()->to('/product')->with('error', 'Produk tidak ditemukan');
    }

    $data = [
      'id'     => $id,
      'nama'   => $this->request->getPost('nama'),
      'harga'  => $this->request->getPost('harga'),
      'jumlah' => $this->request->getPost('jumlah'),
    ];

    // Jika user upload foto baru
    $file = $this->request->getFile('foto');
    if ($file && $file->isValid() && !$file->hasMoved()) {
      $filename = $file->getRandomName();
      $file->move('uploads', $filename);
      $data['foto'] = $filename;

      // Hapus file lama jika ada
      if (!empty($product['foto']) && file_exists('uploads/' . $product['foto'])) {
        unlink('uploads/' . $product['foto']);
      }
    }

    $this->productModel->save($data);

    return redirect()->to('/product')->with('success', 'Produk berhasil diperbarui');
  }

  public function delete($id)
  {
    $product = $this->productModel->find($id);

    if (!$product) {
      return redirect()->to('/product')->with('error', 'Produk tidak ditemukan');
    }

    // Hapus file foto jika ada
    if (!empty($product['foto']) && file_exists('uploads/' . $product['foto'])) {
      unlink('uploads/' . $product['foto']);
    }

    $this->productModel->delete($id);

    return redirect()->to('/product')->with('success', 'Produk berhasil dihapus');
  }
}
