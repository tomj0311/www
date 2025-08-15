<header class="site-header py-3">
  <div class="container-fluid px-5">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <!-- Logo -->
      <a class="navbar-brand me-4" href="index.php">
        <img src="Assests/Images/logo.svg" alt="<?php echo htmlspecialchars($site_name ?? 'Hub8.ai'); ?> Logo">
      </a>

      <!-- Mobile toggle -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRight">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Right Section (Links + Search + Buttons) -->
      <div class="collapse navbar-collapse" id="navbarRight">
        <ul class="navbar-nav">
          <?php
          // Get current page to determine if we're on main page or other pages
          $current_page = basename($_SERVER['PHP_SELF']);
          $is_main_page = ($current_page == 'index.php' || $current_page == '');
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $is_main_page ? '#about' : 'index.php#about'; ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $is_main_page ? '#services' : 'index.php#services'; ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $is_main_page ? '#contact' : 'index.php#contact'; ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="automation.php">GIA</a>
          </li>
        </ul>
        <form class="search-bar" method="GET" action="search.php">
          <input type="text" name="q" class="form-control" placeholder="Search" value="<?php echo htmlspecialchars($_GET['q'] ?? ''); ?>">
        </form>
        <div class="btn-wrap">
          <a href="signup.php" class="btn btn-outline-light login">Sign Up</a>
          <a href="login.php" class="btn btn-gradient">Login</a>
        </div>
      </div>
    </nav>
  </div>
</header>
