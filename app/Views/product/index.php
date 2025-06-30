<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="pagetitle">
  <h1>Produk</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
      <li class="breadcrumb-item active">Produk</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="card">
    <div class="card-body pt-3">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="card-title">Daftar Produk</h5>
        <a href="<?= base_url('product/create') ?>" class="btn btn-primary">
          <i class="bi bi-plus-circle me-1"></i> Tambah Produk
        </a>
      </div>

      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
      <?php endif; ?>

      <table class="table table-striped datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $key => $product): ?>
            <tr>
              <th scope="row"><?= $key + 1 ?></th>
              <td><?= esc($product['nama']) ?></td>
              <td>Rp <?= number_format($product['harga'], 0, ',', '.') ?></td>
              <td><?= $product['jumlah'] ?></td>
              <td>
                <?php if ($product['foto']): ?>
                  <img src="<?= base_url('uploads/' . $product['foto']) ?>" width="60">
                <?php else: ?>
                  <span class="text-muted">Tidak ada</span>
                <?php endif; ?>
              </td>
              <td>
                <a href="<?= base_url('product/edit/' . $product['id']) ?>" class="btn btn-sm btn-warning">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="<?= base_url('product/delete/' . $product['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                  <?= csrf_field() ?>
                  <button class="btn btn-sm btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?= $this->endSection() ?>
