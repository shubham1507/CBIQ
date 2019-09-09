<?php

//$connect = mysqli_connect("localhost", "root", "", "crud1");
$connect = mysqli_connect("localhost", "root", "", "crud1");
$query = "SELECT * FROM users order by id";
 $result = mysqli_query($connect, $query);

?>
