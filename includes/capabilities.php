<?php
// Capabilities data
$capabilities = [
  [
    'title' => 'Automate Daily Tasks',
    'description' => 'Let AI handle your repetitive work so you can focus on what matters.'
  ],
  [
    'title' => 'Smart Predictions',
    'description' => 'Get insights about your business before problems happen.'
  ],
  [
    'title' => 'Keep Data Safe',
    'description' => 'Your information stays secure with built-in protection.'
  ],
  [
    'title' => 'Works with Everything',
    'description' => 'Connects easily to the tools you already use.'
  ]
];
?>

<section class="capabilities" data-animate="fade-in" id="services">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="cap-title">
          <span class="highlight">Hub8.ai</span> learns from your work and gets smarter every day, 
          making your business run smoother.
        </h2>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6">
        <?php foreach ($capabilities as $index => $capability): ?>
        <div class="feature <?php echo $index === count($capabilities) - 1 ? 'last' : ''; ?>" data-animate="slide-right">
          <img src="Assests/Images/star.svg" alt="Star Icon" class="icon">
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
