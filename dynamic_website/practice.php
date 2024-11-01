<?php 
    $title = "Practice";
    include('./includes/header.php');
    require_once "includes/dbconnection.php";
    require_once "includes/auth_check.php";

?>
    <div class="container">
        <h3> Hello <span style="color: green"> <?php  echo htmlspecialchars($_SESSION['username']) ?></span>, welcome to your profile page.</h3>

        <a id="contact">
            <section class="my-4">
                <div class="py-4">
                    <h2 class="text-center">Cities To Travel To?</h2>
                </div>
                
                <div class="w-50 m-auto" >
                    <form action="city.php" method="post">
                        <div class="form-group">
                            <label>City 1:</label>
                            <input type="text" name="cityName[]" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>City 2:</label>
                            <input type="text" name="cityName[]" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>City 3:</label>
                            <input type="text" name="cityName[]" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-success" >Submit</button>
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