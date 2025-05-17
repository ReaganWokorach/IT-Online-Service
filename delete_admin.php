<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'contact_form');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminId = $_POST['admin_id'];

    $stmt = $conn->prepare("DELETE FROM admins WHERE id = ?");
    $stmt->bind_param("i", $adminId);
    if ($stmt->execute()) {
        echo "<script>alert('Admin deleted successfully!'); window.location='view_messages.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$result = $conn->query("SELECT id, username FROM admins");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Admin</title>
    <link rel="stylesheet" href="dashboard_styles.css">
</head>
<body>

    <div class="admin-container">
    <h2>Delete Admin User</h2>
    <form action="" method="POST" class="admin-form">
        <label>Select Admin to Delete:</label>
        <select name="admin_id" required>
            <?php while ($admin = $result->fetch_assoc()): ?>
                <option value="<?= $admin['id'] ?>"><?= htmlspecialchars($admin['username']) ?></option>
            <?php endwhile; ?>
        </select><br><br>
        <button type="submit" class="nav-btn" style="background-color: #CE2B14;">Delete Admin</button>
    </form>
    <a href="view_messages.php" class="back-link">⬅️ Back to Dashboard</a>
    </div>
    
</body>
</html>
