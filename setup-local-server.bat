@echo off
title Hub8.ai Local Development Server Setup
echo ====================================
echo   Hub8.ai Local Server Setup
echo ====================================
echo.

REM Check if PHP is installed
php --version >nul 2>&1
if %errorlevel% == 0 (
    echo ✅ PHP is already installed!
    goto :runserver
) else (
    echo ❌ PHP is not installed.
    echo.
    echo Choose an option:
    echo 1. Download and install XAMPP (Recommended)
    echo 2. Download portable PHP
    echo 3. Use VS Code Live Server (HTML preview only)
    echo 4. Exit
    echo.
    set /p choice="Enter your choice (1-4): "
    
    if "%choice%"=="1" goto :xampp
    if "%choice%"=="2" goto :portablephp
    if "%choice%"=="3" goto :liveserver
    if "%choice%"=="4" goto :end
    goto :end
)

:xampp
echo.
echo 📥 Opening XAMPP download page...
start https://www.apachefriends.org/download.html
echo.
echo After installing XAMPP:
echo 1. Copy this project to C:\xampp\htdocs\hub8\
echo 2. Start XAMPP Control Panel
echo 3. Start Apache
echo 4. Visit: http://localhost/hub8/
echo.
pause
goto :end

:portablephp
echo.
echo 📥 Opening PHP download page...
start https://windows.php.net/download
echo.
echo After downloading PHP:
echo 1. Extract to C:\php\
echo 2. Add C:\php to your PATH
echo 3. Restart this script
echo.
pause
goto :end

:liveserver
echo.
echo 🚀 Using VS Code Live Server...
echo.
echo Instructions:
echo 1. Open index.html in VS Code
echo 2. Right-click and select "Open with Live Server"
echo 3. Your browser will open with live preview
echo.
echo Note: This shows HTML/CSS/JS only, PHP won't be processed
echo.
pause
goto :end

:runserver
echo.
echo 🚀 Starting PHP development server...
echo.
echo Server will start at: http://localhost:8000
echo Press Ctrl+C to stop the server
echo.
echo ====================================
php -S localhost:8000
goto :end

:end
pause
