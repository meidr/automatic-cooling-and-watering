<?php
    include("databaseConnection.php"); 
	$conn = databaseConnect();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql        =   "SELECT jenisSensor,batasAtas, batasBawah FROM rangesensor";
    $result     =   $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc())
    {
      echo $row["jenisSensor"];
      echo(",");
      echo $row["batasAtas"];
      echo(",");
      echo $row["batasBawah"];
      echo(",");
    }
        
    } else {
        echo "Error:" . $sql . "\n" . $conn->error;
    }
    
    $conn->close();
?>