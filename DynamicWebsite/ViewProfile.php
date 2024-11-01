<?php 
    $title = "Edit Profile";
    include('./includes/header.php');
    require_once "includes/auth_check.php";
    include 'includes/dbfunction.php';
    $con = dbcon();

    $username = $_SESSION['username']; // Get session variables

    $sql = "SELECT firstname FROM users_account WHERE username= '$username'";

    $result = mysqli_query($con, $sql);

?>
  
    <div class="container top-margin">
        <h3> Hello <span style="color: green"> <?php  echo htmlspecialchars($_SESSION['username']) ?></span>, welcome to your profile page.</h3>

        <a id="contact">
            <section class="my-4">
                <div class="py-4">
                    <h2 class="text-center">Personal Information</h2>
                </div>
                
                <div class="w-50 m-auto" >
                    <form action="city.php" method="post">

                    <?php
                        /*
                        $username = $_SESSION['username']; // Get session variables
                        
                        $result = $con->prepare( "SELECT * FROM users_account WHERE username= ?"); 
                        $result->bind_param("s", $username); 

                        while( $row = mysql_fetch_array( $result ) ) {
                            */
                    ?>

                        <div class="form-group">
                            <label class='block mb-2 text-sm font-medium md:text-base'>First Name:</label> 
                            <?php
                                while($rows = mysqli_fetch_array($result)){ 
                                    $k = $rows['firstname'];
                                    echo '<input name="firstname" disabled="disabled" type="text"  class="block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400" value="'.$k.'" />';
                                } 
                            ?>
                        </div>

                        <div class="form-group">
                            <label class='block mb-2 text-sm font-medium md:text-base'>Last Name:</label>
                            <?php
                                $sql = "SELECT lastname FROM users_account WHERE username= '$username'";

                                $result = mysqli_query($con, $sql);
                                while($rows = mysqli_fetch_array($result)){ 
                                    $k = $rows['lastname'];
                                    echo '<input name="lastname" disabled="disabled" type="text" class="block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400" value="'.$k.'" />';
                                } 
                            ?>
                        </div>

                        <div class="form-group">
                            <label class='block mb-2 text-sm font-medium md:text-base'>Other Name:</label> 
                            <?php
                                $sql = "SELECT othername FROM users_account WHERE username= '$username'";

                                $result = mysqli_query($con, $sql);
                                while($rows = mysqli_fetch_array($result)){ 
                                    $k = $rows['othername'];
                                    echo '<input name="othername" disabled="disabled" type="text" class="block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400" value="'.$k.'" />';
                                } 
                            ?>
                        </div>  

                        
                        <button type="submit" id="btnEdit" name="btnEdit" class="btn btn-success" >Edit</button>
                    </form>
                    
                </div>
            </section>
        </a>
            
        <?php

            echo('<a href="./index.php" id="login" class="newUser">Log Out</a>');
        ?>
        


        <div class="footerContainer">
        
            <div class="footer">
                <p class="copyright">
                    Copyright &copy; <?php echo date('Y') ?> | Group 4 - PHP Practical 
                </p>
            </div>
        </div>

        <script src="js/app.js"></script>
    </div>
</body>
</html>