<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "INDIA • USA • UAE | Vision Software - AI-Powered Solutions | Hub8 Technologies";
$page_description = "Hub8.ai's (H8 Technologies Pvt Ltd India & Hub8 Technologies LLC USA) AI-powered vision software helps businesses turn automation challenges into competitive advantages with intelligent computer vision solutions.";
$canonical_url = "https://www.hub8.ai/vision-software.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_keywords = "Hub8, Hub8 ai, H8 Technologies, Hub8 Technologies, H8, vision software, computer vision, AI vision, image recognition, visual automation, machine vision, AI-powered vision, intelligent vision systems, H8 Technologies Pvt Ltd, Hub8 Technologies LLC";
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
    <section class="vision-hero py-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="display-4 mb-4">Vision Software</h1>
            <p class="lead mb-4">Hub8.ai's AI-powered vision software helps businesses turn automation challenges into competitive advantages with intelligent visual recognition.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="vision-content py-5">
      <div class="container">
        <div class="coming-soon-card text-center p-5 mb-5">
          <h2 class="mb-4">Coming Soon</h2>
          <p class="lead mb-4">We're developing advanced computer vision capabilities to enhance our automation platform.</p>
          <p>Stay tuned for powerful visual recognition and processing features.</p>
          <a href="contact.php" class="btn btn-primary">Learn More</a>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="vision-feature text-center">
              <h3>Image Recognition</h3>
              <p>Advanced AI algorithms that can identify and classify objects, text, and patterns in images with high accuracy.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="vision-feature text-center">
              <h3>Document Processing</h3>
              <p>Automatically extract and process information from documents, forms, and receipts.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="vision-feature text-center">
              <h3>Quality Control</h3>
              <p>Implement automated visual quality control systems for manufacturing and production processes.</p>
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
