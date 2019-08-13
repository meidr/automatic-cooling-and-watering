<?php
  	define('HOST','localhost');
    define('USER','sensor_bbpp'); //sesuaikan nama user
    define('PASS','bbpps12345'); //sesuaiakan nama password 
    define('DB','sensor_ketindan');//sesuaiakan naman database
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

date_default_timezone_set("Asia/Jakarta");

?>