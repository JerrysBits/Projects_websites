<?php
    session_unset(); // Remove all session variables

    $title = "Registration Reponse";

    //require_once "includes/dbconnection.php";
    
    include('./includes/header.php');

    // Include database connection file 
    include 'includes/dbconnection.php';

    // Function definition for Javascript Alert Box
    function function_alert($message) {
        
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }

    function returnPage(){
        try {
            require(__DIR__ . '/newUser.php');
        } catch (\Throwable $e) {
            echo "This was caught: " . $e->getMessage();
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Get the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check for empty fields 
        if (empty($username) || empty($password)) { 
            
            // Function call
            function_alert("Username and password cannot be empty.");
            exit; 
        } 

        // Prepare a SQL statement to prevent SQL injection 
        $stmt = $con->prepare("SELECT username FROM users WHERE username = ?"); 
        $stmt->bind_param("s", $username); 
        $stmt->execute(); 
        $stmt->store_result(); 

        // Check if username exists 
        if ($stmt->num_rows == 1) { 
            $stmt->bind_result($username); 
            $stmt->fetch(); 
            
            // Close the statement 
            $stmt->close(); 
    
            returnPage();
            function_alert("The username already exist, kindly login instead or contact admin to change your password.");
        } 
        else 
        { 
            $hash_password = password_hash($password, PASSWORD_DEFAULT); // Encrypt the password
            $reg_date = new DateTime(); // Get Current Date
            $dateNow = $reg_date->format('Y-m-d H:i:s'); // Format the Registration Date
    
            // SQL Query to Insert into users Table
            $query = "INSERT INTO users (username, password, reg_date) VALUES ('$username','$hash_password','$dateNow')";
    
            mysqli_query($con, $query);

            // hearder('location: index.php');
            returnPage();
            
            function_alert('The details was saved successfully!. \nKindly proceed to login with the saved details.');
        } 
    }
    
    // Close the database connection 
    $con->close(); 
?>