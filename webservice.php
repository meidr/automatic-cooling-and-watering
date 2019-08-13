<?php 
REQUIRE_ONCE('koneksi.php'); 
 
 $QUERY = MYSQLI_QUERY($conn,    "SELECT * FROM datasensor"   ); 
 
 $mhs = new stdClass; 
 $rows = array();
while($r = mysqli_fetch_assoc($QUERY)) {
    $rows[] = $r;
}
//print_r($rows);
PRINT JSON_ENCODE(["dataku"=>$rows]);
 MYSQLI_CLOSE($conn); 
 
?>