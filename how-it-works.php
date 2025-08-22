<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "How It Works - AI Automation Platform | Hub8.ai";
$page_description = "Discover how Hub8.ai's AI automation platform works. Our simple, versatile platform eliminates complexity and makes automation accessible for any business size.";
$canonical_url = "https://www.hub8.ai/how-it-works.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_keywords = "how it works, AI automation process, automation platform, workflow automation, AI implementation, business process automation, intelligent automation workflow";
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
    <section class="how-it-works-hero py-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="display-4 mb-4">How It Works</h1>
            <p class="lead mb-4">Our platform is designed for simplicity and versatility. With a user-friendly interface and powerful AI capabilities, automation has never been easier.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="how-it-works-content py-5">
      <div class="container">
        <div class="coming-soon-card text-center p-5 mb-5">
          <h2 class="mb-4">Coming Soon</h2>
          <p class="lead mb-4">We're preparing detailed documentation and tutorials to show you exactly how our platform works.</p>
          <p>Stay tuned for step-by-step guides and interactive demos.</p>
          <a href="contact.php" class="btn btn-primary">Get Early Access</a>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="step-card text-center">
              <div class="step-number">1</div>
              <h3>Connect</h3>
              <p>Connect your existing tools and data sources to our platform with simple integrations.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="step-card text-center">
              <div class="step-number">2</div>
              <h3>Configure</h3>
              <p>Set up your automation workflows using our intuitive drag-and-drop interface.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="step-card text-center">
              <div class="step-number">3</div>
              <h3>Automate</h3>
              <p>Let AI handle your repetitive tasks while you focus on growing your business.</p>
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
