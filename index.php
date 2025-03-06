<?php include 'db.php'; ?>
<?php include 'includes/nav.php'; ?>

<h1>Welcome to Our Learning Platform</h1>
<h2>Available Programs</h2>

<?php
$result = $conn->query("SELECT * FROM programs");
while ($program = $result->fetch_assoc()) {
    echo "<p><a href='programs/program.php?id=" . $program['id'] . "'>" . $program['name'] . "</a></p>";
}
?>

<?php include 'includes/footer.php'; ?>
