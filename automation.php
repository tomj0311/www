<?php
$page_title = "Hub8.ai - Generative Intelligent Automation Platform";
$page_description = "Discover Hub8.ai's revolutionary GIA platform - the future of intelligent automation that learns, adapts, and evolves with your business needs.";
$page_keywords = "generative intelligent automation, GIA platform, AI automation, intelligent workflows, machine learning automation, business process automation";
$canonical_url = "https://www.hub8.ai/automation.php";
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
    
    <!-- Hero Section -->
    <section class="banner" id="automation-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="gradient-text" data-animate="fade-up">Generative Intelligent Automation</h1>
                    <p class="description" data-animate="fade-up">Experience the future of automation with GIA - where artificial intelligence doesn't just follow rules, it creates, learns, and evolves to transform your business operations.</p>
                    <a href="contact.php" class="btn-gradient-border" data-animate="fade-up">Start Your Automation Journey</a>
                </div>
                <div class="col-lg-6">
                    <img src="Assests/Images/gia.png" alt="GIA Platform" class="img-fluid animate-float hero-image" data-animate="fade-in">
                </div>
            </div>
        </div>
    </section>

    <!-- What is GIA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="gradient-text mb-4">What is GIA?</h2>
                    <p class="lead text-white-50 mb-5">
                        Generative Intelligent Automation (GIA) represents a paradigm shift from traditional automation. 
                        Unlike conventional rule-based systems, GIA uses advanced AI to understand context, 
                        generate solutions, and continuously improve processes autonomously.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-box p-4 h-100 text-center">
                        <div class="feature-icon mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L13.09 8.26L19 9L13.09 9.74L12 16L10.91 9.74L5 9L10.91 8.26L12 2Z" fill="url(#gradient1)"/>
                                <defs>
                                    <linearGradient id="gradient1">
                                        <stop stop-color="#F929D5"/>
                                        <stop offset="1" stop-color="#09EEFD"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h5 class="gradient-text">Generative</h5>
                        <p class="text-white-50">Creates new solutions and processes dynamically based on your business needs</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box p-4 h-100 text-center">
                        <div class="feature-icon mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="url(#gradient2)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <linearGradient id="gradient2">
                                        <stop stop-color="#F929D5"/>
                                        <stop offset="1" stop-color="#09EEFD"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h5 class="gradient-text">Intelligent</h5>
                        <p class="text-white-50">Understands context, learns from patterns, and makes informed decisions</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box p-4 h-100 text-center">
                        <div class="feature-icon mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4V20H20V4H4ZM6 6H18V18H6V6ZM8 8V16H10V8H8ZM12 10V16H14V10H12ZM16 12V16H18V12H16Z" fill="url(#gradient3)"/>
                                <defs>
                                    <linearGradient id="gradient3">
                                        <stop stop-color="#F929D5"/>
                                        <stop offset="1" stop-color="#09EEFD"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h5 class="gradient-text">Automation</h5>
                        <p class="text-white-50">Executes complex workflows automatically while continuously optimizing performance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Features Section -->
    <section class="py-5" style="background: rgba(255, 255, 255, 0.02);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="gradient-text mb-4">Platform Capabilities</h2>
                    <p class="lead text-white-50">
                        Hub8.ai's GIA platform delivers enterprise-grade automation with unmatched intelligence and adaptability.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="capability-card p-4">
                        <h4 class="text-white mb-3">🔄 Adaptive Learning Engine</h4>
                        <p class="text-white-50 mb-3">
                            Our AI continuously learns from your business processes, user interactions, and outcomes to 
                            improve automation efficiency and accuracy over time.
                        </p>
                        <ul class="text-white-50">
                            <li>Pattern recognition and analysis</li>
                            <li>Behavioral adaptation</li>
                            <li>Performance optimization</li>
                            <li>Predictive modeling</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="capability-card p-4">
                        <h4 class="text-white mb-3">🛡️ Enterprise Security</h4>
                        <p class="text-white-50 mb-3">
                            Built with security-first architecture ensuring your data remains protected 
                            with on-premise deployment options and end-to-end encryption.
                        </p>
                        <ul class="text-white-50">
                            <li>On-premise deployment</li>
                            <li>End-to-end encryption</li>
                            <li>Role-based access control</li>
                            <li>Compliance ready</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="capability-card p-4">
                        <h4 class="text-white mb-3">🔗 Universal Integration</h4>
                        <p class="text-white-50 mb-3">
                            Connect seamlessly with 300+ business applications and systems through 
                            our comprehensive integration framework.
                        </p>
                        <ul class="text-white-50">
                            <li>300+ pre-built connectors</li>
                            <li>API-first architecture</li>
                            <li>Real-time synchronization</li>
                            <li>Custom integration support</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="capability-card p-4">
                        <h4 class="text-white mb-3">📊 Intelligent Analytics</h4>
                        <p class="text-white-50 mb-3">
                            Gain deep insights into your automated processes with advanced analytics 
                            and real-time monitoring capabilities.
                        </p>
                        <ul class="text-white-50">
                            <li>Real-time dashboards</li>
                            <li>Performance metrics</li>
                            <li>Predictive insights</li>
                            <li>Custom reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="gradient-text mb-4">Transform Every Industry</h2>
                    <p class="lead text-white-50">
                        GIA adapts to any industry vertical, delivering tailored automation solutions 
                        that understand your unique business requirements.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="industry-card p-4 text-center">
                        <div class="industry-icon mb-3">
                            <span style="font-size: 3rem;">🏥</span>
                        </div>
                        <h5 class="text-white mb-3">Healthcare</h5>
                        <p class="text-white-50">Automate patient data processing, appointment scheduling, and compliance reporting while maintaining HIPAA standards.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="industry-card p-4 text-center">
                        <div class="industry-icon mb-3">
                            <span style="font-size: 3rem;">🏭</span>
                        </div>
                        <h5 class="text-white mb-3">Manufacturing</h5>
                        <p class="text-white-50">Optimize supply chain management, quality control, and predictive maintenance across production lines.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="industry-card p-4 text-center">
                        <div class="industry-icon mb-3">
                            <span style="font-size: 3rem;">🏦</span>
                        </div>
                        <h5 class="text-white mb-3">Financial Services</h5>
                        <p class="text-white-50">Streamline transaction processing, risk assessment, and regulatory compliance with intelligent automation.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="industry-card p-4 text-center">
                        <div class="industry-icon mb-3">
                            <span style="font-size: 3rem;">🛒</span>
                        </div>
                        <h5 class="text-white mb-3">Retail</h5>
                        <p class="text-white-50">Enhance customer experience through automated inventory management, personalized marketing, and order fulfillment.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="industry-card p-4 text-center">
                        <div class="industry-icon mb-3">
                            <span style="font-size: 3rem;">📚</span>
                        </div>
                        <h5 class="text-white mb-3">Education</h5>
                        <p class="text-white-50">Automate student enrollment, grading systems, and administrative workflows while personalizing learning experiences.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="industry-card p-4 text-center">
                        <div class="industry-icon mb-3">
                            <span style="font-size: 3rem;">🏢</span>
                        </div>
                        <h5 class="text-white mb-3">Enterprise</h5>
                        <p class="text-white-50">Scale operations with intelligent document processing, workflow automation, and cross-departmental integration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROI Section -->
    <section class="py-5" style="background: rgba(255, 255, 255, 0.02);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="gradient-text mb-4">Measurable ROI</h2>
                    <p class="text-white-50 mb-4">
                        Organizations using Hub8.ai's GIA platform report significant improvements 
                        in efficiency, cost reduction, and operational excellence.
                    </p>
                    
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="stat-box text-center p-3">
                                <h3 class="gradient-text mb-2">85%</h3>
                                <p class="text-white-50 small">Cost Reduction</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="stat-box text-center p-3">
                                <h3 class="gradient-text mb-2">10x</h3>
                                <p class="text-white-50 small">Faster Processing</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="stat-box text-center p-3">
                                <h3 class="gradient-text mb-2">99.9%</h3>
                                <p class="text-white-50 small">Accuracy Rate</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="stat-box text-center p-3">
                                <h3 class="gradient-text mb-2">24/7</h3>
                                <p class="text-white-50 small">Operation Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="Assests/Images/technologyical_egde.png" alt="Technology Edge" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="gradient-text mb-4">Ready to Transform Your Business?</h2>
                    <p class="lead text-white-50 mb-4">
                        Join leading organizations who are already experiencing the power of 
                        Generative Intelligence Automation. Start your journey today.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="contact.php?type=consultation" class="btn-gradient">Free Consultation</a>
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
    
    .capability-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        height: 100%;
        transition: all 0.3s ease;
    }
    
    .capability-card:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(9, 238, 253, 0.3);
        transform: translateY(-3px);
    }
    
    .capability-card ul {
        list-style: none;
        padding-left: 0;
    }
    
    .capability-card ul li {
        padding: 0.25rem 0;
        position: relative;
        padding-left: 1.5rem;
    }
    
    .capability-card ul li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #09EEFD;
        font-weight: bold;
    }
    
    .industry-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        height: 100%;
        transition: all 0.3s ease;
    }
    
    .industry-card:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(249, 41, 213, 0.3);
        transform: translateY(-5px);
    }
    
    .stat-box {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
    }
    
    .feature-icon svg {
        filter: drop-shadow(0 0 10px rgba(9, 238, 253, 0.3));
    }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assests/main.js"></script>
</body>
</html>
