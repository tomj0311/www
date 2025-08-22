<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Support - Help Center | Hub8.ai";
$page_description = "Get help and support for Hub8.ai's AI automation platform. Find answers to common questions and contact our support team.";
$canonical_url = "https://www.hub8.ai/support.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_keywords = "support, help center, customer support, technical support, FAQ, documentation, help desk";
$page_type = "website";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/seo-head.php'; ?>
</head>

<body>
  <!-- HEADER -->
  <?php include 'includes/header.php'; ?>

  <!-- PAGE CONTENT -->
  <main class="main-content">
    <section class="support-hero py-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="display-4 mb-4">Support Center</h1>
            <p class="lead mb-4">Get the help you need to succeed with Hub8.ai's AI automation platform.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="support-content py-5">
      <div class="container">
        <div class="coming-soon-card text-center p-5 mb-5">
          <h2 class="mb-4">Coming Soon</h2>
          <p class="lead mb-4">We're building a comprehensive support center with documentation, tutorials, and FAQs.</p>
          <p>In the meantime, feel free to contact us directly for any assistance.</p>
          <a href="contact.php" class="btn btn-primary">Contact Support</a>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="support-option text-center">
              <h3>Documentation</h3>
              <p>Comprehensive guides and API documentation to help you get started and make the most of our platform.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="support-option text-center">
              <h3>Video Tutorials</h3>
              <p>Step-by-step video guides covering everything from basic setup to advanced automation workflows.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="support-option text-center">
              <h3>Community Forum</h3>
              <p>Connect with other users, share experiences, and get answers from our community of automation experts.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/main.js"></script>
</body>
</html>
