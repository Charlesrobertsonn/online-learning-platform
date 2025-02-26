<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Root Reading</title>
    <link rel="stylesheet" href="assets/css/home.css"> <!-- Link to your CSS file -->
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'includes/nav.php'; ?>

    <!-- Main Content -->
    <header id="main-header" class="header">
        <h1>Root Reading</h1>
        <p>Welcome to <strong>Root Reading</strong>, the best educational platform to learn English...</p>
    </header>

    <section id="features" class="features-section">
        <h2>Features</h2>
        <div class="features-list">
            <div class="feature-item">
                <a href="trials2025/our-learning-to-read-trial.html" class="feature-link">Our Learning to Read Program</a>
            </div>
            <div class="feature-item">
                <a href="trials2025/dyslexia-report.html" class="feature-link">Dyslexia Report (Wiatt) for Children and Adults</a>
            </div>
            <div class="feature-item">
                <a href="trials2025/fast-learn.html" class="feature-link">Fast Learn: 3 Rules You Didn't Know</a>
            </div>
            <div class="feature-item">
                <a href="trials2025/international-learning-trial.html" class="feature-link">International Students: Learning Everyday English</a>
            </div>
        </div>
    </section>

    <section id="offerings" class="offerings-section">
        <h2>What do we offer?</h2>
        <div class="offerings-container">
            <div class="offering" id="phonology-morphology">
                <h3><a href="Services/phonology-and-morphology-program/phonology-and-morphology-program.html" class="offering-link">Phonology and Morphology Learning</a></h3>
                <img src="images/homeimages/p-m-learning-program-screenshot.png" alt="Phonology and Morphology Learning" class="offering-image">
                <p>Dedicated to helping students understand the structure of words and sounds, crucial for reading and writing.</p>
            </div>

            <div class="offering" id="dyslexia-support">
                <h3><a href="Services/dyslexia-support-and-reporting/dyslexia-support-and-reporting.html" class="offering-link">Dyslexia Support and Report</a></h3>
                <img src="images/homeimages/d-s-r-screenshot.png" alt="Dyslexia Support and Report" class="offering-image">
                <p>Tailored programs and assessments to support individuals with dyslexia, enhancing their learning capabilities.</p>
            </div>

            <div class="offering" id="international-learning">
                <h3><a href="Services/international-learning-program/international-learning-program.html" class="offering-link">International Learning Program</a></h3>
                <img src="images/homeimages/i-l-p-screenshot.png" alt="International Learning Program" class="offering-image">
                <p>Programs designed for international students to help them adapt and excel in English environments.</p>
            </div>
        </div>

        <div class="offerings-container">
            <div class="offering" id="parent-teacher-support">
                <h3><a href="Services/teacher-and-parent-support/teacher-and-parent-support.html" class="offering-link">Parent and Teacher Support Programs</a></h3>
                <img src="images/homeimages/t-p-s-p-screenshot.png" alt="Parent and Teacher Support Programs" class="offering-image">
                <p>Resources and workshops that equip educators and parents with the tools to support their learners effectively.</p>
            </div>

            <div class="offering" id="translating-tools">
                <h3><a href="Services/translating-tools/translating-tools.html" class="offering-link">Translating Tools</a></h3>
                <img src="images/homeimages/t-t-screenshot.png" alt="Translating Tools" class="offering-image">
                <p>Advanced tools to help break down language barriers, making learning accessible to everyone.</p>
            </div>

            <div class="offering" id="community-programs">
                <h3><a href="Services/community-programs/community-programs.html" class="offering-link">Community Programs</a></h3>
                <img src="images/homeimages/c-p-screenshot.png" alt="Community Programs" class="offering-image">
                <p>Initiatives that engage with local communities to foster learning in a more inclusive setting.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
