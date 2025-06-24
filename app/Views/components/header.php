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
         <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <span>Home</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'about') ? "about" : "collapsed" ?>" href="#about">
                <span>About</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "menu" : "collapsed" ?>" href="menu">
                <span>Menu</span>
            </a>
        </li><!-- End Home Nav -->

        <?php if (session()->get('role') == 'admin') : ?>
          <li><a href="keranjang"><i></i>keranjang</a></li>
        <?php endif; ?>

         <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "Chefs" : "collapsed" ?>" href="#chefs">
                <span>Chefs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "Chefs" : "collapsed" ?>" href="#events">
                <span>Events</span>
            </a>
        </li>
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
