<?php
session_start();

//check if user is already logged in
if (isset($_SESSION['admin_logged_in'])){
    header("Location: view_messages.php"); // Request if already logged in
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    //Database connection 
    $conn = new mysqli('localhost', 'root', '', 'contact_form');
    if($conn -> connect_error) {
        die("connection failed: " . $conn -> connect_error);
    }

    // The Query to check for matching username
    $stmt = $conn -> prepare("SELECT id, username, password FROM admins WHERE username = ?");
    $stmt -> bind_param('s', $username);
    $stmt -> execute();
    $result = $stmt -> get_result();

    if($result -> num_rows > 0) {
        $admin = $result -> fetch_assoc();

        //Verify password
        if (password_verify($password, $admin['password'])){
            //if the Password is correct, start session
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: View_messages.php");
            exit();
        }else {
            $error = "Invalid Credentials!";
        }
    }else{
        $error = "Invalid credentials!";
    }
    // close all connections 
    $stmt -> close();
    $conn -> close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages - Admin Dashboard</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <form action="admin_login_handler.php" method="post" class="login-form">
            <h2><a href="index.php" class="admin-style">Admin Login</a></h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
            <?php if (isset($error)) : ?>
                <p class="error-msg"><?= htmlspecialchars($error) ?></p>
                <?php endif; ?>
        </form>
    </div>
</body>
</html>