<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?? 'NiceAdmin' ?></title>

  <!-- Styles -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <?= view('layouts/header') ?>

  <!-- ======= Sidebar ======= -->
  <?= view('layouts/sidebar') ?>

  <main id="main" class="main">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- ======= Footer ======= -->
  <?= view('layouts/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- JS -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
