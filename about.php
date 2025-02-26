<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Root Reading</title>
    <link rel="stylesheet" href="assets/css/home.css"> <!-- Main CSS file -->
    <link rel="stylesheet" href="assets/css/about.css"> <!-- Supporting CSS file -->
</head>
<body>

    <!-- Navigation Bar -->
    <?php include 'includes/nav.php'; ?>

    <!-- Main Content -->
    <header id="main-header" class="header">
        <h1>About Root Reading</h1>
        <p>Learn more about our mission, vision, and the team behind Root Reading.</p>
    </header>

    <div class="container">
        <section id="about-us" class="about-section">
            <div class="info-box-container">
                <div class="info-box">
                    <h2 class="section-title">Our Mission</h2>
                    <p>At Root Reading, our mission is to provide high-quality educational resources and support to help individuals of all ages improve their reading and comprehension skills.</p>
                </div>
                
                <div class="info-box">
                    <h2 class="section-title">Our Vision</h2>
                    <p>We envision a world where everyone has access to the tools and resources they need to become proficient readers and lifelong learners.</p>
                </div>

                <div class="info-box">
                    <h2 class="section-title">Our Team</h2>
                    <div class="team-container">
                        <div class="team-member">
                            <img src="images/team/member1.jpg" alt="Team Member 1" class="team-image">
                            <h3>John Doe</h3>
                            <p>Founder & CEO</p>
                        </div>
                        <div class="team-member">
                            <img src="images/team/member2.jpg" alt="Team Member 2" class="team-image">
                            <h3>Jane Smith</h3>
                            <p>Chief Education Officer</p>
                        </div>
                        <div class="team-member">
                            <img src="images/team/member3.jpg" alt="Team Member 3" class="team-image">
                            <h3>Emily Johnson</h3>
                            <p>Head of Curriculum Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

</body>
</html>
