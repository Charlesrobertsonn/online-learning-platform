<?php
include_once '../db.php';

$sql = "
    SELECT l.lesson_id, l.lesson_title, l.sequence_order, s.segment_name 
    FROM lesson l
    JOIN segment s ON l.segment_id = s.segment_id
    ORDER BY s.segment_name, l.sequence_order
";
$lessons = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lesson List</title>
</head>
<body>
    <h2>Lesson List</h2>
    <a href="add_lesson.php">Add New Lesson</a><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Segment</th>
                <th>Title</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lessons as $lesson): ?>
                <tr>
                    <td><?=htmlspecialchars($lesson['segment_name'])?></td>
                    <td><?=htmlspecialchars($lesson['lesson_title'])?></td>
                    <td><?=htmlspecialchars($lesson['sequence_order'])?></td>
                    <td>
                        <a href="edit_lesson.php?id=<?=$lesson['lesson_id']?>">Edit</a> |
                        <a href="delete_lesson.php?id=<?=$lesson['lesson_id']?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
