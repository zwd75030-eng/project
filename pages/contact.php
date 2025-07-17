<?php
$message = '';
$messageType = '';

if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $messageText = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $subject && $messageText) {
        // In a real application, you would send an email or save to database
        $message = "Thank you, $name! Your message has been received.";
        $messageType = 'success';
    } else {
        $message = 'Please fill in all fields with valid information.';
        $messageType = 'error';
    }
}
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title">Contact Us</h1>
        <p class="page-subtitle">Get in touch with our team</p>
    </div>
</div>

<section class="contact-section">
    <div class="container">
        <?php if ($message): ?>
            <div class="message message-<?php echo $messageType; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <strong>📧 Email:</strong>
                        <span>hello@example.com</span>
                    </div>
                    <div class="contact-item">
                        <strong>📱 Phone:</strong>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <strong>📍 Address:</strong>
                        <span>123 Web Street, Internet City, IC 12345</span>
                    </div>
                </div>
            </div>
            
            <form class="contact-form" method="POST" action="">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" required value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>