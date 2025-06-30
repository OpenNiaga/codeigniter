<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Edit Product</h1>
</div>

<section class="section">
    <div class="card">
        <div class="card-body pt-3">

            <form action="<?= base_url("product/update/{$product['id']}") ?>" method="post" class="row g-3">

                <?= csrf_field() ?>

                <div class="col-12">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" value="<?= esc($product['nama']) ?>" required>
                </div>

                <div class="col-12">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= esc($product['harga']) ?>" required>
                </div>

                <div class="col-12">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="<?= esc($product['jumlah']) ?>" required>
                </div>

                <div class="col-12">
                    <label for="foto" class="form-label">Foto (Kosongkan jika tidak ingin mengubah)</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>