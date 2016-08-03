<!DOCTYPE html>
<html>
<head>

<title>Watson for Psychology - First Time Survey</title>
<?php
include("connectuser.php");
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
header ("Location: login.php"); 
}
$myusername = $_SESSION['login_user'];
   $sql = "SELECT id FROM users WHERE username = '$myusername'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result);
   $id=$row['id'];



   if( isset($_POST['submit']) ){
   include("connectuser.php");
   $anxiety1 = $_POST['Anxiety1'];
    $anxiety2 = $_POST['Anxiety2'];
    $anxiety3 = $_POST['Anxiety3'];
    $anxiety4 = $_POST['Anxiety4'];
    $anxiety5 = $_POST['Anxiety5'];
    $anxiety6 = $_POST['Anxiety6'];
    $anxiety7 = $_POST['Anxiety7'];
   $sql2 = "INSERT INTO anxiety (id, anxiety1, anxiety2, anxiety3, anxiety4, anxiety5, anxiety6, anxiety7) VALUES ('$id', '$anxiety1', '$anxiety2', '$anxiety3', '$anxiety4', '$anxiety5', '$anxiety6', '$anxiety7')";
   $query = mysqli_query($db,$sql2); 

$depression1 = $_POST['Depression1'];
settype($depression1,integer);
    $depression2 = $_POST['Depression2'];
    settype($depression2,integer);
    $depression3 = $_POST['Depression3'];
    settype($depression3,integer);
    $depression4 = $_POST['Depression4'];
    settype($depression4,integer);
    $depression5 = $_POST['Depression5'];
    settype($depression5,integer);
    $depression6 = $_POST['Depression6'];
    settype($depression6,integer);
    $depression7 = $_POST['Depression7'];
    settype($depression7,integer);
    $depression8 = $_POST['Depression8'];
    settype($depression8,integer);
    $depression9 = $_POST['Depression9'];
    settype($depression9,integer);
    $depression10 = $_POST['Depression10'];
    settype($depression10,integer);

    $sql3 = "INSERT INTO depression (id, Depression1, Depression2, Depression3, Depression4, Depression5, Depression6, Depression7, Depression8, Depression9, Depression10) VALUES ('$id', '$depression1', '$depression2', '$depression3', '$depression4', '$depression5', '$depression6', '$depression7', '$depression8', '$depression9', '$depression10')";
   $query = mysqli_query($db,$sql3); 

   $ptsd1 = $_POST['PTSD1'];
settype($ptsd1,integer);
    $ptsd2 = $_POST['PTSD2'];
    settype($ptsd2,integer);
    $ptsd3 = $_POST['PTSD3'];
    settype($ptsd3,integer);
    $ptsd4 = $_POST['PTSD4'];
    settype($ptsd4,integer);
    $sql4 = "INSERT INTO ptsd (id, ptsd1, ptsd2, ptsd3, ptsd4) VALUES ('$id', '$ptsd1', '$ptsd2', '$ptsd3', '$ptsd4')";
   $query = mysqli_query($db,$sql4); 

header("Location: profile.php");
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap-custom.css">
<link rel="stylesheet" href="css/style.css">

<style type = "text/css">
   body {
      font-family:Arial, Helvetica, sans-serif;
      font-size:14px;
      height:100%;
      background-image: url("images/newbackground.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      margin:0px;
   }

   label {
      font-weight:bold;
      width:100px;
      font-size:14px;
   }

.content{
   width: 58%;
   height: 86%;
   z-index: 99;
   background-color:white;
   position:absolute;
   top:50px;
   margin-top:3%;
   overflow:scroll;
   left:0px;
}
</style>
</head>
<body>
<div class="row">
   <div class="col-xs-0 col-sm-1 col-md-1" height="100%"></div>
   <div class="col-xs-12 col-sm-10 col-md-10">
   <h1 style="font-size:50px; color:#black;">First Time User Survey</h1>
   </div>
<img id="head" style="position:absolute; height:90%; z-index:-1; width:auto; right:-60px; bottom:15px;" src="images/head-outline.png">

<div style="padding:20px;" class="content" id="content">
<table style="width:100%">
  <tr>
    <th>Section 1</th>
    <th>Answer</th>
  </tr>
<form action="" method="POST">
<tr>
<td>
  <p>1. Feeling nervous, anxious, or on edge</p>
</td>
<td>
<select name="Anxiety1">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
  </tr>
<tr>
<td>
   <p>2. Not being able to sleep or control worrying</p>
</td>
<td>
<select name="Anxiety2">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr>
</td>
<tr>
    <td>
   <p>3. Worrying too much about different things</p>
   <td>
<select name="Anxiety3">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
  <p>4. Trouble relaxing</p>
</td>
<td>
  <select name="Anxiety4">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
<p>5. Being so restless that it is hard to sit still</p>
</td><td>
  <select name="Anxiety5">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
  </tr></td>
  <tr><td>
  <p>6. Becoming easily annoyed or irritable</p>
</td><td>
  <select name="Anxiety6">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
   <p>7. Feeling afraid, as if something awful might happen</p>
</td><td>
  <select name="Anxiety7">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
  <tr>
    <th>Section 2</th>
    <th>Answer</th>
  </tr>
<tr>
<td>
  <p>1. Little interest or pleasure in doing things</p>
</td>
<td>
<br>
<select name="Depression1">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
  </tr>
<tr>
<td>
   <p>2. Feeling down, depressed, or hopeless</p>
</td>
<td>
<select name="Depression2">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr>
</td>
<tr>
    <td>
   <p>3. Trouble falling or staying asleep, or sleeping too much</p>
   <td>
<select name="Depression3">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
  <p>4. Feeling tired or having little energy</p>
</td>
<td>
  <select name="Depression4">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
<p>5. Poor appetite or overeating</p>
</td><td>
  <select name="Depression5">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
  </tr></td>
  <tr><td>
  <p>6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down</p>
</td><td>
  <select name="Depression6">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
   <p>7. Trouble concentrating on things, such as reading the newspaper or watching television</p>
</td><td>
  <select name="Depression7">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
   <p>8. Moving or speaking so slowly that other people could have noticed</p>
</td><td>
  <select name="Depression8">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
  <p>9. Thoughts that you would be better off dead, or of hurting yourself</p>
</td><td>
  <select name="Depression9">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
  <p>10. If you checked off any problems, how difficult have these problems made it for you at work, home, or with other people?</p>
</td><td>
  <select name="Depression10">
    <option value="0">Not at all</option>
    <option value="1">Several Days</option>
    <option value="2">More than half of the days</option>
    <option value="4">Nearly every day</option>
  </select>
  <br><br>
</td></tr>
<tr>
    <th>Section 3</th>
    <th>Response</th>
  </tr>
<form action="action_page.php">
<tr>
<td>
  <p>1. Have had nightmares about it or thought about it when you did not want to?</p>
</td>
<td><br>
<select name="PTSD1">
    <option value="0">No</option>
    <option value="1">Yes</option>
  </select>
  <br><br>
  </tr>
<tr>
<td>
   <p>2. Tried hard not to think about it or went out of your way to avoid situations that reminded you of it?</p>
</td>
<td>
<select name="PTSD2">
     <option value="0">No</option>
    <option value="1">Yes</option>
  </select>
  <br><br>
</tr>
</td>
<tr>
    <td>
   <p>3. Were constantly on guard, watchful, or easily startled?</p>
   <td>
<select name="PTSD3">
    <option value="0">No</option>
    <option value="1">Yes</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
  <p>4. Felt numb or detached from others, activities, or your surroundings?</p>
</td>
<td>
  <select name="PTSD4">
  <option value="0">No</option>
    <option value="1">Yes</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
  <input style="position: absolute; right: 15px; width: 100px; height:30px" type="submit" name="submit" value="Submit"><br>

</td></tr>

</div>
</form>

</body>
</html>