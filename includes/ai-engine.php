<?php
// AI Engine data
$ai_technologies = [
  [
    'icon' => 'tech_icon_1.svg',
    'title' => 'Smart Problem Solving',
    'description' => 'AI that learns the best way to solve your business challenges and gets better over time.',
    'animation_class' => 'animate-rotate',
    'card_animation' => 'slide-right'
  ],
  [
    'icon' => 'tech_icon_2.svg',
    'title' => 'Understands Your Business',
    'description' => 'AI that speaks your language and understands what your business needs to succeed.',
    'animation_class' => 'animate-pulse',
    'card_animation' => 'slide-left'
  ],
  [
    'icon' => 'tech_icon_3.svg',
    'title' => 'Learns from Your Data',
    'description' => 'Finds patterns in your business data to help you make better decisions and spot opportunities.',
    'animation_class' => 'animate-heartbeat',
    'card_animation' => 'flip-in'
  ],
  [
    'icon' => 'tech_icon_4.svg',
    'title' => 'Keeps Everything Safe',
    'description' => 'Your data stays protected with multiple layers of security while working fast and reliably.',
    'animation_class' => '',
    'card_animation' => 'bounce-in'
  ]
];
?>

<section class="ai-engine-section">
  <div class="container text-center">
    <p class="small-heading">How It Works</p>
    <h2 class="main-heading">
      The Smart Technology Behind <span>Hub8.ai</span>
    </h2>
    <p class="description">
      Hub8.ai uses powerful AI technology that's easy to understand and even easier to use.
      Here's what makes it work so well.
    </p>

    <!-- Mobile Carousel (shown only on small screens) -->
    <div id="aiCarousel" class="carousel slide d-lg-none mb-4" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">
        <?php foreach ($ai_technologies as $index => $tech): ?>
        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
          <div class="ai-card" data-animate="fade-in">
            <div class="icon-title">
              <img src="Assests/Images/<?php echo htmlspecialchars($tech['icon']); ?>" 
                   alt="<?php echo htmlspecialchars($tech['title']); ?>" 
                   class="<?php echo htmlspecialchars($tech['animation_class']); ?>" />
              <h3><?php echo htmlspecialchars($tech['title']); ?></h3>
            </div>
            <p><?php echo htmlspecialchars($tech['description']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#aiCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#aiCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Original grid (hidden on small screens) -->
    <div class="row gx-0 ai-cards d-none d-lg-flex" data-stagger="120">
      <?php foreach ($ai_technologies as $index => $tech): ?>
      <div class="col-lg-6 col-12">
        <div class="ai-card tilt" data-animate="<?php echo htmlspecialchars($tech['card_animation']); ?>">
          <div class="icon-title">
            <img src="Assests/Images/<?php echo htmlspecialchars($tech['icon']); ?>" 
                 alt="<?php echo htmlspecialchars($tech['title']); ?>" 
                 class="<?php echo htmlspecialchars($tech['animation_class']); ?>" />
            <h3><?php echo htmlspecialchars($tech['title']); ?></h3>
          </div>
          <p><?php echo htmlspecialchars($tech['description']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
