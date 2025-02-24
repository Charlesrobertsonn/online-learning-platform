cd C:\xampp\htdocs\online-learning-platform-main

# Add all files
git add .

# Save the changes with a message
git commit -m "Auto-sync: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"

# Upload the changes to GitHub
git push origin main
