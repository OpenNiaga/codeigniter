<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto me-xl-0">
      <i class="bi bi-fork-knife"></i>
      <h1 class="sitename">NiceRestaurant</h1>
    </a>

    <!-- Nav Menu -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#keranjang"><i class="bi bi-cart-check"></i> Keranjang</a></li>

        <?php if (session()->get('role') == 'admin') : ?>
          <li><a href="#menu"><i class="bi bi-receipt"></i> Menu</a></li>
        <?php endif; ?>

        <li><a href="#chefs">Chefs</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Button Book -->
    <a class="btn-getstarted d-none d-sm-block" href="#book-a-table">Book a Table</a>

    <!-- Profile Dropdown -->
    <div class="dropdown ms-3">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        
        <strong><?= session()->get('username') ?> (<?= session()->get('role') ?>)</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser1">
        <li><h6 class="dropdown-header">Hello, <?= session()->get('username') ?>!</h6></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">My Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Help</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="<?= base_url('logout') ?>"><i class="bi bi-box-arrow-right me-1"></i> Logout</a></li>
      </ul>
    </div>

  </div>
</header>
