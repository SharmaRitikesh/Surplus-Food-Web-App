<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... head elements ... -->
</head>
<body>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
