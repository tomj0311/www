<?php
$page_title = "About Hub8.ai - Generative Intelligent Automation";
$page_description = "Learn about Hub8.ai's revolutionary approach to intelligent automation, our technology, and how we're transforming businesses worldwide.";
$page_keywords = "about Hub8.ai, generative intelligent automation, AI company, business automation, machine learning, artificial intelligence technology, dynamic workflows, AI-generated workflows, competitive advantage, cost advantage, automated business processes, intelligent workflow optimization, AI-driven cost reduction, competitive edge automation, smart business workflows, AI workflow builder, automated decision making, business process optimization, intelligent task automation, AI competitive strategy, cost-effective automation";
$canonical_url = "https://www.hub8.ai/about.php";
$og_image = "https://www.hub8.ai/Assests/Images/gia.png";
$page_type = "webpage";

// Include config for SEO constants
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/seo-head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="gradient-text">About Hub8.ai</h1>
                    <p class="description">We're pioneering the future of business automation with Generative Intelligent Automation (GIA) - where AI doesn't just follow rules, it learns, adapts, and evolves.</p>
                    <a href="contact.php" class="btn-gradient-border">Get Started</a>
                </div>
                <div class="col-lg-6">
                    <img src="Assests/Images/gia.png" alt="About Hub8.ai" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="gradient-text mb-4">Our Mission</h2>
                    <p class="lead text-white-50 mb-4">
                        At Hub8.ai, we believe that every business deserves access to intelligent automation that doesn't just execute tasks—it understands context, learns from experience, and continuously improves operations.
                    </p>
                    
                    <h3 class="text-white mb-3">What Makes Us Different</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="feature-box p-4 h-100">
                                <h5 class="gradient-text">Local Intelligence</h5>
                                <p class="text-white-50">Your data never leaves your infrastructure. Our AI runs entirely on-premise, ensuring complete privacy and control.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-box p-4 h-100">
                                <h5 class="gradient-text">Adaptive Learning</h5>
                                <p class="text-white-50">Unlike static automation tools, our GIA technology learns from every interaction and continuously optimizes performance.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-box p-4 h-100">
                                <h5 class="gradient-text">300+ Integrations</h5>
                                <p class="text-white-50">Seamlessly connect with your existing tools and systems without disrupting your current workflows.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-box p-4 h-100">
                                <h5 class="gradient-text">Industry Agnostic</h5>
                                <p class="text-white-50">From manufacturing to healthcare, our solutions adapt to any industry's unique requirements and challenges.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
    <style>
    .feature-box {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .feature-box:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 79, 216, 0.3);
        transform: translateY(-5px);
    }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assests/main.js"></script>
</body>
</html>
