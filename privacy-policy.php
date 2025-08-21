<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Privacy Policy - Hub8.ai";
$page_description = "Read Hub8.ai's privacy policy to understand how we collect, use, and protect your personal information and data.";
$canonical_url = "https://www.hub8.ai/privacy-policy.php";
$og_image = "https://www.hub8.ai/Assests/Images/bannar-bg.png";
$page_keywords = "privacy policy, data protection, privacy rights, personal information, data security";
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
            <h1 class="display-5 mb-4">Privacy Policy</h1>
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
              
              <h2>1. Information We Collect</h2>
              <p>We collect information you provide directly to us, such as when you create an account, use our services, or contact us. This may include:</p>
              <ul>
                <li>Name, email address, and contact information</li>
                <li>Account credentials and profile information</li>
                <li>Communications with us</li>
                <li>Usage data and analytics</li>
              </ul>

              <h2>2. How We Use Your Information</h2>
              <p>We use the information we collect to:</p>
              <ul>
                <li>Provide, maintain, and improve our services</li>
                <li>Process transactions and send related information</li>
                <li>Send technical notices and support messages</li>
                <li>Respond to your comments and questions</li>
                <li>Monitor and analyze usage patterns</li>
              </ul>

              <h2>3. Cookie Policy</h2>
              <p>We use cookies and similar tracking technologies to enhance your experience:</p>
              <h4>Essential Cookies</h4>
              <p>These cookies are necessary for the website to function properly and cannot be disabled.</p>
              <h4>Analytics Cookies</h4>
              <p>We use analytics cookies to understand how visitors interact with our website. This helps us improve our services.</p>
              <h4>Functional Cookies</h4>
              <p>These cookies enable enhanced functionality and personalization, such as remembering your preferences.</p>
              <p>You can control cookies through your browser settings, but disabling them may affect website functionality.</p>

              <h2>4. Data Security</h2>
              <p>We implement appropriate technical and organizational measures to protect your personal information:</p>
              <ul>
                <li>Data encryption in transit and at rest</li>
                <li>Regular security assessments and updates</li>
                <li>Access controls and authentication measures</li>
                <li>Secure data storage and backup procedures</li>
                <li>Employee training on data protection</li>
              </ul>

              <h2>5. Information Sharing</h2>
              <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
              <ul>
                <li>With your explicit consent</li>
                <li>To comply with legal obligations</li>
                <li>To protect our rights and safety</li>
                <li>With service providers who assist us in operations</li>
              </ul>

              <h2>6. Data Retention</h2>
              <p>We retain your personal information only for as long as necessary to fulfill the purposes for which it was collected, comply with legal obligations, resolve disputes, and enforce agreements.</p>

              <h2>7. Your Rights</h2>
              <p>You have the right to:</p>
              <ul>
                <li>Access and receive a copy of your personal data</li>
                <li>Rectify inaccurate personal data</li>
                <li>Request deletion of your personal data</li>
                <li>Object to processing of your personal data</li>
                <li>Request restriction of processing</li>
                <li>Data portability</li>
              </ul>

              <h2>8. Third-Party Services</h2>
              <p>Our website may contain links to third-party websites or services. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.</p>

              <h2>9. Children's Privacy</h2>
              <p>Our services are not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13.</p>

              <h2>10. Changes to This Policy</h2>
              <p>We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last updated" date.</p>

              <h2>11. Contact Us</h2>
              <p>If you have any questions about this privacy policy, please contact us at:</p>
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
