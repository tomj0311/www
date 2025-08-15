# VS Code to Hostinger Direct Deployment Setup

## 🚀 Quick Setup Guide

### Step 1: Get Your Hostinger Credentials

1. **Login to Hostinger Control Panel**
2. **Go to Files → File Manager** or **Hosting → Manage**
3. **Find your SFTP/SSH details:**
   - Host: Usually `your-domain.com` or provided by Hostinger
   - Username: Your hosting username
   - Password: Your hosting password
   - Port: 22 (for SFTP) or 21 (for FTP)

### Step 2: Configure SFTP in VS Code

1. **Update `.vscode/sftp.json`** with your Hostinger details:
```json
{
    "name": "Hostinger Production",
    "host": "your-actual-hostinger-server.com",
    "protocol": "sftp",
    "port": 22,
    "username": "your-hostinger-username", 
    "password": "your-hostinger-password",
    "remotePath": "/public_html"
}
```

2. **Security Note**: Consider using SSH keys instead of passwords:
```json
{
    "privateKeyPath": "C:\\Users\\YourUser\\.ssh\\id_rsa",
    "password": ""
}
```

### Step 3: Deploy Your Website

#### Method 1: Full Project Upload
1. Press `Ctrl+Shift+P`
2. Type: `SFTP: Upload Project`
3. Select your Hostinger profile
4. Wait for upload to complete

#### Method 2: Upload on Save (Auto-deploy)
1. Update `sftp.json`:
```json
{
    "uploadOnSave": true,
    "watcher": {
        "autoUpload": true
    }
}
```

#### Method 3: Upload Changed Files Only
1. Press `Ctrl+Shift+P` 
2. Type: `SFTP: Upload Changed Files`
3. Select files to upload

## 🛠️ Available VS Code Commands

After installing SFTP extension, use these commands:

- `SFTP: Upload Project` - Upload entire project
- `SFTP: Upload Folder` - Upload specific folder
- `SFTP: Upload File` - Upload current file
- `SFTP: Upload Changed Files` - Upload only modified files
- `SFTP: Download Project` - Download from server
- `SFTP: Sync Remote -> Local` - Download changes from server
- `SFTP: Sync Local -> Remote` - Upload changes to server
- `SFTP: List` - Browse remote files
- `SFTP: Delete` - Delete remote files/folders

## 🔧 Alternative Deployment Methods

### Option 1: FTP Client Integration
```vscode-extensions
humy2833.ftp-simple
```

### Option 2: Git-based Deployment (Advanced)
1. Setup Git repository on Hostinger
2. Use post-receive hooks for auto-deployment
3. Push to deploy workflow

### Option 3: CLI Tools
```bash
# Using WinSCP command line
winscp.com /command "open sftp://username:password@hostname/" "put *.* /public_html/" "exit"
```

## 📝 Hostinger Specific Settings

### Common Hostinger Hosts:
- `srv-hostinger.com`
- `your-domain.com` 
- Check your hosting panel for exact details

### File Permissions:
- Folders: 755
- PHP files: 644
- .htaccess: 644

### Directory Structure:
```
/public_html/          ← Your website root
├── index.php
├── Assests/
├── includes/
└── ...other files
```

## 🔒 Security Best Practices

1. **Use SSH Keys**: Generate and use SSH key pairs instead of passwords
2. **Limit Access**: Only upload necessary files (use .gitignore patterns)
3. **Environment Variables**: Keep sensitive data in environment files
4. **Backup**: Always backup before deployment

## 🚨 Troubleshooting

### Connection Issues:
- Verify host, username, password
- Check Hostinger firewall settings
- Try FTP (port 21) if SFTP fails

### File Upload Errors:
- Check file permissions
- Verify remote path exists
- Ensure sufficient disk space

### VS Code Extension Issues:
- Reload VS Code window
- Check Output panel for SFTP logs
- Verify JSON syntax in sftp.json

## 🎯 Quick Deployment Workflow

1. **Edit files** in VS Code
2. **Save changes** (auto-upload if enabled)
3. **Or manually trigger**: `Ctrl+Shift+P` → `SFTP: Upload File`
4. **Test on**: `https://your-domain.com`

## 📞 Need Help?

- **Hostinger Support**: 24/7 chat support
- **SFTP Extension**: Check VS Code marketplace reviews
- **Community**: VS Code Discord/Reddit communities

---

✅ **Your Hub8.ai website is now ready for direct deployment from VS Code!**
