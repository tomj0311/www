<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set('UTC');

// SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Security - Hub8.ai";
$page_description = "Learn about Hub8.ai's security measures and how we protect your data with industry-leading security practices and technologies.";
$canonical_url = "https://www.hub8.ai/security.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_keywords = "security, data protection, cybersecurity, encryption, data security, privacy protection";
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
            <h1 class="display-5 mb-4">Security</h1>
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
              
              <h2>1. Our Commitment to Security</h2>
              <p>At Hub8.ai, security is not just a feature—it's fundamental to everything we do. We are committed to protecting your data and maintaining the highest standards of security across all our services and operations.</p>

              <h2>2. Data Encryption</h2>
              
              <h4>Encryption in Transit</h4>
              <p>All data transmitted between your device and our servers is protected using industry-standard encryption:</p>
              <ul>
                <li>TLS 1.3 encryption for all web communications</li>
                <li>HTTPS protocol for all website interactions</li>
                <li>Secure API endpoints with certificate pinning</li>
                <li>End-to-end encryption for sensitive data transfers</li>
              </ul>

              <h4>Encryption at Rest</h4>
              <p>Your data is encrypted when stored on our systems:</p>
              <ul>
                <li>AES-256 encryption for database storage</li>
                <li>Encrypted file systems for data storage</li>
                <li>Secure key management systems</li>
                <li>Regular encryption key rotation</li>
              </ul>

              <h2>3. Access Controls</h2>
              
              <h4>User Authentication</h4>
              <p>We implement robust authentication mechanisms:</p>
              <ul>
                <li>Multi-factor authentication (MFA) support</li>
                <li>Strong password requirements</li>
                <li>Account lockout protection</li>
                <li>Session management and timeout controls</li>
              </ul>

              <h4>Internal Access Controls</h4>
              <p>Our team follows strict access control protocols:</p>
              <ul>
                <li>Role-based access control (RBAC)</li>
                <li>Principle of least privilege</li>
                <li>Regular access reviews and audits</li>
                <li>Secure VPN access for remote operations</li>
              </ul>

              <h2>4. Infrastructure Security</h2>
              
              <h4>Cloud Security</h4>
              <p>Our infrastructure is built on secure cloud platforms:</p>
              <ul>
                <li>SOC 2 Type II compliant cloud providers</li>
                <li>Regular security assessments of cloud services</li>
                <li>Isolated network segments</li>
                <li>Intrusion detection and prevention systems</li>
              </ul>

              <h4>Network Security</h4>
              <p>We maintain comprehensive network security measures:</p>
              <ul>
                <li>Firewalls and network segmentation</li>
                <li>DDoS protection and mitigation</li>
                <li>Real-time traffic monitoring</li>
                <li>Automated threat detection</li>
              </ul>

              <h2>5. Application Security</h2>
              
              <h4>Secure Development</h4>
              <p>Security is integrated into our development process:</p>
              <ul>
                <li>Secure coding standards and practices</li>
                <li>Regular code reviews and security assessments</li>
                <li>Automated security testing in CI/CD pipelines</li>
                <li>Third-party security audits</li>
              </ul>

              <h4>Vulnerability Management</h4>
              <p>We proactively identify and address security vulnerabilities:</p>
              <ul>
                <li>Regular penetration testing</li>
                <li>Automated vulnerability scanning</li>
                <li>Responsible disclosure program</li>
                <li>Rapid response to security issues</li>
              </ul>

              <h2>6. Data Protection</h2>
              
              <h4>Data Minimization</h4>
              <p>We follow data minimization principles:</p>
              <ul>
                <li>Collect only necessary data</li>
                <li>Regular data retention reviews</li>
                <li>Secure data deletion processes</li>
                <li>Privacy by design approach</li>
              </ul>

              <h4>Backup and Recovery</h4>
              <p>Your data is protected against loss:</p>
              <ul>
                <li>Automated encrypted backups</li>
                <li>Geographically distributed backup storage</li>
                <li>Regular backup testing and verification</li>
                <li>Disaster recovery procedures</li>
              </ul>

              <h2>7. Monitoring and Incident Response</h2>
              
              <h4>24/7 Monitoring</h4>
              <p>We continuously monitor our systems:</p>
              <ul>
                <li>Real-time security monitoring</li>
                <li>Automated alert systems</li>
                <li>Log analysis and correlation</li>
                <li>Performance and availability monitoring</li>
              </ul>

              <h4>Incident Response</h4>
              <p>We have comprehensive incident response procedures:</p>
              <ul>
                <li>Dedicated security incident response team</li>
                <li>Documented incident response procedures</li>
                <li>Regular incident response training</li>
                <li>Post-incident analysis and improvement</li>
              </ul>

              <h2>8. Compliance and Certifications</h2>
              <p>We adhere to industry standards and regulations:</p>
              <ul>
                <li>GDPR compliance for data protection</li>
                <li>SOC 2 Type II compliance</li>
                <li>ISO 27001 security standards</li>
                <li>Regular compliance audits</li>
              </ul>

              <h2>9. Employee Security</h2>
              <p>Our team is trained in security best practices:</p>
              <ul>
                <li>Regular security awareness training</li>
                <li>Background checks for sensitive roles</li>
                <li>Secure development training</li>
                <li>Confidentiality agreements</li>
              </ul>

              <h2>10. Reporting Security Issues</h2>
              <p>If you discover a security vulnerability, please report it responsibly:</p>
              <p>Email: <a href="mailto:contact@hub8.ai">contact@hub8.ai</a></p>
              <p>We are committed to working with security researchers and will respond promptly to valid security reports.</p>

              <h2>11. Updates to Our Security Practices</h2>
              <p>We continuously improve our security measures and will update this page to reflect changes in our security practices. We encourage you to review this page periodically.</p>

              <h2>12. Contact Us</h2>
              <p>If you have any questions about our security practices, please contact us at:</p>
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
