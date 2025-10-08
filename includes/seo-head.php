<?php
/**
 * Centralized SEO Head Section
 * Include this in all pages after setting page-specific SEO variables
 * Note: Each page should include config.php before including this file if needed
 */

// Load configuration only if not already loaded
if (!defined('SITE_NAME')) {
    require_once(__DIR__ . '/../config.php');
}

// Fallback values if not set on individual pages
$site_name = $site_name ?? SITE_NAME ?? "Hub8.ai";
$page_title = $page_title ?? "Hub8.ai — Simple AI Automation for Your Business";
$page_description = $page_description ?? "Save time and money with AI automation that's easy to use. Hub8.ai handles your repetitive tasks with dynamic workflows and AI-generated processes, giving you a competitive advantage and significant cost savings so you can focus on growing your business.";
$canonical_url = $canonical_url ?? (SITE_URL ?? "https://www.hub8.ai") . $_SERVER['REQUEST_URI'];
$og_image = $og_image ?? (SITE_URL ?? "https://www.hub8.ai") . "/assets/Images/bannar-bg.png";
$page_keywords = $page_keywords ?? "AI automation, business automation, intelligent automation, GPT, machine learning, productivity, dynamic workflows, AI-generated workflows, competitive advantage, cost advantage, automated business processes, intelligent workflow optimization, AI-driven cost reduction, competitive edge automation, smart business workflows, AI workflow builder, automated decision making, business process optimization, intelligent task automation, AI competitive strategy, cost-effective automation, automated workflow management, AI business intelligence, smart process automation";
$author = $author ?? "Hub8.ai";
$page_type = $page_type ?? "website";

// Get Google Analytics ID from config
$ga_measurement_id = defined('GA_MEASUREMENT_ID') ? GA_MEASUREMENT_ID : "G-XXXXXXXXXX";

// Get Microsoft Clarity Project ID from config
$clarity_project_id = defined('CLARITY_PROJECT_ID') ? CLARITY_PROJECT_ID : "XXXXXXXXXX";
?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>" />
    <meta name="author" content="<?php echo htmlspecialchars($author); ?>" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />
    <meta name="theme-color" content="#000000" />

    <!-- Open Graph -->
    <meta property="og:type" content="<?php echo htmlspecialchars($page_type); ?>" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>" />
    <meta property="og:image:alt" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>" />
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($page_title); ?>" />

    <!-- Additional SEO -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="msapplication-config" content="browserconfig.xml" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/Images/favicon.ico">
    <link rel="shortcut icon" href="assets/Images/favicon.ico">
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.clarity.ms">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <!-- Google tag (gtag.js) -->
    <?php if ($ga_measurement_id !== "G-XXXXXXXXXX"): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($ga_measurement_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($ga_measurement_id); ?>', {
            page_title: '<?php echo addslashes($page_title); ?>',
            page_location: '<?php echo addslashes($canonical_url); ?>'
        });
    </script>
    <?php endif; ?>

    <!-- Microsoft Clarity -->
    <?php if ($clarity_project_id !== "XXXXXXXXXX"): ?>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "<?php echo htmlspecialchars($clarity_project_id); ?>");
    </script>
    <?php endif; ?>

    <!-- Structured Data: <?php echo $page_type === 'website' ? 'Website' : 'WebPage'; ?> -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<?php echo $page_type === 'website' ? 'WebSite' : 'WebPage'; ?>",
        "name": "<?php echo addslashes($page_title); ?>",
        "url": "<?php echo addslashes($canonical_url); ?>",
        "description": "<?php echo addslashes($page_description); ?>",
        <?php if ($page_type === 'website'): ?>
        "publisher": {
            "@type": "Organization",
            "name": "<?php echo addslashes($site_name); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo addslashes((SITE_URL ?? 'https://www.hub8.ai') . '/assets/Images/logo.png'); ?>"
            }
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?php echo addslashes((SITE_URL ?? 'https://www.hub8.ai') . '/search.php?q={search_term_string}'); ?>",
            "query-input": "required name=search_term_string"
        }
        <?php else: ?>
        "isPartOf": {
            "@type": "WebSite",
            "name": "<?php echo addslashes($site_name); ?>",
            "url": "<?php echo addslashes(SITE_URL ?? 'https://www.hub8.ai'); ?>"
        },
        "publisher": {
            "@type": "Organization",
            "name": "<?php echo addslashes($site_name); ?>"
        }
        <?php endif; ?>
    }
    </script>

    <!-- Prevent flash of unstyled content -->
    <script>
        // Add loading class immediately to prevent flash
        (function() {
            const html = document.documentElement;
            html.classList.add('page-loading');
            html.style.background = '#000'; // Ensure consistent background
            
            // Also handle body when it's available
            if (document.body) {
                document.body.classList.add('loading');
                document.body.style.background = '#000';
            } else {
                document.addEventListener('DOMContentLoaded', function() {
                    if (document.body) {
                        document.body.classList.add('loading');
                        document.body.style.background = '#000';
                    }
                });
            }
        })();
    </script>
