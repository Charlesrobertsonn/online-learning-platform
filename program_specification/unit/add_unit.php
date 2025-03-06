<?php
include_once '../db.php';

// Fetch programs for the dropdown
$programs = $pdo->query("SELECT * FROM program")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO unit (program_id, unit_name) VALUES (:program_id, :unit_name)");
    $stmt->execute([
        'program_id' => $_POST['program_id'],
        'unit_name' => $_POST['unit_name']
    ]);
    echo "Unit added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Unit</title>
</head>
<body>
    <h2>Add New Unit</h2>
    <form method="POST">
        Program:
        <select name="program_id" required>
            <option value="">Select Program</option>
            <?php foreach ($programs as $program): ?>
                <option value="<?=$program['program_id']?>"><?=htmlspecialchars($program['program_name'])?></option>
            <?php endforeach; ?>
        </select><br><br>

        Unit Name: <input type="text" name="unit_name" required><br><br>
        <input type="submit" value="Add Unit">
    </form>
    <a href="list_units.php">Back to Unit List</a>
</body>
</html>
