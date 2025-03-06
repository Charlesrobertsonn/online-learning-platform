<?php
include_once '../db.php';

$templates = $pdo->query("SELECT * FROM activity_template")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Template List</title>
</head>
<body>
    <h2>Template List</h2>
    <a href="add_template.php">Add New Template</a><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($templates as $template): ?>
                <tr>
                    <td><?= htmlspecialchars($template['template_name']) ?></td>
                    <td><?= htmlspecialchars($template['template_description']) ?></td>
                    <td>
                        <a href="edit_template.php?id=<?= $template['template_id'] ?>">Edit</a> |
                        <a href="delete_template.php?id=<?= $template['template_id'] ?>" onclick="return confirm('Delete?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
