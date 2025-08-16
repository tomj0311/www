# Microsoft Clarity Setup Guide

Microsoft Clarity is a free web analytics tool that provides insights into user behavior through heatmaps, session recordings, and analytics. This guide will help you set up Microsoft Clarity on your Hub8.ai website.

## What is Microsoft Clarity?

Microsoft Clarity offers:
- **Session Recordings**: Watch real user sessions to understand user behavior
- **Heatmaps**: See where users click, scroll, and engage on your pages
- **Analytics Dashboard**: Get insights into user interactions and site performance
- **Privacy-Focused**: GDPR compliant and respects user privacy
- **Free**: No cost, no data limits

## Setup Instructions

### Step 1: Create a Microsoft Clarity Account

1. Go to [https://clarity.microsoft.com/](https://clarity.microsoft.com/)
2. Sign in with your Microsoft account (or create one if needed)
3. Click "Get started" to create your first project

### Step 2: Create a New Project

1. Click "Add new project" or the "+" button
2. Enter your website details:
   - **Project name**: Hub8.ai (or your preferred name)
   - **Website URL**: https://yourdomain.com (your actual domain)
   - **Category**: Select the most appropriate category (e.g., "Business Services")
3. Click "Add project"

### Step 3: Get Your Project ID

1. After creating the project, you'll see your Clarity dashboard
2. Click on "Setup" or "Settings" in the left sidebar
3. Find your **Project ID** (a 10-character alphanumeric string like "abc123def4")
4. Copy this Project ID - you'll need it for the next step

### Step 4: Configure Your Website

1. Open the `config.php` file in your website's root directory
2. Find the line with `CLARITY_PROJECT_ID`
3. Replace `'XXXXXXXXXX'` with your actual Project ID:
   ```php
   define('CLARITY_PROJECT_ID', 'abc123def4'); // Replace with your actual Project ID
   ```
4. Save the file

### Step 5: Verify Installation

1. Upload the updated `config.php` file to your server (if working remotely)
2. Visit your website in a browser
3. Go back to your Clarity dashboard
4. Look for a green checkmark or "Setup successful" message
5. You should start seeing data within a few minutes to hours

## Testing the Integration

### Local Testing
If you're testing locally:
1. Start your local server: `php -S localhost:8000`
2. Visit `http://localhost:8000`
3. Check the browser's Developer Tools (F12) → Network tab
4. Look for requests to `clarity.ms` - this confirms the script is loading

### Live Testing
1. Visit your live website
2. Open browser Developer Tools (F12)
3. Go to Console tab and type: `clarity`
4. If properly installed, you should see the Clarity function object

## Understanding the Implementation

The Microsoft Clarity integration has been automatically added to your website:

### Configuration (config.php)
```php
// Microsoft Clarity
define('CLARITY_PROJECT_ID', 'XXXXXXXXXX'); // Replace with your actual Project ID
```

### Script Integration (includes/seo-head.php)
The Clarity tracking script is automatically included on all pages that use the `seo-head.php` include file. The script:
- Loads asynchronously to not affect page performance
- Only loads when a valid Project ID is configured
- Includes proper error handling and security measures

## Features You'll Get

### Session Recordings
- Watch real user sessions to understand behavior
- See exactly how users navigate your site
- Identify usability issues and optimization opportunities

### Heatmaps
- **Click heatmaps**: See where users click most
- **Scroll heatmaps**: Understand how far users scroll
- **Attention heatmaps**: See where users spend time

### Analytics Dashboard
- Page performance metrics
- User engagement statistics
- Error tracking and dead clicks
- Mobile vs desktop behavior

## Privacy and Compliance

Microsoft Clarity is designed with privacy in mind:
- **GDPR Compliant**: Automatically respects user privacy preferences
- **No Personal Data**: Doesn't collect personally identifiable information
- **Data Retention**: Data is retained for 1 year by default
- **Cookie-Free**: Works without setting cookies

## Troubleshooting

### Script Not Loading
1. Check that your Project ID is correct in `config.php`
2. Ensure the Project ID doesn't have extra spaces or quotes
3. Verify that `includes/seo-head.php` is included on your pages

### No Data in Dashboard
1. Wait 30 minutes - data can take time to appear
2. Check that your website has actual visitors
3. Verify the Project ID matches exactly
4. Check browser console for any JavaScript errors

### Common Issues
- **Mixed Content**: Ensure your site uses HTTPS if Clarity dashboard expects it
- **Ad Blockers**: Some ad blockers may block Clarity scripts
- **Cache**: Clear browser cache after making changes

## Best Practices

### Data Analysis
1. **Regular Review**: Check your Clarity dashboard weekly
2. **Focus on Problem Areas**: Look for pages with high error rates
3. **Mobile Optimization**: Pay attention to mobile user behavior
4. **Conversion Funnels**: Track user paths to important actions

### Performance
- The Clarity script is lightweight and loads asynchronously
- No impact on Core Web Vitals or page speed
- Consider the insights for performance optimizations

## Support and Resources

- **Microsoft Clarity Documentation**: [https://docs.microsoft.com/en-us/clarity/](https://docs.microsoft.com/en-us/clarity/)
- **Community Forum**: Available through the Clarity dashboard
- **Video Tutorials**: Available on the Microsoft Clarity website

## Next Steps

After setting up Clarity:
1. **Set up Goals**: Define conversion events in the Clarity dashboard
2. **Create Segments**: Filter data by user behavior or device type
3. **Regular Analysis**: Schedule weekly reviews of user behavior data
4. **Optimization**: Use insights to improve user experience

---

**Note**: This integration works alongside your existing Google Analytics setup. Both tools provide complementary insights into user behavior and site performance.
