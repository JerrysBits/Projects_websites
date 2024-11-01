
<?php

    function dbcon(){
         
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "practice_db"; 
        
        $con = mysqli_connect($servername, $username, $password, $dbname);
        return $con;
    }
    
    // Create connection 
    //$con = new mysqli($servername, $username, $password, $dbname); 
?>