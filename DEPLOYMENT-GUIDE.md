# Hub8.ai - Hostinger Deployment Guide

## 📋 Prerequisites
- Hostinger hosting account
- FTP/SFTP client (FileZilla recommended) or File Manager access
- Domain name configured

## 🚀 Deployment Steps

### 1. Upload Files to Hostinger
1. Access your Hostinger File Manager or use FTP client
2. Navigate to your domain's public_html folder
3. Upload all files from this project to public_html

### 2. File Structure on Hostinger
```
public_html/
├── index.php (main homepage)
├── about.php
├── contact.php
├── login.php
├── signup.php
├── search.php
├── config.php
├── .htaccess
├── includes/
│   ├── header.php
│   ├── banner.php
│   ├── info-section.php
│   ├── automation-cards.php
│   ├── ai-engine.php
│   ├── impact-section.php
│   ├── cta-section.php
│   └── capabilities.php
└── Assests/
    ├── main.js
    ├── style.css
    ├── style.css.map
    ├── style.scss
    ├── bootstrap/
    └── Images/
```

### 3. Configuration Updates

#### Update config.php
Edit `config.php` with your actual Hostinger details:

```php
// Database Configuration (if you plan to use database)
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_hostinger_database_name');
define('DB_USER', 'your_hostinger_db_username');
define('DB_PASS', 'your_hostinger_db_password');

// Site Configuration
define('SITE_URL', 'https://hub8.ai');
define('ADMIN_EMAIL', 'contact@hub8.ai');

// Google Analytics
define('GA_MEASUREMENT_ID', 'G-YOUR-ACTUAL-GA4-ID');
```

#### Update Google Analytics
In `index.php`, replace the placeholder GA ID:
- Change `G-XXXXXXXXXX` to your actual Google Analytics 4 Measurement ID

### 4. SSL Certificate Setup
1. In Hostinger control panel, go to SSL
2. Enable "Force HTTPS" for your domain
3. Uncomment these lines in `.htaccess`:
```apache
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### 5. Email Configuration (for contact forms)
1. Create an email account in Hostinger cPanel
2. Update SMTP settings in `config.php`:
```php
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_USERNAME', 'noreply@yourdomain.com');
define('SMTP_PASSWORD', 'your_email_password');
```

### 6. Database Setup (Optional)
If you want to add database functionality:
1. Create a MySQL database in Hostinger cPanel
2. Update database credentials in `config.php`
3. Create necessary tables for contact forms, user accounts, etc.

### 7. File Permissions
Set correct permissions for security:
- Folders: 755
- PHP files: 644
- .htaccess: 644
- config.php: 600 (more secure)

## 🔧 Testing Your Deployment

### 1. Basic Functionality Test
- Visit your domain: `https://hub8.ai`
- Test navigation links
- Check responsive design on mobile
- Verify all animations work

### 2. Form Testing
- Test contact form submission
- Test search functionality
- Test login/signup (demo credentials work)

### 3. Performance Testing
- Check page load speeds
- Verify image optimization
- Test HTTPS redirection

## 🛠️ Troubleshooting

### Common Issues:

#### 500 Internal Server Error
- Check .htaccess syntax
- Verify file permissions
- Check error logs in cPanel

#### Images Not Loading
- Verify file paths in HTML/PHP
- Check image file permissions
- Ensure images are uploaded to correct folder

#### PHP Errors
- Enable error reporting temporarily in config.php
- Check Hostinger PHP version compatibility
- Verify all PHP files have proper opening tags

#### Contact Form Not Working
- Configure email settings in config.php
- Check Hostinger email limits
- Verify SMTP credentials

## 🔐 Security Recommendations

1. **Change Default Passwords**: Update all default credentials
2. **Regular Updates**: Keep PHP and dependencies updated
3. **Backup Regularly**: Use Hostinger's backup features
4. **Monitor Logs**: Check error logs regularly
5. **Secure Headers**: .htaccess includes security headers

## 📈 SEO Optimization

1. **Google Search Console**: Add your domain
2. **Sitemap**: Create and submit XML sitemap
3. **Analytics**: Verify Google Analytics is working
4. **Meta Tags**: Update meta descriptions for each page
5. **Structured Data**: JSON-LD is already included

## 🚀 Performance Optimization

1. **Enable Compression**: Already configured in .htaccess
2. **Image Optimization**: Consider WebP format for images
3. **CDN**: Use Hostinger's CDN if available
4. **Caching**: Enable browser caching (configured in .htaccess)

## 📞 Support

- **Hostinger Support**: Available 24/7 via chat
- **Documentation**: Check Hostinger knowledge base
- **Community**: Hostinger community forums

## 🎉 Go Live Checklist

- [ ] All files uploaded successfully
- [ ] Domain pointing to Hostinger
- [ ] SSL certificate active
- [ ] .htaccess working (test redirects)
- [ ] Contact forms configured
- [ ] Google Analytics tracking
- [ ] All pages loading correctly
- [ ] Mobile responsiveness tested
- [ ] Performance optimized
- [ ] Security headers active

Your Hub8.ai website is now ready for production on Hostinger! 🚀
