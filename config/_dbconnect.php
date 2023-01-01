<?php
    session_start();
    
    $server = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "nov11"; 

    $conn = mysqli_connect($server, $username, $password,$database);

    if (!$conn) {
        die("sorry we are failed to connect ". mysqli_connect_error());
    }
?> 