<?php
/**
 * Email Test Script for Spring Flowers Contact Form
 * 
 * This script tests the email functionality independently
 * Run this from the command line: php test_email.php
 */

// Include CodeIgniter bootstrap
require_once 'system/bootstrap.php';

// Initialize CodeIgniter
$app = \Config\Services::codeigniter();
$app->initialize();

try {
    echo "Testing email configuration...\n";
    
    // Get email service
    $email = \Config\Services::email();
    
    // Test data (similar to contact form)
    $testData = [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'phone' => '123-456-7890',
        'service' => 'House Cleaning',
        'message' => 'This is a test message from the email test script.'
    ];
    
    // Get email configuration
    $emailConfig = new \Config\Email();
    
    // Create test email
    $email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
    $email->setTo($emailConfig->recipients);
    $email->setSubject('Test Email - Spring Flowers Contact Form');
    
    // Create HTML message
    $htmlMessage = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #f8f9fa; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
            .content { background-color: #ffffff; padding: 30px; border: 1px solid #e9ecef; }
            .footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; color: #6c757d; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #495057; }
            .value { margin-top: 5px; padding: 8px; background-color: #f8f9fa; border-radius: 3px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>TEST EMAIL - Contact Form</h2>
                <p>Spring Flowers Website</p>
            </div>
            <div class="content">
                <div class="field">
                    <div class="label">Name:</div>
                    <div class="value">' . htmlspecialchars($testData['name']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Email:</div>
                    <div class="value">' . htmlspecialchars($testData['email']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Phone:</div>
                    <div class="value">' . htmlspecialchars($testData['phone']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Service:</div>
                    <div class="value">' . htmlspecialchars($testData['service']) . '</div>
                </div>
                <div class="field">
                    <div class="label">Message:</div>
                    <div class="value">' . nl2br(htmlspecialchars($testData['message'])) . '</div>
                </div>
                <div class="field">
                    <div class="label">Test Time:</div>
                    <div class="value">' . date('Y-m-d H:i:s') . '</div>
                </div>
            </div>
            <div class="footer">
                <p>This is a test email to verify email functionality.</p>
            </div>
        </div>
    </body>
    </html>';
    
    $email->setMessage($htmlMessage);
    
    // Send email
    echo "Sending test email...\n";
    $result = $email->send();
    
    if ($result) {
        echo "✅ SUCCESS: Test email sent successfully!\n";
        echo "Check your inbox at: " . $emailConfig->recipients . "\n";
    } else {
        echo "❌ FAILED: Email could not be sent.\n";
        echo "Error details:\n";
        echo $email->printDebugger();
    }
    
} catch (Exception $e) {
    echo "❌ ERROR: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}

echo "\nTest completed.\n";
?>
