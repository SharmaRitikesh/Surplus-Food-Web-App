<?php
session_start();

// Dummy user data for demonstration purposes
$users = [
    ['username' => 'user1', 'password' => 'pass1'],
    // Add more users as needed
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['user'] = $username;
            header('Location: welcome.php');
            exit();
        }
    }
    echo 'Invalid username or password.';
}
?>
