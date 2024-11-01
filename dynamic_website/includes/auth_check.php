<?php 
    // Start session to access session variables
    session_start();

    // Check if the user is logged in, otherwise redirect to login page
    if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
        header("Location: index.php"); // Redirect to login page if not logged in
        exit();
    }
?>