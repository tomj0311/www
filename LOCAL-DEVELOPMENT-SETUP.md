# Local PHP Development Setup for Hub8.ai

## 🚀 Quick Setup Options

### Option 1: XAMPP (Recommended - Easy Setup)

1. **Download XAMPP**:
   - Go to: https://www.apachefriends.org/download.html
   - Download XAMPP for Windows
   - Install with default settings

2. **Setup Your Project**:
   ```batch
   # Copy your project to XAMPP
   xcopy "D:\code\web\Hub 8 Html\*" "C:\xampp\htdocs\hub8\" /E /H /C /I
   ```

3. **Start XAMPP**:
   - Open XAMPP Control Panel
   - Start Apache
   - Visit: http://localhost/hub8/

### Option 2: Portable PHP (Lightweight)

1. **Download PHP**:
   - Go to: https://windows.php.net/download
   - Download "Thread Safe" ZIP version
   - Extract to `C:\php`

2. **Add to PATH**:
   ```batch
   # Add C:\php to your Windows PATH environment variable
   setx PATH "%PATH%;C:\php"
   ```

3. **Run Built-in Server**:
   ```batch
   cd "D:\code\web\Hub 8 Html"
   php -S localhost:8000
   ```

### Option 3: VS Code PHP Server Extension

1. **Install PHP Server Extension**
2. **Right-click on index.php**
3. **Select "PHP Server: Serve project"**

## 🛠️ Current Setup Instructions

Since PHP is not installed, I'll create a setup script for you:

### Automated Setup Script

Run the batch file I'm creating: `setup-local-server.bat`

### Manual Steps if Needed

1. **Install PHP**: Download from php.net
2. **Configure PATH**: Add PHP to system PATH
3. **Run server**: Use PHP built-in server
4. **Access site**: Open http://localhost:8000

## 🔧 Alternative: Use VS Code Live Server

For immediate preview (HTML/CSS/JS only):
1. Install Live Server extension
2. Right-click index.html
3. Select "Open with Live Server"

Note: This won't process PHP, but you can see styling/layout changes.
