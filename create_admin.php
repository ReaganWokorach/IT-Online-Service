<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn = new mysqli('localhost', 'root', '', 'contact_form');
    if($conn -> connect_error) {
        die("connection failed: ." . $conn -> connect_error);
    }

    $stmt = $conn -> prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
    $stmt -> bind_param("ss", $username, $password);
    if($stmt -> execute()) {
        echo "<script>alert('Admin created successfully!'); windows.location= 'view_messages.php';</script>";

    } else {
        echo "Error: " . $stmt -> error;
    }

    $stmt -> close();
    $conn -> close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Admin User</title>
    <link rel="stylesheet" href="dashboard_styles.css">
</head>
<body>
    <div class="admin-container">
        <h2>Create New Admin</h2>
        <form action="" method="post" class="admin-form">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Create Admin</button>
            <a href="view_messages.php" class="back-link">← Back to Dashboard</a>
        </form>
    </div>
</body>
</html>
