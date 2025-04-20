<?php 
session_start();
session_destroy(); // Terminate all session data 
header("Location: index.html"); // Redirect to login page 

exit();
?>