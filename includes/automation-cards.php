<?php
// Automation cards data
$automation_cards = [
  [
    'title' => 'Stop Doing Boring Tasks',
    'description' => 'Let AI handle repetitive work while you focus on growing your business.',
    'animation' => 'bounce-in'
  ],
  [
    'title' => 'See Everything in One Place',
    'description' => 'Get all your business information organized and easy to understand.',
    'animation' => 'flip-in'
  ],
  [
    'title' => 'Fix Problems Before They Start',
    'description' => 'Know about issues early so you can solve them quickly.',
    'animation' => 'rotate-in'
  ],
  [
    'title' => 'Get Smarter Over Time',
    'description' => 'The more you use it, the better it gets at helping your business.',
    'animation' => 'scale-up'
  ]
];
?>

<section class="automation-cards position-relative" id="automation">
  <!-- Background image with blend overlay -->
  <div class="automation-cards__bg position-absolute w-100 h-100"></div>

  <!-- Content inside Bootstrap container -->
  <div class="container automation-cards__inner position-relative">
    <!-- Top content -->
    <div class="automation-cards__intro" data-animate="fade-up">
      <h2 class="automation-cards__title">
        From Busy Work to
        <span class="gradient-text">Smart <br>
          Automation</span>
      </h2>
      <p class="automation-cards__desc">
        Most businesses waste time on tasks that could be automated. 
        Here's how Hub8.ai helps you work smarter, not harder.
      </p>
    </div>

    <!-- Bottom cards -->
    <div class="row g-3 automation-cards__cards" data-stagger="100">
      <?php foreach ($automation_cards as $index => $card): ?>
      <div class="col-lg-3 col-md-6">
        <div class="automation-card tilt" data-animate="<?php echo htmlspecialchars($card['animation']); ?>">
          <h3 class="automation-card__title"><?php echo htmlspecialchars($card['title']); ?></h3>
          <p class="automation-card__desc"><?php echo htmlspecialchars($card['description']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
