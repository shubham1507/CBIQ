<?php
   session_start();

   include("config.php");
   $error='';
 
   
  

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,md5($_POST['password'])); 
      
      $sql = "SELECT id FROM login WHERE uname = '$myusername' and pwd ='$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location:blog.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

 
   
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="icon" href="img/brand-img.png">
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
            color:white;
         }
         .box {
            border:#666666 solid 1px;
         }
         #img{
           margin-left:38%;
           margin-bottom:2%;  
         }
      </style>
      
   </head>
   
   <body background="img/bg.png">
   <img src="img/brand-img.png" alt="logo" id="img">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = " color:#FFFFFF; padding:3px;font-size:24px;margin-left:7%;"><b>Login</b></div>
				
            <div style = "margin:30px">
            
               <form action = "#" method = "post">
                  <label>UserName  </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> 
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
