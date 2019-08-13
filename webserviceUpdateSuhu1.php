<?php
$nilaiAtasSuhu=$_POST['nilaiAtasSuhu'];
$nilaiBawahSuhu=$_POST['nilaiBawahSuhu'];
$now = date_create('now', timezone_open('Asia/Jakarta'))->format('Y-m-d H:i:s');
REQUIRE_ONCE('koneksi.php'); 
//$sql = "UPDATE rangesensor SET Timestamp='$now', batasAtas = '$nilaiAtasSuhu', batasBawah = '$nilaiBawahSuhu' WHERE Timestamp DESC AND jenisSensor = 'suhu'";

$sql = "UPDATE rangesensor SET Timestamp='$now', batasAtas = '$nilaiAtasSuhu', batasBawah = '$nilaiBawahSuhu' WHERE jenisSensor = 'suhu' ORDER BY Timestamp DESC LIMIT 1";
$QUERY = MYSQLI_QUERY($conn,$sql); 
MYSQLI_CLOSE($conn); 
?>