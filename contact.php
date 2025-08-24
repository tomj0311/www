<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/google_gmail.php';
require_once __DIR__ . '/includes/mailer.php';

// Contact form handling
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic form validation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $type = $_POST['type'] ?? 'general';

    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Build email content
        $subject = 'New Contact Form Submission - ' . ucfirst($type);
        $plain = "New inquiry received:\r\n\r\n" .
                 "Name: {$name}\r\n" .
                 "Email: {$email}\r\n" .
                 (!empty($company) ? "Company: {$company}\r\n" : '') .
                 "Type: {$type}\r\n" .
                 "Message:\r\n{$message}\r\n";

        $html = '<h2>New inquiry received</h2>' .
                '<ul>' .
                '<li><strong>Name:</strong> ' . htmlspecialchars($name) . '</li>' .
                '<li><strong>Email:</strong> ' . htmlspecialchars($email) . '</li>' .
                (!empty($company) ? '<li><strong>Company:</strong> ' . htmlspecialchars($company) . '</li>' : '') .
                '<li><strong>Type:</strong> ' . htmlspecialchars($type) . '</li>' .
                '</ul>' .
                '<p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($message)) . '</p>';

    // Attempt to send via configured mail transport
    $sendResult = send_email(CONTACT_RECEIVER, $subject, $plain, $html, [
            'reply_to' => $email,
            'from_name' => $name,
        ]);

        if ($sendResult === true) {
            $success_message = 'Thank you for your message! We\'ll get back to you soon.';
            // Clear form data
            $name = $email = $company = $message = '';
        } else {
            // $sendResult can be a string error message
            if (is_string($sendResult) && stripos($sendResult, 'Email not authorized yet') !== false) {
                // Friendlier message for visitors if email hasn’t been set up by the site owner yet
                $error_message = 'We\'re setting up email on this site. Please try again later.';
            } else {
                $error_message = is_string($sendResult) ? $sendResult : 'Failed to send your message. Please try again later.';
            }
        }
    }
}

$contact_type = $_GET['type'] ?? 'general';
$page_title = "Contact Hub8.ai - Get Started with AI Automation | St. Petersburg Tech Startup";
$page_description = "Contact Hub8.ai, a St. Petersburg, Florida-based AI automation startup, to schedule a consultation or get your impact assessment. Transform your business with intelligent automation from our St. Petersburg headquarters.";
$page_keywords = "contact Hub8.ai, AI consultation, business automation contact, schedule demo, automation assessment, St. Petersburg AI startup contact, Hub8.ai St. Petersburg, AI automation consultation Florida";
$canonical_url = "https://www.hub8.ai/contact.php";
$og_image = "https://www.hub8.ai/assets/Images/bannar-bg.png";
$page_type = "webpage";
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
                    <h1 class="gradient-text">Contact Hub8.ai</h1>
                    <p class="description">Ready to transform your business with intelligent automation? Let's start the conversation.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
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
                    <?php if (defined('MAIL_TRANSPORT') && MAIL_TRANSPORT === 'gmail') : ?>
                        <?php
                        // Only show the Gmail setup prompt during setup (DEBUG_MODE) or with a secret query flag
                        $show_gmail_setup = (defined('DEBUG_MODE') && DEBUG_MODE) || (isset($_GET['gmail_setup']) && $_GET['gmail_setup'] === '1');
                        ?>
                        <?php if (!gmail_is_authorized() && $show_gmail_setup): ?>
                            <div class="alert alert-warning" role="alert">
                                Email sending is not authorized yet. <a class="alert-link" href="authorize-gmail.php">Connect Gmail</a> to enable contact form emails.
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <form method="POST" class="contact-form">
                        <input type="hidden" name="type" value="<?php echo htmlspecialchars($contact_type); ?>">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label text-white">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required value="<?php echo htmlspecialchars($name ?? ''); ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label text-white">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required value="<?php echo htmlspecialchars($email ?? ''); ?>">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="company" class="form-label text-white">Company Name</label>
                            <input type="text" class="form-control" id="company" name="company" value="<?php echo htmlspecialchars($company ?? ''); ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="inquiry_type" class="form-label text-white">Inquiry Type</label>
                            <select class="form-control" id="inquiry_type" name="inquiry_type">
                                <option value="consultation" <?php echo $contact_type === 'consultation' ? 'selected' : ''; ?>>Schedule Consultation</option>
                                <option value="assessment" <?php echo $contact_type === 'assessment' ? 'selected' : ''; ?>>Impact Assessment</option>
                                <option value="demo" <?php echo $contact_type === 'demo' ? 'selected' : ''; ?>>Request Demo</option>
                                <option value="general" <?php echo $contact_type === 'general' ? 'selected' : ''; ?>>General Inquiry</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label text-white">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-gradient-border">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
    <style>
    .contact-form .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 8px;
        padding: 12px 16px;
    }
    
    .contact-form .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: #ff4fd8;
        box-shadow: 0 0 0 0.2rem rgba(255, 79, 216, 0.25);
        color: #fff;
    }
    
    .contact-form .form-control::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    /* Fix Inquiry Type dropdown on dark theme */
    .contact-form select,
    .contact-form select.form-control,
    #inquiry_type {
        background: #1a1a1a !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        border-radius: 8px !important;
        appearance: none !important;
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        background-image: none !important; /* stop repeating chevrons */
        background-repeat: no-repeat !important;
        background-position: right 0.75rem center !important;
        background-size: 16px 12px !important;
        padding-right: 2.25rem !important; /* space for arrow if any */
    }

    .contact-form select:focus,
    #inquiry_type:focus {
        outline: none !important;
        background: #1a1a1a !important;
        border-color: #09EEFD !important;
        box-shadow: 0 0 0 0.2rem rgba(9, 238, 253, 0.25) !important;
        color: #ffffff !important;
    }

    /* Ensure dropdown options are readable */
    #inquiry_type option,
    .contact-form select option {
        background-color: #1a1a1a !important;
        color: #ffffff !important;
    }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
