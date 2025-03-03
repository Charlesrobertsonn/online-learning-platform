<?php
// Database connection (update with your actual credentials)
$pdo = new PDO('mysql:host=localhost;dbname=online_learning', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Get lesson_id from URL or fallback to lesson 1
$lessonId = isset($_GET['lesson_id']) ? intval($_GET['lesson_id']) : 1;

// Fetch all templates linked to this lesson with correct order
$templateQuery = $pdo->prepare("
    SELECT at.template_id, at.template_name, lat.sequence_order
    FROM lesson_activity_templates lat
    JOIN activity_templates at ON lat.template_id = at.template_id
    WHERE lat.lesson_id = ?
    ORDER BY lat.sequence_order
");
$templateQuery->execute([$lessonId]);
$templates = $templateQuery->fetchAll(PDO::FETCH_ASSOC);

// Output the lesson header
echo "<h1>Lesson $lessonId - Activities</h1>";

// Loop through templates and fetch content
foreach ($templates as $template) {
    $templateId = $template['template_id'];
    $templateName = $template['template_name'];
    $sequenceOrder = $template['sequence_order'];

    // Fetch the actual HTML code for the template (optional if stored in DB)
    $templateCodeQuery = $pdo->prepare("
        SELECT template_code FROM activity_templates WHERE template_id = ?
    ");
    $templateCodeQuery->execute([$templateId]);
    $templateHtml = $templateCodeQuery->fetchColumn();

    // Fetch lesson-specific content (content_key & content_value pairs)
    $contentQuery = $pdo->prepare("
        SELECT content_key, content_value 
        FROM lesson_content 
        WHERE lesson_id = ? AND template_id = ?
    ");
    $contentQuery->execute([$lessonId, $templateId]);
    $contentItems = $contentQuery->fetchAll(PDO::FETCH_KEY_PAIR);

    // Inject content values into template HTML (replace {CONTENT_KEY} placeholders)
    foreach ($contentItems as $key => $value) {
        $templateHtml = str_replace('{' . strtoupper($key) . '}', $value, $templateHtml);
    }

    // Display the template section
    echo "<h2>Activity $sequenceOrder: $templateName</h2>";
    echo $templateHtml;
    echo "<hr>";
}

// Footer
echo "<p>End of Lesson $lessonId</p>";
?>
