# CDG Home
Custom Home Page Alpha

# Requirements
• Web Server with PHP 5.5.X or above.
• MySQL Database with MySQL Event Scheduler enabled.
• Weather Underground API Key.
• Google Recaptcha Invisible V2 API Key.
• Google Cloud Gmail Client ID.

# Install Guide
1. Clone or download the CDG Home repository to a php capable server.
2. Create a MySQL database and run the home.sql file to create table.
3. Configure the /classes/phpmailer/mail.php with your phpmailer, smtp, or pop3 settings.
4. Configure the /includes/config.php file with your timezone, MySQL database, absolute application address, email address, and password reset email details.

# To-Do
<s>1. Change Initial Google Authorization Flow</s><br>
<s>2. Setup AJAX Background Content Refresh (Home & Settings)</s><br>
<s>3. Convert PHP Session System to Cookies for longer logins</s><br>
<s>4. Add all changeable variables to config.php</s><br>
<s>5. Combine dbconnect.php & config.php</s><br>
<s>6. Setup custom backgrounds in setting</s><br>
<s>7. Change scaling system from screen width to window width</s><br>
8. Add new features to blank tiles<br>