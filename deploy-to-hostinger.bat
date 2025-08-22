@echo off
echo ===================================
echo    Hostinger Deployment Script
echo ===================================
echo.

echo Step 1: Ensuring Composer dependencies are installed...
c:\xampp\php\php.exe composer.phar install --no-dev --optimize-autoloader

echo.
echo Step 2: Creating deployment archive...
echo.

REM Create a deployment folder
if exist "deployment-temp" rmdir /s /q "deployment-temp"
mkdir "deployment-temp"

echo Copying files to deployment folder...

REM Copy all necessary files and folders
xcopy "*.php" "deployment-temp\" /Y
xcopy "*.json" "deployment-temp\" /Y
xcopy "*.lock" "deployment-temp\" /Y
xcopy "*.xml" "deployment-temp\" /Y
xcopy "*.txt" "deployment-temp\" /Y
xcopy "*.md" "deployment-temp\" /Y

REM Copy directories
xcopy "vendor" "deployment-temp\vendor\" /E /I /Y
xcopy "assets" "deployment-temp\assets\" /E /I /Y
xcopy "includes" "deployment-temp\includes\" /E /I /Y
xcopy "frontend" "deployment-temp\frontend\" /E /I /Y

echo.
echo ===================================
echo    Deployment folder created!
echo ===================================
echo.
echo The 'deployment-temp' folder contains all files needed for Hostinger.
echo.
echo Next steps:
echo 1. Zip the 'deployment-temp' folder
echo 2. Upload the zip to Hostinger File Manager
echo 3. Extract it in your public_html directory
echo 4. Test with: yoursite.com/test-phpmailer-availability.php
echo.
echo IMPORTANT: Make sure the vendor folder is included!
echo.
pause
