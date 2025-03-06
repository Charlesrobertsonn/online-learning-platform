<?php
include_once '../db.php';

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM lesson WHERE lesson_id = :id");
    $stmt->execute(['id' => $_GET['id']]);
}

header("Location: list_lessons.php");
exit;
