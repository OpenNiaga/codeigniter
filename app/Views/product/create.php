<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="section">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Form Produk</h5>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
          <ul class="mb-0">
            <?php foreach (session()->getFlashdata('error') as $err): ?>
              <li><?= esc($err) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form action="<?= base_url('product/store') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Produk</label>
          <input type="text" name="nama" class="form-control" value="<?= old('nama') ?>" required>
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" step="0.01" name="harga" class="form-control" value="<?= old('harga') ?>" required>
        </div>

        <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input type="number" name="jumlah" class="form-control" value="<?= old('jumlah') ?>" required>
        </div>

        <div class="mb-3">
          <label for="foto" class="form-label">Foto Produk</label>
          <input type="file" name="foto" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</section>

<?= $this->endSection() ?>