<?php
session_start();
// Database connection details :: we define them

$host = "localhost";    // Host where out database is running (In our case its the localhost)
$db = "contact_form";   // The name of our database
$user = "root";         // Database username of which by default its root
$pass = "";             // database password, by default its not empty

// Creating a new connection to the MySQL database 
$conn = new mysqli($host, $user, $pass, $db);

// Checking if the database connection failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // if so, stop everything and show error message 
}

// checking if the page was accessed using the POST method (if form was submitted)

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data from the post request. if a field is missing, use an empty string as the default
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

// Prepare an sql query to insert the form data into our messages table
// Note that the question marks are just place holders for the actual values 
// -> is called the object operator and it is used to access properties and methods of an object 
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");

    //Bind the actual values which are (name, email, message) to the placeholders in the query
    $stmt->bind_param("sss", $name, $email, $message);
    // sss meaning we are binding three strings 

// Execute the SQL query and check if it was successful
    if ($stmt->execute()) {
        echo "Message received successfully!";
    } else {
        echo "Error: " . $stmt->error; // show error if it was not successful
    }
 // Close the prepared statement and the database connection 

    $stmt->close();
    $conn->close();
// redirect the user to the view_messages.php page after successful submission
    header("Location: view_messages.php");
    exit(); // we stop the script to prevent any other further output after redirecting.
}
?>
