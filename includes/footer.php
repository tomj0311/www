<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="footer-brand">
          <img src="Assests/Images/logo.svg" alt="Hub8.ai" class="footer-logo">
          <p class="footer-description">
            Simple AI automation for your business. Save time and money with AI that's easy to use.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="footer-links">
          <?php
          // Get current page to determine navigation context
          $current_page = basename($_SERVER['PHP_SELF']);
          $is_main_page = ($current_page == 'index.php' || $current_page == '');
          ?>
          <li><a href="<?php echo $is_main_page ? '#home' : 'index.php#home'; ?>">Home</a></li>
          <li><a href="automation.php">Automation</a></li>
          <li><a href="<?php echo $is_main_page ? '#services' : 'index.php#services'; ?>">Capabilities</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-title">Contact Info</h5>
        <div class="footer-contact">
          <p class="contact-address">
            7901 4TH STREET NORTH<br>
            STE 300<br>
            ST. PETERSBURG FL US33702
          </p>
        </div>
      </div>
    </div>
    <hr class="footer-divider">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="copyright">
          &copy; <?php echo date('Y'); ?> Hub8.ai. All rights reserved.
        </p>
      </div>
      <div class="col-md-6 text-md-end">
        <div class="footer-social">
          <a href="#" class="social-link" aria-label="Twitter">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="LinkedIn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
