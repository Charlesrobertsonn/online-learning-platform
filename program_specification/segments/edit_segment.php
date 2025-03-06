<?php
include_once '../db.php';

if (!isset($_GET['id'])) {
    die("Invalid request.");
}

// Fetch segment
$stmt = $pdo->prepare("SELECT * FROM segment WHERE segment_id = :id");
$stmt->execute(['id' => $_GET['id']]);
$segment = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$segment) {
    die("Segment not found.");
}

// Fetch units for dropdown
$units = $pdo->query("SELECT * FROM unit")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE segment SET unit_id = :unit_id, segment_name = :segment_name WHERE segment_id = :id");
    $stmt->execute([
        'unit_id' => $_POST['unit_id'],
        'segment_name' => $_POST['segment_name'],
        'id' => $_GET['id']
    ]);
    header("Location: list_segments.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Segment</title>
</head>
<body>
    <h2>Edit Segment</h2>
    <form method="POST">
        Unit:
        <select name="unit_id" required>
            <?php foreach ($units as $unit): ?>
                <option value="<?=$unit['unit_id']?>" <?= $unit['unit_id'] == $segment['unit_id'] ? 'selected' : '' ?>>
                    <?=htmlspecialchars($unit['unit_name'])?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        Segment Name: <input type="text" name="segment_name" value="<?=htmlspecialchars($segment['segment_name'])?>" required><br><br>
        <input type="submit" value="Update Segment">
    </form>
    <a href="list_segments.php">Back to Segment List</a>
</body>
</html>
