<?php
// Include session configuration before starting session
require_once 'includes/session-config.php';
session_start();

// Simple login handling - in production, use proper authentication
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if (empty($email) || empty($password)) {
        $error_message = 'Please enter both email and password.';
    } else {
        // This is just a demo - in production, verify against database
        if ($email === 'demo@hub8.ai' && $password === 'demo123') {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_email'] = $email;
            header('Location: dashboard.php');
            exit;
        } else {
            $error_message = 'Invalid email or password.';
        }
    }
}

$page_title = "Login to Hub8.ai - Access Your AI Dashboard";
$page_description = "Login to your Hub8.ai account to access your AI automation dashboard and manage your intelligent workflows.";
$page_keywords = "Hub8.ai login, AI dashboard, automation login, user account access";
$canonical_url = "https://www.hub8.ai/login.php";
$og_image = "https://www.hub8.ai/assets/Images/logo.png";
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
    
    <section class="banner min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="login-card p-5">
                        <div class="text-center mb-4">
                            <h1 class="gradient-text mb-3">Welcome Back</h1>
                            <p class="text-white-50">Sign in to access your AI automation dashboard</p>
                        </div>
                        
                        <?php if ($error_message): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo htmlspecialchars($error_message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required 
                                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            
                            <button type="submit" class="btn btn-gradient-border w-100 mb-3">Sign In</button>
                            
                            <div class="text-center">
                                <p class="text-white-50">Demo credentials: demo@hub8.ai / demo123</p>
                                <p class="text-white-50">Don't have an account? <a href="signup.php" class="text-decoration-none gradient-text">Sign up here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
    <style>
    .login-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        backdrop-filter: blur(10px);
    }
    
    .login-card .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 8px;
        padding: 12px 16px;
    }
    
    .login-card .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: #ff4fd8;
        box-shadow: 0 0 0 0.2rem rgba(255, 79, 216, 0.25);
        color: #fff;
    }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
