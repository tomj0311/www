<footer class="site-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="footer-brand">
          <img src="assets/Images/logo.png" alt="Hub8.ai" class="footer-logo">
          <div class="footer-contact mt-1">
            <p class="contact-address mb-2">
              <strong>Headquarters:</strong><br>
              7901 4TH STREET NORTH STE 300<br>
              ST. PETERSBURG, FL 33702<br>
              <span class="text-white-75">• Global Operations: UAE • India • Singapore</span>
            </p>
            <p class="contact-info mb-2">
              <strong>Email:</strong> <a href="mailto:contact@hub8.ai">contact@hub8.ai</a><br>
              <strong>Phone:</strong> <a href="tel:+18004828724">1-800-HUB8-AI</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
        <h5 class="footer-title">Product</h5>
        <ul class="footer-links">
          <li><a href="platform.php">Platform Overview</a></li>
          <li><a href="how-it-works.php">How It Works</a></li>
          <li><a href="automation.php">Automation</a></li>
          <li><a href="vision-software.php">Vision Software</a></li>
          <?php
          // Get current page to determine navigation context
          $current_page = basename($_SERVER['PHP_SELF']);
          $is_main_page = ($current_page == 'index.php' || $current_page == '');
          ?>
          <li><a href="<?php echo $is_main_page ? '#services' : 'index.php#services'; ?>">Capabilities</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
        <h5 class="footer-title">Company</h5>
        <ul class="footer-links">
          <li><a href="about.php">About Us</a></li>
          <li><a href="careers.php">Careers</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="#" onclick="showComingSoon('Blog')">Blog</a></li>
          <li><a href="#" onclick="showComingSoon('News')">News</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
        <h5 class="footer-title">Support</h5>
        <ul class="footer-links">
          <li><a href="support.php">Help Center</a></li>
          <li><a href="#" onclick="showComingSoon('Documentation')">Documentation</a></li>
          <li><a href="#" onclick="showComingSoon('Community')">Community</a></li>
          <li><a href="#" onclick="showComingSoon('API Reference')">API Reference</a></li>
          <li><a href="#" onclick="showComingSoon('Status')">System Status</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-title">Legal</h5>
        <ul class="footer-links">
          <li><a href="privacy-policy.php">Privacy Policy</a></li>
          <li><a href="terms-of-service.php">Terms of Service</a></li>
          <li><a href="cookie-policy.php">Cookie Policy</a></li>
          <li><a href="security.php">Security</a></li>
        </ul>
      </div>
    </div>
    <hr class="footer-divider">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="copyright">
          &copy; <?php echo date('Y'); ?> Hub8 Technologies LLC. All rights reserved.
        </p>
      </div>
      <div class="col-md-6 text-md-end">
        <div class="footer-social">
          <a href="#" class="social-link" aria-label="Facebook">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
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

<!-- Coming Soon Modal -->
<div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="comingSoonModalLabel">Coming Soon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div class="mb-3">
          <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12,6 12,12 16,14"></polyline>
          </svg>
        </div>
        <h4 id="comingSoonFeature">Feature</h4>
        <p class="mb-4">This feature is coming soon! We're working hard to bring you the best experience possible.</p>
        <p class="text-muted">Stay tuned for updates and new features.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Got it</button>
        <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<script>
function showComingSoon(featureName) {
  document.getElementById('comingSoonFeature').textContent = featureName;
  var modal = new bootstrap.Modal(document.getElementById('comingSoonModal'));
  modal.show();
}
</script>
