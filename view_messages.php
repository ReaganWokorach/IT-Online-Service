<?php 
//To protect the messages recieved 
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
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

}
//handle admin creation
if(isset($_POST['create_admin'])){
    $username = $_POST['new_username'];
    $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    $stmt = $conn -> prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
    $stmt -> bind_param("ss", $username, $password);
    if ($stmt -> execute()) {
        echo "<script>alert('New admin created successfully');</script>";
    } else {
        echo "Error Creating admin: ". $conn -> error;
    }
    $stmt -> close();
}

//Handling admin deletion 

if (isset($_POST['delete_admin'])){
    $usernameToDelete = $_POST['delete_username'];

    if($usernameToDelete != 'admin') {
        $stmt = $conn -> prepare("DELETE FROM admins WHERE username = ?");
        $stmt -> bind_param("s", $usernameToDelete);
        if($stmt -> execute()){
            echo "<script>alert('Admin deleted successfully');</script>";
        }else{
            echo "Error deleting admin: " . $conn -> error;
        }
        $stmt -> close();
    }else {
        echo "<script>alert('Default admin cannot be deleted');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submissions</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">

</head>
<body>


<div class="dashboard-container">
        <aside class="sidebar">
            <h2 class="sidebar">Admin Dashboard</h2>
            <nav class="nav-links">
            <a href="view_messages.php" class="nav-item active"><i class='bx bx-message-detail'></i> View Messages</a>
            <a href="create_admin.php" class="nav-item"><i class='bx bx-user-plus'></i> Create Admin</a>
            <a href="delete_admin.php" class="nav-item"><i class='bx bx-user-minus'></i> Delete Admin</a>
            <a href="logout.php" class="nav-item logout"><i class='bx bx-log-out'></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <!-- View Messages -->
            <section id="messages">
                <h2>Contact Form Messages</h2>
                <form method="post" onsubmit="return confirm('Are you sure you want to delete ALL messages?');">
                    <button type="submit" name="clear_messages" class="clear-button">Clear All Messages</button>
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
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= htmlspecialchars($row['name']) ?></td>
                                    <td><?= htmlspecialchars($row['email']) ?></td>
                                    <td><?= htmlspecialchars($row['message']) ?></td>
                                    <td><?= $row['submitted_at'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="5">No Messages Found</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </section>

        </main>
</body>
</html>