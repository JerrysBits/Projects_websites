
<?php 
    $title = "Group 4 Presntation";
    include('./includes/header.php');
    require_once "includes/dbconnection.php";
    require_once "includes/auth_check.php";

?>

<div class="container">

        <a id="contact">
            <section class="my-4">
                <div class="py-4">
                    <h2 class="text-center">Login To Continue</h2>
                </div>
        
                <div class="w-50 m-auto" >
                    <form action="login.php" method="post">
                                
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" name="username" class="username" class="form-control" />
                            </div>
                        
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="password" class="form-control" />
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>

            </section>
        </a>

        <a href="./newUser.php" class="newUser">Register Now!</a>


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
