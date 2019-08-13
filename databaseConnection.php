<?php

 function databaseConnect()
  {
   
    $servername = "localhost";
    $username = "sensor_bbpp";
    $password = "bbpps12345";
    $database = "sensor_ketindan";
     
    // Create connection
    $conn = new mysqli($servername, $username, $password);
 
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //echo("Connected successfully");
    //echo("\n");
       
    // Connect to database
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }
    //echo("Database connected successfully");
    //echo("\n");
   
    return $conn;
  } 

?> 