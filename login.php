<html>
<?php
   include("connectuser.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT id, salt, password FROM users WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $match=$row['password'];
      $salt = $row['salt'];
      $password = hash("sha256", $_POST['password'] . $salt);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
        $db->close();
      if($count == 1 && $password = $match) {

         $_SESSION['login_user'] = $myusername;

         header("location: profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


   <head>

        <title>Watson for Psychology - Log In</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap-custom.css">
<link rel="stylesheet" href="css/style.css">

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            background-image: url("images/newbackground.jpg");
            background-repeat: no-repeat;
            background-size: cover;
         }

         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }

         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body>
   <div style="padding-top:50px;" class="col-xs-12" align='center'>
   <h1 style="font-family:sans-serif; font-size:50px; color:#black;"><strong>IBM Watson for Psychology<strong></h1>
   </div>
      <div align = "center">
         <div style = "margin-top:175px; background-color: gray; width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
            
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br /></br>
                  <a href="register.php">Not registered? Click here!</a>
               </form>

            </div>

         </div>

      </div>

   </body>
</html> 