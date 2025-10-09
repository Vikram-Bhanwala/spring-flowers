# Email Setup Instructions for Contact Form

## Overview
The contact form now sends email notifications when submitted. Here's how to configure it:

## Email Configuration

### 1. Update Email Settings
Edit `/app/Config/Email.php` and update the following values:

```php
// Update these with your actual email credentials
public string $fromEmail  = 'your-email@gmail.com';        // Your Gmail address
public string $fromName   = 'Spring Flowers';              // Your business name
public string $recipients = 'admin@springflowers.com';     // Where to send notifications

// SMTP Settings (for Gmail)
public string $SMTPHost = 'smtp.gmail.com';
public string $SMTPUser = 'your-email@gmail.com';          // Your Gmail address
public string $SMTPPass = 'your-app-password';             // Gmail App Password (see below)
public int $SMTPPort = 587;
```

### 2. Gmail Setup (Recommended)

#### Step 1: Enable 2-Factor Authentication
1. Go to your Google Account settings
2. Enable 2-Factor Authentication if not already enabled

#### Step 2: Generate App Password
1. Go to Google Account → Security → 2-Step Verification
2. Scroll down to "App passwords"
3. Generate a new app password for "Mail"
4. Use this 16-character password in `$SMTPPass`

#### Step 3: Update Configuration
Replace `your-app-password` in the Email.php file with your generated app password.

### 3. Alternative Email Providers

#### For other SMTP providers, update these settings:

**Outlook/Hotmail:**
```php
public string $SMTPHost = 'smtp-mail.outlook.com';
public int $SMTPPort = 587;
```

**Yahoo:**
```php
public string $SMTPHost = 'smtp.mail.yahoo.com';
public int $SMTPPort = 587;
```

**Custom SMTP:**
```php
public string $SMTPHost = 'your-smtp-server.com';
public int $SMTPPort = 587; // or 465 for SSL
public string $SMTPCrypto = 'tls'; // or 'ssl' for port 465
```

## Testing

### 1. Test the Contact Form
1. Go to your website
2. Open the contact form
3. Fill out and submit the form
4. Check your email for the notification

### 2. Check Logs
If emails aren't working, check the logs:
- `/writable/logs/log-YYYY-MM-DD.log`
- Look for email-related error messages

### 3. Common Issues

**"Authentication failed" error:**
- Make sure you're using an App Password, not your regular Gmail password
- Verify 2-Factor Authentication is enabled

**"Connection refused" error:**
- Check your SMTP host and port settings
- Ensure your hosting provider allows SMTP connections

**Emails going to spam:**
- Add your domain to SPF records
- Consider using a professional email service like SendGrid or Mailgun

## Email Template

The email template includes:
- Contact form data (name, email, phone, service, message)
- Timestamp of submission
- Professional HTML formatting
- Responsive design

## Security Notes

1. **Never commit email passwords to version control**
2. **Use environment variables for sensitive data in production**
3. **Consider using a dedicated email service for high-volume sites**

## Production Recommendations

For production environments, consider:
- Using a dedicated email service (SendGrid, Mailgun, Amazon SES)
- Setting up proper SPF, DKIM, and DMARC records
- Implementing rate limiting for contact forms
- Adding CAPTCHA to prevent spam

## Support

If you encounter issues:
1. Check the application logs first
2. Verify SMTP settings with your email provider
3. Test with a simple email script to isolate the issue
