<?php 
//To protect the messages recieved 
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: contactus.php"); // change this to redirect to refrest the form 
    exit();
}

$host = "localhost";
$db = "contact_form";
$user = "root";
$pass = "";

// This is where we connect to the database called contact_form 
$conn = new mysqli($host, $user, $pass, $db);

// incase the connection fails, we handle the error by this method
if ($conn -> connect_error) {
    die("connection failed: ". $conn -> connect_error);
}

//Selecting the table messages which exists in the database using the query language 
$sql = "SELECT * FROM messages ORDER BY submitted_at DESC";

$result = $conn -> query($sql);

//This is added to handled the clearing of data from the database 
if(isset($_POST['clear_messages'])){
    $conn = new mysqli("localhost", "root", "", "contact_form");
    
    if($conn -> connect_error){
        die("Connection failed: " . $conn -> connect_error);
    }

    $deleteQuery = "DELETE FROM messages";
    if ($conn -> query($deleteQuery) === TRUE){
        echo "<script>alert('All messages have been deleted.'); window.location.href='view_messages.php';</script>";
    }else{
        echo "Error deleting messages: " . $conn -> error;
    }

    //We dont leave the database connection open, therfore we close it here.
    $conn -> close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submissions</title>
    <link rel="stylesheet" href="view_messages.css">
</head>
<body>
    <div class="body">
    <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Users</a></li>
      <li><a href="#">Contact Messages</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
    </div>
    <h2>Contact Form Messages</h2>
    <form action="" method="post" onsubmit="return confrim('Are you sure you want to delete this message?');" style="display: inline;">
    </form>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result -> num_rows > 0):?>
            <?php while($row = $result -> fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['name'])?></td>
                <td><?= htmlspecialchars($row['email'])?></td>
                <td><?= htmlspecialchars($row['message'])?></td>
                <td><?= $row['submitted_at']?></td>
            </tr>  
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">No Messages found.</td></tr>
        <?php endif; ?>     
        </tbody>
    </table>
</div>
    <button type="submit" name="clear_messages" class="clear-button">Clear All Messages</button>
    <a href="logout.php" class="logout-button">Logout</a>

</body>
</html>