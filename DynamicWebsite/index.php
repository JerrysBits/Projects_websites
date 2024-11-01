
<?php 
    $title = "Group 4 Presntation";
    include('./includes/header.php');
    require_once "includes/dbconnection.php";
    // require_once "includes/auth_check.php";

?>

<div class="container">
            <section class="my-4">

                <!--<div class="py-4">
                    <h2 class="text-center">Login To Continue</h2>
                </div>-->
        
                <div class="w-50 m-auto" >
                    
                    <main class='px-5'>
                        <div class='mb-22 mx-auto w-full max-w-[1050px] pt-10 md:pt-20'>
                            <div class='mb-10 text-center'>
                            <h3 class='mb-5 text-2xl font-bold leading-normal text-[var(--primary-color)] md:text-3xl'>Login</h3>
                            <div class='text-sm sm:text-base'></div>
                            </div>

                            <div class='w-full max-w-2xl pt-5 pb-8 mx-auto space-y-10 login-page'>

                            <form  action="login.php" method="post">
                                <input type='hidden' name='store_id' value='94649aed-0ec5-4a8a-a42c-9b8d449e4dde'>
                                <div class='mb-4 form-message'></div>

                                <div class='mb-4'>
                                <label for='email' class='block mb-2 text-sm font-medium md:text-base' >Username</label>
                                <input type='text' name='username' id='username' Placeholder="Enter username" class='block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400' />
                                </div>

                                <div class='mb-4'>
                                <label for='password' class='block mb-2 text-sm font-medium md:text-base' >Password</label>
                                <input type='password' name='password' Placeholder="Enter password" id='password' class='block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400' />
                                </div>

                                <div class='mb-4'>
                                <input type='submit' class='w-full hover:underline btn btn-success' value='Log in'/>
                                </div>

                                <div class='flex flex-col text-center text-[var(--link-color)]'>
                                <a class='mx-auto mb-2.5 w-fit text-sm hover:underline sm:text-base' href='#' >Forgot password?</a>
                                <a class='mx-auto text-sm w-fit hover:underline sm:text-base newUser' href='newUser.php' >Create Account</a>
                                </div>
                            </form>
                            </div>

                            <div class='mb-10 text-center'>
                            <div class='text-sm sm:text-base'> </div>
                            </div>
                        </div>
                    </main>

                <!--
                    <form action="login.php" method="post">
                                
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" Placeholder="Enter username" name="username" class="form-control" />
                        </div>
                    
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" Placeholder="Provide your password" name="password" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                -->

                </div>

            </section>

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
