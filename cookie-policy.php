<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Cookie Policy - Hub8.ai";
$page_description = "Learn about Hub8.ai's cookie policy and how we use cookies to enhance your browsing experience and improve our services.";
$canonical_url = "https://www.hub8.ai/cookie-policy.php";
$og_image = "https://www.hub8.ai/Assests/Images/bannar-bg.png";
$page_keywords = "cookie policy, cookies, tracking, web cookies, browser cookies, privacy";
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
    <section class="privacy-hero py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h1 class="display-5 mb-4">Cookie Policy</h1>
            <p class="lead">Last updated: <?php echo date('F j, Y'); ?></p>
          </div>
        </div>
      </div>
    </section>

    <section class="privacy-content py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="privacy-policy-content">
              
              <h2>1. What Are Cookies?</h2>
              <p>Cookies are small text files that are stored on your device when you visit our website. They help us provide you with a better browsing experience by remembering your preferences and analyzing how you use our site.</p>

              <h2>2. Types of Cookies We Use</h2>
              
              <h4>Essential Cookies</h4>
              <p>These cookies are necessary for our website to function properly. They enable basic functions like page navigation, access to secure areas, and form submissions. The website cannot function properly without these cookies.</p>
              <ul>
                <li>Session management cookies</li>
                <li>Security cookies</li>
                <li>Load balancing cookies</li>
              </ul>

              <h4>Analytics Cookies</h4>
              <p>We use analytics cookies to understand how visitors interact with our website. This information helps us improve our website and services.</p>
              <ul>
                <li>Google Analytics cookies</li>
                <li>Page view tracking</li>
                <li>User behavior analysis</li>
                <li>Performance monitoring</li>
              </ul>

              <h4>Functional Cookies</h4>
              <p>These cookies enable enhanced functionality and personalization. They may be set by us or by third-party providers whose services we have added to our pages.</p>
              <ul>
                <li>Language preferences</li>
                <li>Region selection</li>
                <li>Theme preferences</li>
                <li>Form data retention</li>
              </ul>

              <h4>Marketing Cookies</h4>
              <p>These cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user.</p>
              <ul>
                <li>Advertising cookies</li>
                <li>Social media cookies</li>
                <li>Retargeting cookies</li>
              </ul>

              <h2>3. Third-Party Cookies</h2>
              <p>We may use third-party services that set cookies on our website:</p>
              <ul>
                <li><strong>Google Analytics:</strong> To analyze website traffic and user behavior</li>
                <li><strong>Social Media Platforms:</strong> For social sharing functionality</li>
                <li><strong>Content Delivery Networks:</strong> To improve website performance</li>
              </ul>

              <h2>4. Cookie Duration</h2>
              <p>Cookies are classified by their duration:</p>
              <ul>
                <li><strong>Session Cookies:</strong> Temporary cookies that are deleted when you close your browser</li>
                <li><strong>Persistent Cookies:</strong> Remain on your device for a set period or until manually deleted</li>
              </ul>

              <h2>5. Managing Your Cookie Preferences</h2>
              
              <h4>Browser Settings</h4>
              <p>You can control and manage cookies through your browser settings. Most browsers allow you to:</p>
              <ul>
                <li>View what cookies are stored on your device</li>
                <li>Delete cookies individually or all at once</li>
                <li>Block cookies from specific websites</li>
                <li>Block all cookies</li>
                <li>Enable "incognito" or "private browsing" mode</li>
              </ul>

              <h4>Browser-Specific Instructions</h4>
              <p>For specific instructions on managing cookies:</p>
              <ul>
                <li><strong>Chrome:</strong> Settings > Privacy and Security > Cookies</li>
                <li><strong>Firefox:</strong> Options > Privacy & Security > Cookies</li>
                <li><strong>Safari:</strong> Preferences > Privacy > Cookies</li>
                <li><strong>Edge:</strong> Settings > Privacy > Cookies</li>
              </ul>

              <h2>6. Impact of Disabling Cookies</h2>
              <p>Please note that disabling certain cookies may impact your experience on our website:</p>
              <ul>
                <li>Some features may not work properly</li>
                <li>You may need to re-enter information repeatedly</li>
                <li>Personalization features may be unavailable</li>
                <li>Website performance may be affected</li>
              </ul>

              <h2>7. Updates to This Cookie Policy</h2>
              <p>We may update this cookie policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. Please revisit this page regularly to stay informed about our use of cookies.</p>

              <h2>8. Contact Us</h2>
              <p>If you have any questions about our use of cookies, please contact us at:</p>
              <p>Email: <a href="mailto:contact@hub8.ai">contact@hub8.ai</a><br>
              Address: 7901 4TH STREET NORTH STE 300<br>
              ST. PETERSBURG FL US33702</p>

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
