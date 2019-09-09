<?php  
include 'connection.php';
if(isset($_POST["id"]))  
{  
     $output = '';  
     //$connect = mysqli_connect("localhost", "root", "", "crud1");  
     $query = "SELECT * FROM users WHERE id = '".$_POST["id"]."'";  
     $result = mysqli_query($connect, $query);  
     $output .= '  
     <div>';  
            
     while($row = mysqli_fetch_array($result))  
     {  
          $output .= '
          
                <img src="admin/upload/'.$row["image"].'" alt="Smiley face" height="142" width="142" style="margin-left:35%;">
                <p>'.$row["last_name"].'</p>    
               
                   
               ';  
     }  
     $output.="</div>'";
     echo   $output;
}  
?>
