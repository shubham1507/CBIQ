<?php
//$url = "http". (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] ."/cccccc/cyberbusinessiq.com/admin/blog/";
include_once('url.php');
function upload_image()
{
 if(isset($_FILES["user_image"]))
 {
   // $url = "http". (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] ."/cccccc/cyberbusinessiq.com/admin/blog/";

  $extension = explode('.', $_FILES['user_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './upload/' . $new_name;
  move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
  return $new_name;
 }
}

function get_image_name($user_id)
{
 include('db.php');
 $statement = $connection->prepare("SELECT image FROM users WHERE id = '$user_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

function get_total_all_records()
{
 include('db.php');
 $statement = $connection->prepare("SELECT * FROM users");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
