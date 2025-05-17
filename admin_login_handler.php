<?php
session_start();

$host = "localhost";
$db = "contact_form";
$user = "root";
$pass = "";

//connection to database

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error) die("connection failed: " . $conn -> connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $conn -> prepare("SELECT id, password FROM admins WHERE username = ?");
    $stmt -> bind_param("s", $username);
    $stmt -> execute();
    $stmt -> store_result();

    if ($stmt -> num_rows === 1){
        $stmt -> bind_result($id, $hashedPassword);
        $stmt -> fetch();

        if(password_verify($password, $hashedPassword)){
            $_SESSION['admin_id'] = $id;
            $_SESSION['username'] = $username;
            echo "Login Successful! Redirecting...";
            header("Refresh: 2; URL=view_messages.php");
            exit();
        } else{
            echo "Password is incorrect.";
        }
    }else{
        echo "No such User found.";
    }
    
}

?>