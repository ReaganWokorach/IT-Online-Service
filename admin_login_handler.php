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

    $stmt = $conn -> prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt -> bind_param("s", $username);
    $stmt -> execute();
    $stmt -> store_result();

//check if exactly one user was found in the database 
    if ($stmt -> num_rows === 1){

        //bind the result columns (from the SELECT query) to php variables 
        //This assumes the SELECT Query was something like: SELECT id, password FROM admins WHERE username = ?
        $stmt -> bind_result($id, $hashedPassword);

        // fetch the result and store the values ino the $id and $hashedPassword
        $stmt -> fetch();

    // Here we verify the password is correct and match what is in the database
    
        if(password_verify($password, $hashedPassword)){
            //if the password is correct, store the user's id and username
            // These can be used to track that the user is logged in on other pages
            $_SESSION['admin_id'] = $id;
            $_SESSION['username'] = $username;
            
            //show success message to the user. 
            echo "Login Successful! Redirecting...";
            //Wait 1 seconds and then redirect the user to the view_messages.php page
            header("Refresh: 1; URL=view_messages.php");
            //End the script so no further code is executed  
            exit();

        } else{
            //if no matching user is found in the database, return an error message
            echo "Password is incorrect.";
        }
    }else{
        echo "No such User found.";
    }
    
}

?>