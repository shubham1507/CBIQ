<?php
include('db.php');
include('function.php');
$url = "http". (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] ."/admin/";
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO users (first_name, last_name, image) 
   VALUES (:first_name, :last_name, :image)
  ");
  $result = $statement->execute(
   array(
    ':first_name' => $_POST["first_name"],
    ':last_name' => $_POST["last_name"],
    ':image'  => $image
   )
  );

 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
   else
   {
    $image =$_POST["user_image"];
   }
  $statement = $connection->prepare(
   "UPDATE users 
   SET first_name = :first_name, last_name = :last_name, image = :image  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':first_name' => $_POST["first_name"],
    ':last_name' => $_POST["last_name"],
    ':image'  => $image,
    ':id'   => $_POST["user_id"]
   )
  );

 }
}

?>
   