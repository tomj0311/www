<?php
http_response_code(404);
$page_title = "Page Not Found - Hub8.ai";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="banner min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h1 class="gradient-text display-1 mb-4">404</h1>
                    <h2 class="text-white mb-3">Page Not Found</h2>
                    <p class="text-white-50 mb-4">
                        The page you're looking for doesn't exist or has been moved. 
                        Let's get you back on track with intelligent automation.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="index.php" class="btn btn-gradient-border">Return Home</a>
                        <a href="contact.php" class="btn btn-outline-light">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
