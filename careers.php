<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Careers - Join Hub8.ai Team | AI Automation Jobs";
$page_description = "Join our team at Hub8.ai and help shape the future of AI automation. Explore exciting career opportunities in artificial intelligence, machine learning, and business automation technology.";
$canonical_url = "https://www.hub8.ai/careers.php";
$og_image = "https://www.hub8.ai/Assests/Images/bannar-bg.png";
$page_keywords = "careers, jobs, AI jobs, automation careers, machine learning jobs, software developer, frontend developer, backend developer, AI engineer, Hub8.ai careers";
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
    <section class="careers-hero py-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="display-4 mb-4">Join Our Team</h1>
            <p class="lead mb-4">Help shape the future of AI automation and make a real impact on businesses worldwide.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="careers-content py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="coming-soon-card text-center p-5 mb-5">
              <h2 class="mb-4">Coming Soon</h2>
              <p class="lead mb-4">We're building something amazing and will be posting exciting career opportunities soon.</p>
              <p>Check back later or contact us to learn about future openings.</p>
              <a href="contact.php" class="btn btn-primary">Contact Us</a>
            </div>

            <div class="why-join-section">
              <h2 class="mb-4">Why Join Hub8.ai?</h2>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="feature-card h-100">
                    <h4>Cutting-Edge Technology</h4>
                    <p>Work with the latest AI and automation technologies to solve real business challenges.</p>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="feature-card h-100">
                    <h4>Growth Opportunities</h4>
                    <p>Advance your career in a fast-growing company at the forefront of AI innovation.</p>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="feature-card h-100">
                    <h4>Remote-First Culture</h4>
                    <p>Work from anywhere with a team that values flexibility and work-life balance.</p>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="feature-card h-100">
                    <h4>Make an Impact</h4>
                    <p>Help businesses save time and money while focusing on meaningful work.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="Assests/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assests/main.js"></script>
</body>
</html>
