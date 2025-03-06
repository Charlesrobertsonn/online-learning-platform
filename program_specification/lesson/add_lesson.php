<?php
include_once '../db.php';

// Fetch segments for the dropdown (assuming lessons are linked to segments)
$segments = $pdo->query("SELECT * FROM segment")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("
        INSERT INTO lesson (segment_id, lesson_title, lesson_description, lesson_procedure, sequence_order, lesson_type, lesson_objective) 
        VALUES (:segment_id, :lesson_title, :lesson_description, :lesson_procedure, :sequence_order, :lesson_type, :lesson_objective)
    ");
    $stmt->execute([
        'segment_id' => $_POST['segment_id'],
        'lesson_title' => $_POST['lesson_title'],
        'lesson_description' => $_POST['lesson_description'],
        'lesson_procedure' => $_POST['lesson_procedure'],
        'sequence_order' => $_POST['sequence_order'],
        'lesson_type' => $_POST['lesson_type'],
        'lesson_objective' => $_POST['lesson_objective']
    ]);
    echo "Lesson added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Lesson</title>
</head>
<body>
    <h2>Add New Lesson</h2>
    <form method="POST">
        Segment:
        <select name="segment_id" required>
            <option value="">Select Segment</option>
            <?php foreach ($segments as $segment): ?>
                <option value="<?= $segment['segment_id'] ?>"><?= htmlspecialchars($segment['segment_name']) ?></option>
            <?php endforeach; ?>
        </select><br><br>

        Lesson Title: <input type="text" name="lesson_title" required><br><br>
        Description: <textarea name="lesson_description"></textarea><br><br>
        Procedure: <textarea name="lesson_procedure"></textarea><br><br>
        Order: <input type="number" name="sequence_order" required><br><br>
        Type: <input type="text" name="lesson_type" required><br><br>
        Objective: <textarea name="lesson_objective"></textarea><br><br>

        <input type="submit" value="Add Lesson">
    </form>
    <a href="list_lessons.php">Back to Lesson List</a>
</body>
</html>
