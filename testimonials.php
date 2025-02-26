<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Root Reading</title>
    <link rel="stylesheet" href="assets/css/home.css"> <!-- Link to your main CSS file -->
    <link rel="stylesheet" href="assets/css/testimonials.css"> <!-- Link to your testimonials CSS file -->
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'includes/nav.php'; ?>

    <!-- Main Content -->
    <header id="main-header" class="header">
        <h1>Testimonials</h1>
        <p>Read what our satisfied learners and their parents have to say about Root Reading.</p>
    </header>

    <section id="testimonials" class="testimonials-section">
        <h2>What Our Learners Say</h2>
        <div class="testimonials-container">
            <div class="testimonial">
                <p>"Root Reading has transformed my child's reading skills. The personalized approach and engaging lessons have made a huge difference!"</p>
                <h3>- Jane Doe, Parent</h3>
            </div>
            <div class="testimonial">
                <p>"I struggled with reading for years, but Root Reading's programs have given me the confidence and skills I needed to succeed."</p>
                <h3>- John Smith, Student</h3>
            </div>
            <div class="testimonial">
                <p>"The support and resources provided by Root Reading are exceptional. I highly recommend their services to anyone looking to improve their reading skills."</p>
                <h3>- Emily Johnson, Educator</h3>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
