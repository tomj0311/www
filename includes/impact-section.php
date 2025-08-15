<?php
// Impact data
$impact_stats = [
  [
    'industry' => 'Manufacturing',
    'description' => 'Less downtime and lower costs mean more productivity.',
    'percentage' => '45',
    'animation' => 'bounce-in'
  ],
  [
    'industry' => 'Healthcare',
    'description' => 'Better patient care with less paperwork.',
    'percentage' => '30',
    'animation' => 'slide-left'
  ],
  [
    'industry' => 'Finance',
    'description' => 'Faster service and better fraud protection.',
    'percentage' => '60',
    'animation' => 'flip-in'
  ],
  [
    'industry' => 'Retail',
    'description' => 'Know what to stock and when to order it.',
    'percentage' => '44',
    'animation' => 'rotate-in'
  ]
];
?>

<section class="impact-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 impact-header" data-animate="fade-up">
        <h2>Real Results <br>for Real Businesses</h2>
        <p>
          See how businesses like yours are saving time and money with Hub8.ai.
          These results speak for themselves.
        </p>
      </div>
    </div>

    <div class="row impact-cards g-3 g-lg-0">
      <?php foreach ($impact_stats as $index => $stat): ?>
      <div class="col-md-3 col-sm-6">
        <div class="impact-card tilt" data-animate="<?php echo htmlspecialchars($stat['animation']); ?>">
          <h3><?php echo htmlspecialchars($stat['industry']); ?></h3>
          <p><?php echo htmlspecialchars($stat['description']); ?></p>
          <span class="percentage"><?php echo htmlspecialchars($stat['percentage']); ?>%</span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
