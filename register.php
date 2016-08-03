
<html>

   <head>
      <title>Watson for Psychology - Register Page</title>
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

   <body bgcolor = "#FFFFFF">
   <div style="padding-top:50px;" class="col-xs-12" align='center'>
   <h1 style="font-family:sans-serif; font-size:50px; color:#black;"><strong>IBM Watson for Psychology<strong></h1>
   </div>
      <div align = "center">
         <div style = "margin-top:175px; background-color: gray; width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br>
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Register "/><br />


               </form>
               <?php
                  include("connectuser.php");

                  if($_SERVER["REQUEST_METHOD"] == "POST") {
                     // username and password sent from form 

                     $myusername = $_POST['username'];
                     $mypassword = $_POST['password'];
                     $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
                        function generateHashWithSalt($password) {
                         
                         return hash("sha256", $password . $salt);
                        }  
                     $mypassword = md5($mypassword);
                     $myemail = $_POST['email'];
                     if ($myusername!='' && $mypassword!=''&& $myemail!=''){
                     $sql = "INSERT INTO users (username, password, salt, email, took_survey) VALUES ('$myusername', '$mypassword', '$salt', '$myemail', 'No')";
                     $query = mysqli_query($db,$sql);
                     

                     if (($query)) {
                       
                        echo  "<p>Registration succesful. Redirecting you to the login page...</p>";
                        
                        header("location: login.php");

                        
                     } else {

                        echo "There was a problem you dumb goof!";
                        die('Invalid query: ' . mysql_error());
                     }
                  } else {
                     echo "Please make sure the fields are filled out correctly.";
                  }
                  }
               ?>

            </div>

         </div>

      </div>

   </body>
</html> 