<?php
    // To start a session, you use the session_start() function at the beginning of your PHP script.
    session_start();

    // Include database connection file 
    include 'includes/dbconnection.php';
    
    // Function definition for Javascript Alert Box
    function function_alert($message) {
        
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }

    function returnPage(){
        try {
            require(__DIR__ . '/index.php');
        } catch (\Throwable $e) {
            echo "This was caught: " . $e->getMessage();
        }
    }

    function GoToNow(){
       // echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
       
       try {
            require(__DIR__ . '/practice.php');
        } catch (\Throwable $e) {
            echo "This was caught: " . $e->getMessage();
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the input from the form
        $username = trim($_POST['username']);
        $pass = trim($_POST['password']);

        // Check for empty fields 
        if (empty($username) || empty($pass)) { 
            
            // Function call
            function_alert("Username and password cannot be empty.");
            exit; 
        } 

        // Prepare a SQL statement to prevent SQL injection 
        $stmt = $con->prepare("SELECT username, password FROM users WHERE username = ?"); 
        $stmt->bind_param("s", $username); 
        $stmt->execute(); 
        $stmt->store_result(); 

        // Check if username exists 
        if ($stmt->num_rows == 1) { 
            $stmt->bind_result($username, $password); 
            $stmt->fetch(); 

            // Verify the password 
            if (password_verify($pass, $password)) { 

                // Password is correct, start a session 
                $_SESSION["loggedIn"] = true;
                $_SESSION['username'] = $username;  // Set session variables

                /* 
                setcookie(
                    string $name,
                    string $value = "",
                    int $expires = 0, 
                    string $path = "", 
                    string $domain = "",
                    bool $secure = false, 
                    bool $httponly = false
                );
                */
                 // Set a cookie that expires in 1 day (86400 seconds)
                setcookie("username", $username, time() + 86400, "/", null, true);

                /**Differences between cookies and sessions:
                    - Cookies are stored on your browser
                    - Sessions are stored on the server
                    - Cookies expire based on what the web page that created them defines
                    - Sessions expire based on the web servers configuration
                    - Sessions work by just storing a single cookie on the browser.

                **/

                function_alert("Login successful!"); 

                    
                $dateNow = new DateTime(); // Get Current Date
                $logDate = $dateNow->format('Y-m-d H:i:s'); // Format the Registration Date
                
                // audit_log
                // SQL Query to Insert into users Table
                 $myid = session_id();

                $query = "INSERT INTO audit_log (username, session_id, login_time) VALUES ('$username','$myid','$logDate')";
        
                mysqli_query($con, $query);

                // Redirect to a protected page
                header("Location: ViewProfile.php");
                exit();
            } else { 
                function_alert("Invalid password."); 
                returnPage();
            } 
        } else { 
             function_alert("No user found with that username.");
             returnPage();
        } 
        // Close the statement 
        $stmt->close(); 
    } 
        
    // Close the database connection 
    $con->close(); 
?>