<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'includes/nav.php'; ?>

    <header>
        <h1>Contact</h1>
    </header>
    <main>
        <div class="section-container">
            <div class="contact-forms-wrapper">
                <!-- Contact Form Box -->
                <div class="contact-form-container">
                    <h2>Get in Touch</h2>
                    <form class="contact-form" action="/submit-form" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        
                        <button type="submit">Send</button>
                    </form>
                </div>

                <!-- Report an Issue Box -->
                <div class="contact-form-container">
                    <h2>Report an Issue</h2>
                    <form class="contact-form" action="/report-issue" method="post">
                        <label for="issue-name">Name:</label>
                        <input type="text" id="issue-name" name="issue-name" required>
                        
                        <label for="issue-email">Email:</label>
                        <input type="email" id="issue-email" name="issue-email" required>
                        
                        <label for="issue-description">Issue Description:</label>
                        <textarea id="issue-description" name="issue-description" rows="4" required></textarea>
                        
                        <button type="submit">Report</button>
                    </form>
                </div>
            </div>

            <!-- Contact Information Box -->
            <div class="contact-info-container">
                <h2>Contact Information</h2>
                <p><strong>Business Number:</strong> (123) 456-7890</p>
                <p><strong>Email:</strong> contact@yourbusiness.com</p>
                <p><strong>Hours:</strong> Monday - Friday, 9 AM - 5 PM</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
