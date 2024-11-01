<?php
    session_unset(); // Remove all session variables

    $title = "User Registration";

    require_once "includes/dbconnection.php";
    
    include('./includes/header.php');
?>

<div class="container">

    
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Kindly Provide Your Information</h2>
        </div>
        
        <div class="w-50 m-auto" >

            <form action="register.php" method="post">
                                
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" Placeholder="Enter username" name="username" class="form-control" />
                </div>
            
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" Placeholder="Provide your password" name="password" class="form-control" />
                </div>

                <button type="submit" class="btn btn-success">Register</button>
            </form>

        </div>

    </section>

        <?php
        /*
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
            
                    echo('<p style="color:green" class="successMsg">The details was saved successfully!</p>');
                    
                    function_alert('Kindly proceed to login with the saved details.');
                } 
            }
            
            // Close the database connection 
            $con->close(); 

            echo('<a href="./index.php" id="login" class="newUser">Log In</a>');
         */
        ?>

        <div class="footerContainer">
        

            <div class="footer">
                <p class="copyright">
                    Copyright &copy; <?php echo date('Y') ?> | Group 4 - PHP Practical 
                </p>
            </div>
        </div>
</div>

    <script src="js/app.js"></script>
</body>
</html>