<?php
$db = mysqli_connect("localhost","root","","crud1"); 
$sql = "SELECT * FROM users";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';

?>