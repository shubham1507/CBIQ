<?php

include('db.php');
include("function.php");
include('url.php');


if(isset($_POST["user_id"]))
{
 $image = get_image_name($_POST["user_id"]);



if(is_file($image)) {
    unlink($image);
 }
 $statement = $connection->prepare(
  "DELETE FROM users WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["user_id"]
  )
 );
 

}



?>
   