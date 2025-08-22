<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Terms of Service - Hub8.ai";
$page_description = "Read Hub8.ai's terms of service to understand the terms and conditions for using our AI automation platform and services.";
$canonical_url = "https://www.hub8.ai/terms-of-service.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_keywords = "terms of service, terms and conditions, user agreement, service agreement, legal terms";
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
    <section class="terms-hero py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h1 class="display-5 mb-4">Terms of Service</h1>
            <p class="lead">Last updated: <?php echo date('F j, Y'); ?></p>
          </div>
        </div>
      </div>
    </section>

    <section class="terms-content py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="terms-of-service-content">
              
              <h2>1. Acceptance of Terms</h2>
              <p>By accessing and using Hub8.ai services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>

              <h2>2. Description of Service</h2>
              <p>Hub8.ai provides AI-powered automation solutions and related services. We reserve the right to modify, suspend, or discontinue any aspect of our services at any time.</p>

              <h2>3. User Accounts and Security</h2>
              <p>You are responsible for:</p>
              <ul>
                <li>Maintaining the confidentiality of your account credentials</li>
                <li>All activities that occur under your account</li>
                <li>Notifying us immediately of any unauthorized use</li>
                <li>Providing accurate and complete information</li>
              </ul>
              <p>We implement security measures to protect your account, but you must also take appropriate precautions.</p>

              <h2>4. Acceptable Use Policy</h2>
              <p>You agree not to use our services to:</p>
              <ul>
                <li>Violate any applicable laws or regulations</li>
                <li>Infringe on intellectual property rights</li>
                <li>Transmit harmful, offensive, or inappropriate content</li>
                <li>Interfere with or disrupt our services</li>
                <li>Attempt to gain unauthorized access to our systems</li>
                <li>Use our services for illegal or fraudulent activities</li>
              </ul>

              <h2>5. Intellectual Property</h2>
              <p>Our services and content are protected by intellectual property rights. You may not:</p>
              <ul>
                <li>Copy, modify, or distribute our proprietary content</li>
                <li>Reverse engineer our software or systems</li>
                <li>Remove or alter any proprietary notices</li>
              </ul>
              <p>You retain ownership of content you create using our services, subject to our license to operate and improve our platform.</p>

              <h2>6. Privacy and Data Protection</h2>
              <p>Your privacy is important to us. Our collection and use of personal information is governed by our Privacy Policy. By using our services, you consent to the collection and use of information as outlined in our Privacy Policy.</p>

              <h2>7. Cookie Policy</h2>
              <p>By using our website, you agree to our use of cookies as described in our Privacy Policy. Cookies help us:</p>
              <ul>
                <li>Remember your preferences and settings</li>
                <li>Analyze website performance and usage</li>
                <li>Provide personalized content and features</li>
                <li>Ensure security and prevent fraud</li>
              </ul>

              <h2>8. Service Availability</h2>
              <p>While we strive to maintain continuous service availability, we do not guarantee uninterrupted access. We may experience downtime for maintenance, updates, or unforeseen circumstances.</p>

              <h2>9. Limitation of Liability</h2>
              <p>To the maximum extent permitted by law, Hub8.ai shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>

              <h2>10. Indemnification</h2>
              <p>You agree to indemnify and hold harmless Hub8.ai from any claims, damages, or expenses arising from your use of our services or violation of these terms.</p>

              <h2>11. Termination</h2>
              <p>We may terminate or suspend your account and access to our services immediately, without prior notice, for conduct that we believe violates these terms or is harmful to other users or our business.</p>

              <h2>12. Governing Law</h2>
              <p>These terms shall be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law provisions.</p>

              <h2>13. Changes to Terms</h2>
              <p>We reserve the right to modify these terms at any time. We will notify users of significant changes by posting the updated terms on our website and updating the "Last updated" date.</p>

              <h2>14. Contact Information</h2>
              <p>If you have any questions about these Terms of Service, please contact us at:</p>
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
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/main.js"></script>
</body>
</html>
