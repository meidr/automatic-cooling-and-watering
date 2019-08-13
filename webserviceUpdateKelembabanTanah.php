<?php
$nilaiAtasKelembabanTanah=$_POST['nilaiAtasKelembabanTanah'];
$nilaiBawahKelembabanTanah=$_POST['nilaiBawahKelembabanTanah'];
$now = date_create('now', timezone_open('Asia/Jakarta'))->format('Y-m-d H:i:s');
REQUIRE_ONCE('koneksi.php'); 
$sql = "UPDATE rangesensor SET Timestamp='$now', batasAtas = '$nilaiAtasKelembabanTanah', batasBawah ='$nilaiBawahKelembabanTanah' WHERE jenisSensor = 'kelembapanTanah' ORDER BY Timestamp DESC LIMIT 1";
$QUERY = MYSQLI_QUERY($conn,$sql); 
MYSQLI_CLOSE($conn); 
?>