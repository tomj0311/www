# Hostinger Deployment Fix for PHPMailer

## Problem
Getting error: "SMTP transport requires PHPMailer. Install via Composer: composer require phpmailer/phpmailer"

## Root Cause
The `vendor` directory containing PHPMailer is not being uploaded to Hostinger server.

## Solution Steps

### Step 1: Ensure Local Dependencies are Ready
Your local setup is already correct. PHPMailer is installed via Composer in the `vendor` directory.

### Step 2: Upload the Complete Project
When deploying to Hostinger, you MUST include these directories/files:

**Critical Files/Folders to Upload:**
- `vendor/` directory (contains PHPMailer)
- `composer.json`
- `composer.lock`
- All your PHP files
- `assets/` directory
- `includes/` directory
- `frontend/` directory (if used)

### Step 3: Deployment Methods

#### Option A: FTP/SFTP Upload (Recommended)
1. Connect to your Hostinger FTP
2. Navigate to your domain's public_html folder
3. Upload ALL files including the `vendor` folder
4. Ensure the `vendor` directory structure is preserved:
   ```
   public_html/
   ├── vendor/
   │   ├── autoload.php
   │   ├── composer/
   │   └── phpmailer/
   ├── includes/
   ├── config.php
   └── ... (other files)
   ```

#### Option B: File Manager in cPanel
1. Zip your entire project folder (including vendor)
2. Upload the zip file to Hostinger File Manager
3. Extract it in the public_html directory

### Step 4: Verify on Hostinger
Create a test file to verify PHPMailer is available:

```php
<?php
// Create this as test-phpmailer.php on your server
require_once 'vendor/autoload.php';

if (class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
    echo "✅ PHPMailer is available!";
    echo "<br>Version: " . PHPMailer\PHPMailer\PHPMailer::VERSION;
} else {
    echo "❌ PHPMailer not found!";
}
?>
```

### Step 5: Alternative Solutions

#### If you can't upload vendor directory:
Change your mail transport in `config.php`:

```php
// Change from:
define('MAIL_TRANSPORT', 'smtp');

// To use PHP's built-in mail():
define('MAIL_TRANSPORT', 'phpmail');
```

**Note:** This requires your Hostinger server to have mail() function configured.

#### Use Gmail OAuth instead:
```php
// Change to:
define('MAIL_TRANSPORT', 'gmail');
```

This uses the Gmail API which doesn't require PHPMailer.

### Step 6: Production Configuration
Ensure in `config.php`:
```php
define('DEBUG_MODE', false); // Set to false in production
```

## File Size Considerations
The vendor directory is about 2-3MB. Most hosting providers allow this.

## Security Notes
- Never commit sensitive credentials
- Use environment variables for SMTP passwords on production
- Ensure proper file permissions on server

## Troubleshooting
If still having issues:
1. Check if vendor/autoload.php exists on server
2. Verify file permissions (644 for files, 755 for directories)
3. Check server PHP version compatibility
4. Review server error logs
