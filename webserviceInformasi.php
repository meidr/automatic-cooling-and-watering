<?php
REQUIRE_ONCE('koneksi.php'); 
//$date=date("Y-m-d h:i:s");
//$date=date("Y-m-d h:m:s");
//print($date);

//ini untuk waktu jakarta(bisa untuk input dan update insya allah)
//$now = date_create('now', timezone_open('Asia/Jakarta'))->format('Y-m-d H:i:s');
//print($now);
 
//$QUERY = MYSQLI_QUERY($conn,    "SELECT * FROM datasensor WHERE Timestamp='$now'"   );
$QUERY = MYSQLI_QUERY($conn,    "SELECT * FROM datasensor ORDER BY timestamp DESC LIMIT 1"   ); 

 
 $mhs = new stdClass; 
 $rows = array();
while($r = mysqli_fetch_assoc($QUERY)) {
    $rows[] = $r;
}
//print_r($rows);

PRINT JSON_ENCODE(["dataku"=>$rows]);
 MYSQLI_CLOSE($conn); 
 
?>