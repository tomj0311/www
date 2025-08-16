<?php
// Simple search functionality
$search_query = trim($_GET['q'] ?? '');
$search_results = [];

if (!empty($search_query)) {
    // Simple search content - in a real application, you'd search a database
    $content_pages = [
        [
            'title' => 'Generative Intelligent Automation (GIA)',
            'url' => 'automation.php',
            'description' => 'Discover Hub8.ai\'s revolutionary GIA platform - the future of intelligent automation that learns, adapts, and evolves with your business needs.',
            'keywords' => 'GIA, generative intelligent automation, automation, AI, GPT, intelligent, workflow, platform'
        ],
        [
            'title' => 'GIA Platform Features',
            'url' => 'automation.php#features',
            'description' => 'Experience the future of automation with GIA - where artificial intelligence doesn\'t just follow rules, it creates, learns, and evolves.',
            'keywords' => 'GIA, platform, features, intelligent automation, AI, machine learning, adaptive'
        ],
        [
            'title' => 'Home - Hub8.ai Intelligence',
            'url' => 'index.php',
            'description' => 'Automate workflows with local GPT intelligence, 300+ integrations, and full on-premise control.',
            'keywords' => 'automation, AI, GPT, intelligent, workflow, hub8, home'
        ],
        [
            'title' => 'Contact Hub8.ai',
            'url' => 'contact.php',
            'description' => 'Schedule a consultation or get your impact assessment to transform your business.',
            'keywords' => 'contact, consultation, assessment, schedule'
        ],
        [
            'title' => 'About Hub8.ai',
            'url' => 'about.php',
            'description' => 'Learn about our mission to revolutionize business automation with intelligent AI and GIA technology.',
            'keywords' => 'about, mission, company, technology, GIA, intelligent automation'
        ],
        [
            'title' => 'AI Technologies & Services',
            'url' => 'index.php#services',
            'description' => 'Genetic algorithms, large language models, machine learning systems, and secure infrastructure.',
            'keywords' => 'AI, technology, genetic algorithms, machine learning, LLM, services'
        ]
    ];
    
    // Simple search logic
    foreach ($content_pages as $page) {
        $search_in = strtolower($page['title'] . ' ' . $page['description'] . ' ' . $page['keywords']);
        if (strpos($search_in, strtolower($search_query)) !== false) {
            $search_results[] = $page;
        }
    }
}

$page_title = !empty($search_query) ? "Search Results for: " . htmlspecialchars($search_query) : "Search Hub8.ai";
$page_description = !empty($search_query) ? "Search results for '" . htmlspecialchars($search_query) . "' on Hub8.ai - Find AI automation solutions and information." : "Search Hub8.ai for AI automation solutions, intelligent workflows, and business process automation information.";
$page_keywords = "Hub8.ai search, AI automation search, find automation solutions, intelligent workflow search";
$canonical_url = "https://www.hub8.ai/search.php" . (!empty($search_query) ? "?q=" . urlencode($search_query) : "");
$og_image = "https://www.hub8.ai/Assests/Images/logo.svg";
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
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="gradient-text">Search Results</h1>
                    <?php if (!empty($search_query)): ?>
                        <p class="description">Results for: "<?php echo htmlspecialchars($search_query); ?>"</p>
                    <?php else: ?>
                        <p class="description">Enter a search term to find relevant content.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Search Form -->
                    <form method="GET" class="mb-5">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control search-input" 
                                   placeholder="Search Hub8.ai..." 
                                   value="<?php echo htmlspecialchars($search_query); ?>">
                            <button class="btn btn-gradient" type="submit">Search</button>
                        </div>
                    </form>
                    
                    <!-- Search Results -->
                    <?php if (!empty($search_query)): ?>
                        <?php if (!empty($search_results)): ?>
                            <h3 class="text-white mb-4">Found <?php echo count($search_results); ?> result(s)</h3>
                            <?php foreach ($search_results as $result): ?>
                                <div class="search-result mb-4 p-4">
                                    <h4><a href="<?php echo htmlspecialchars($result['url']); ?>" class="gradient-text text-decoration-none"><?php echo htmlspecialchars($result['title']); ?></a></h4>
                                    <p class="text-white-50 mb-2"><?php echo htmlspecialchars($result['description']); ?></p>
                                    <small class="text-muted"><?php echo htmlspecialchars($result['url']); ?></small>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center">
                                <h3 class="text-white mb-3">No results found</h3>
                                <p class="text-white-50 mb-4">Sorry, we couldn't find any content matching "<?php echo htmlspecialchars($search_query); ?>"</p>
                                <a href="index.php" class="btn btn-gradient-border">Return to Home</a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
    <style>
    .search-input {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 8px 0 0 8px;
        padding: 12px 16px;
    }
    
    .search-input:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: #ff4fd8;
        box-shadow: 0 0 0 0.2rem rgba(255, 79, 216, 0.25);
        color: #fff;
    }
    
    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
    
    .search-result {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .search-result:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 79, 216, 0.3);
        transform: translateY(-2px);
    }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assests/main.js"></script>
</body>
</html>
