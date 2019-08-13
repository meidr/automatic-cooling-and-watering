<?php
  include("databaseConnection.php");
   
  $conn = databaseConnect();
   
  if(isset($_POST["SoilMoisture"]) && isset($_POST["Temperature"]) && isset($_POST["Humidity"])&& isset($_POST["StatusPompa"])&& isset($_POST["StatusKipas"]))
  {
    // Simpan data yang diterima ke database 
    $soilmoisture = $_POST["SoilMoisture"];
    $suhu = $_POST["Temperature"];
    $kelembapan = $_POST["Humidity"];
    $pompa = $_POST["StatusPompa"];
    $kipas = $_POST["StatusKipas"];
 
    $sql = "INSERT INTO datasensor (SoilMoisture,Temperature,Humidity,StatusPompa,StatusKipas) VALUES ('".$soilmoisture."', '".$suhu."', '".$kelembapan."', '".$pompa."', '".$kipas."')";
 
    if ($conn->query($sql) === TRUE) {
      echo("New record created successfully");
    } else {
      echo("Error: " . $sql . "<br>" . $conn->error);
    }
  }
  $conn->close();
?> 