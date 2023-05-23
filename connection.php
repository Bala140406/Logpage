<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "login_tb";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    <!--Just to ensure connetion-->
    
    ?>