<?php
    
    require_once "includes/dbconnection.php";

    $cityName = $_POST['cityName'];
    $userNme = $_SESSION['username'];
    
    foreach($cityName as $city) { 
        
        $query = "INSERT INTO Cities (passenger, cityName) VALUES ('$userNme', '$city')";

        mysqli_query($con, $query);
    }
    
    hearder('location:practice.php');


?>