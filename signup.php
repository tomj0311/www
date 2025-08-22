<?php
// Simple signup handling
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');
    
    if (empty($name) || empty($email) || empty($password)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } elseif ($password !== $confirm_password) {
        $error_message = 'Passwords do not match.';
    } elseif (strlen($password) < 6) {
        $error_message = 'Password must be at least 6 characters long.';
    } else {
        // In production, save to database and send confirmation email
        $success_message = 'Account created successfully! Please check your email for verification.';
        $name = $email = $company = $password = $confirm_password = '';
    }
}

$page_title = "Sign Up for Hub8.ai - Start Your AI Journey";
$page_description = "Create your Hub8.ai account and start automating your business processes with intelligent AI workflows.";
$page_keywords = "Hub8.ai signup, create account, AI automation registration, start automation journey";
$canonical_url = "https://www.hub8.ai/signup.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
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
                <div class="col-lg-6 col-md-8">
                    <div class="signup-card p-5">
                        <div class="text-center mb-4">
                            <h1 class="gradient-text mb-3">Join Hub8.ai</h1>
                            <p class="text-white-50">Start your journey with intelligent automation</p>
                        </div>
                        
                        <?php if ($success_message): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo htmlspecialchars($success_message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($error_message): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo htmlspecialchars($error_message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label text-white">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required 
                                           value="<?php echo htmlspecialchars($name ?? ''); ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label text-white">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required 
                                           value="<?php echo htmlspecialchars($email ?? ''); ?>">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="company" class="form-label text-white">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company" 
                                       value="<?php echo htmlspecialchars($company ?? ''); ?>">
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label text-white">Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="confirm_password" class="form-label text-white">Confirm Password *</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-gradient-border w-100 mb-3">Create Account</button>
                            
                            <div class="text-center">
                                <p class="text-white-50">Already have an account? <a href="login.php" class="text-decoration-none gradient-text">Sign in here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
    <style>
    .signup-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        backdrop-filter: blur(10px);
    }
    
    .signup-card .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 8px;
        padding: 12px 16px;
    }
    
    .signup-card .form-control:focus {
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
