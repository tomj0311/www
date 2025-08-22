<?php
// Capabilities data
$capabilities = [
  [
    'title' => 'AI-Powered Custom Software Development',
    'description' => 'We craft intelligent, tailored software solutions that learn and adapt to your business needs. Our AI-enhanced development process ensures your applications are not just functional, but smart and future-ready.'
  ],
  [
    'title' => 'Intelligent Business Process Automation',
    'description' => 'Transform your manual workflows into smart, self-optimizing processes with our advanced GIA platform. Let AI handle the routine tasks while your team focuses on strategic growth and innovation.'
  ],
  [
    'title' => 'AI-Enhanced Security & Reliability',
    'description' => 'Your business deserves protection that thinks ahead. Our AI-driven security systems continuously monitor, learn, and adapt to protect your data with enterprise-grade reliability you can trust.'
  ],
  [
    'title' => 'Smart Integration & Connectivity',
    'description' => 'Seamlessly connect your entire technology ecosystem with AI-powered integration solutions. Our intelligent connectors automatically optimize data flow and eliminate silos across all your business tools, including Google Workspace, Analytics, and Cloud services.'
  ]
];
?>

<section class="capabilities" data-animate="fade-in" id="services">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="cap-title">
          <span class="highlight">Hub8.ai</span> transforms businesses by crafting intelligent software solutions that adapt, learn, and evolve with your unique operational needs.
        </h2>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6">
        <?php foreach ($capabilities as $index => $capability): ?>
        <div class="feature <?php echo $index === count($capabilities) - 1 ? 'last' : ''; ?>" data-animate="slide-right">
          <img src="assets/Images/star.svg" alt="Star Icon" class="icon">
          <div class="text-wrap">
            <h5><?php echo htmlspecialchars($capability['title']); ?></h5>
            <p><?php echo htmlspecialchars($capability['description']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
