<?php
include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("
        INSERT INTO activity_template (template_name, template_description, template_code) 
        VALUES (:template_name, :template_description, :template_code)
    ");
    $stmt->execute([
        'template_name' => $_POST['template_name'],
        'template_description' => $_POST['template_description'],
        'template_code' => $_POST['template_code']
    ]);
    echo "Template added!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Template</title>
</head>
<body>
    <h2>Add New Template</h2>
    <form method="POST">
        Name: <input type="text" name="template_name" required><br><br>
        Description: <textarea name="template_description"></textarea><br><br>
        Code: <textarea name="template_code"></textarea><br><br>
        <input type="submit" value="Add Template">
    </form>
    <a href="list_templates.php">Back to Template List</a>
</body>
</html>