# Email Service Alternatives

Since Gmail authentication is failing, here are alternative email services you can use:

## Option 1: Use Your Domain's Email Service

If `indiana@cleanspringflowers.com` is your domain email, use your hosting provider's SMTP settings:

```php
// In app/Config/Email.php
public string $SMTPHost = 'mail.cleanspringflowers.com';  // Your hosting provider's SMTP
public string $SMTPUser = 'indiana@cleanspringflowers.com';
public string $SMTPPass = 'your-domain-email-password';
public int $SMTPPort = 587;
public string $SMTPCrypto = 'tls';
```

## Option 2: Use SendGrid (Free tier available)

1. Sign up at sendgrid.com
2. Get your API key
3. Update config:

```php
public string $SMTPHost = 'smtp.sendgrid.net';
public string $SMTPUser = 'apikey';
public string $SMTPPass = 'your-sendgrid-api-key';
public int $SMTPPort = 587;
public string $SMTPCrypto = 'tls';
```

## Option 3: Use Mailgun (Free tier available)

1. Sign up at mailgun.com
2. Get your SMTP credentials
3. Update config:

```php
public string $SMTPHost = 'smtp.mailgun.org';
public string $SMTPUser = 'your-mailgun-smtp-username';
public string $SMTPPass = 'your-mailgun-smtp-password';
public int $SMTPPort = 587;
public string $SMTPCrypto = 'tls';
```

## Option 4: Use Outlook/Hotmail

```php
public string $SMTPHost = 'smtp-mail.outlook.com';
public string $SMTPUser = 'your-outlook-email@outlook.com';
public string $SMTPPass = 'your-outlook-password';
public int $SMTPPort = 587;
public string $SMTPCrypto = 'tls';
```

## Quick Test

After updating the config, test by submitting the contact form. Check the logs at `/writable/logs/log-YYYY-MM-DD.log` for success/failure messages.
