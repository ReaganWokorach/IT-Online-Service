<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<pre>";
print_r($_POST);
echo "</pre>";


$host = "localhost";
$db = "contact_form";
$user = "root"; 
$pass = "";     

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Message received successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST); // Debug incoming data
    
        // Your insert logic
    }
    
    
    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit(); 
}
?>
