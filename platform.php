<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Platform Overview - AI Automation Solutions | Hub8.ai";
$page_description = "The Hub8.ai platform eliminates the need for complex coding and technical expertise. Discover our comprehensive AI automation platform designed for businesses of all sizes.";
$canonical_url = "https://www.hub8.ai/platform.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_keywords = "platform overview, AI automation platform, no-code automation, business automation platform, intelligent automation, automation software, AI platform";
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
    <section class="platform-hero py-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="display-4 mb-4">Platform Overview</h1>
            <p class="lead mb-4">The Hub8.ai platform eliminates the need for complex coding and technical expertise, making AI automation accessible to everyone.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="platform-content py-5">
      <div class="container">
        <div class="coming-soon-card text-center p-5 mb-5">
          <h2 class="mb-4">Coming Soon</h2>
          <p class="lead mb-4">We're building a comprehensive platform overview with detailed features and capabilities.</p>
          <p>Check back soon for interactive demos and feature walkthroughs.</p>
          <a href="contact.php" class="btn btn-primary">Request Demo</a>
        </div>

        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="platform-feature">
              <h3>No-Code Interface</h3>
              <p>Build complex automation workflows without writing a single line of code. Our visual interface makes it easy for anyone to create powerful automations.</p>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="platform-feature">
              <h3>AI-Powered Intelligence</h3>
              <p>Leverage advanced AI to make smart decisions and handle complex business logic automatically.</p>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="platform-feature">
              <h3>Seamless Integrations</h3>
              <p>Connect with hundreds of popular business tools and services through our extensive integration library.</p>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="platform-feature">
              <h3>Enterprise Security</h3>
              <p>Built with security in mind, featuring encryption, compliance standards, and robust data protection.</p>
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
