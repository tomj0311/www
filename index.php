<?php
// PHP Configuration
error_reporting(E_ALL);
ini_set('display_errors', 0); // Set to 0 for production
date_default_timezone_set('UTC');

// Basic SEO and Meta Information
$site_name = "Hub8.ai";
$page_title = "Hub8.ai — Efficient AI Automation for Your Business";
$page_description = "Save time and money with AI automation that's easy to use. Hub8.ai handles your repetitive tasks with dynamic workflows and AI-generated processes, giving you a competitive advantage and significant cost savings so you can focus on growing your business.";
$canonical_url = "https://www.hub8.ai/";
$og_image = "https://www.hub8.ai/Assests/Images/bannar-bg.png";
$page_keywords = "AI automation, business automation, intelligent automation, GPT, machine learning, productivity, workflow automation, artificial intelligence, dynamic workflows, AI-generated workflows, competitive advantage, cost advantage, automated business processes, intelligent workflow optimization, AI-driven cost reduction, competitive edge automation, smart business workflows, AI workflow builder, automated decision making, business process optimization, intelligent task automation, AI competitive strategy, cost-effective automation, automated workflow management, AI business intelligence, smart process automation";
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

  <!-- BANNER -->
  <?php include 'includes/banner.php'; ?>

  <!-- INFO SECTION -->
  <?php include 'includes/info-section.php'; ?>

  <!-- AUTOMATION CARDS SECTION -->
  <?php include 'includes/automation-cards.php'; ?>

  <!-- AI ENGINE SECTION -->
  <?php include 'includes/ai-engine.php'; ?>

  <!-- IMPACT SECTION -->
  <?php include 'includes/impact-section.php'; ?>

  <!-- CTA SECTION -->
  <?php include 'includes/cta-section.php'; ?>

  <!-- CAPABILITIES SECTION -->
  <?php include 'includes/capabilities.php'; ?>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="Assests/main.js"></script>
</body>

</html>
