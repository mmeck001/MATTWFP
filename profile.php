<!DOCTYPE html>
<html>
<head>
<?php
$anxiety = 0;
$depression = 0;
$ptsd = 0;
include("connectuser.php");
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
header ("Location: login.php");
} else {
	$myusername=$_SESSION['login_user'];
	$sql = "SELECT took_survey, id FROM users WHERE username = '$myusername'";
	$result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
	if ($row['took_survey']=='No') {
		header ('Location: survey.php');
	}
}
$sql_anxiety = "SELECT SUM(anxiety1 + anxiety2 + anxiety3 + anxiety4 + anxiety5 + anxiety6 + anxiety7) FROM anxiety WHERE id = '$id'";
$res=mysqli_query($db, $sql_anxiety);
$row1 = mysqli_fetch_array($res);
$anxiety_total=$row1['SUM(anxiety1 + anxiety2 + anxiety3 + anxiety4 + anxiety5 + anxiety6 + anxiety7)'];

$sql_depression = "SELECT SUM(depression1 + depression2 + depression3 + depression4 + depression5 + depression6 + depression7 + depression8 + depression9 + depression10) FROM depression WHERE id = '$id'";
$res=mysqli_query($db, $sql_depression);
$row2 = mysqli_fetch_array($res);
$depression_total=$row2['SUM(depression1 + depression2 + depression3 + depression4 + depression5 + depression6 + depression7 + depression8 + depression9 + depression10)'];

$sql_ptsd = "SELECT SUM(ptsd1 + ptsd2 + ptsd3 + ptsd4) FROM ptsd WHERE id = '$id'";
$res3=mysqli_query($db, $sql_ptsd);
$row3 = mysqli_fetch_array($res3);
$ptsd_total=$row3['SUM(ptsd1 + ptsd2 + ptsd3 + ptsd4)'];

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

    $(window).load(function() {
        $('.content').hide()
    });
$(document).ready(function(){
  $( "#box1" ).click(function() {
  $(".box").hide() 
  $("#head").fadeOut()
  $('#blog').delay(5000).show()
  });
});
$(document).ready(function(){
  $( "#box2" ).click(function() {
  $(".box").hide() 
  $("#head").fadeOut()
  $('#health_status').delay(5000).show()
  });
});
$(document).ready(function(){
  $( "#box3" ).click(function() {
  $(".box").hide() 
  $("#head").fadeOut()
  $('#video').delay(5000).show()
  });
});
$(document).ready(function(){
  $( "#box4" ).click(function() {
  $(".box").hide() 
  $("#head").fadeOut()
  $('#sms').delay(5000).show()
  });
});

$(document).ready(function(){
  $( "#back" ).click(function() {
  $(".box").show() 
   $("#head").fadeIn() 
   $('.content').hide()
  });
});
</script>
<style type='text/css'>
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
body{background-image: url("images/newbackground.jpg"); background-repeat: no-repeat; background-size: cover; }
@font-face { font-family: HelveticaNeue; src: url('fonts/HelveticaNeue.ttf'); } 
h1 {
	font-family: HelveticaNeue
	font-size:50px;
}
p {
	font-size:15px;
}
h2 {
	font-size:30px;
}
.box {
outline:1px solid black;
padding-left:20px;
z-index: 0;
background-color:white;
opacity:.9; 
}


.box:hover{
   background-color:#d9d9d9;
}

.content{
	width: 94%;
	height: 70%;
	z-index: 99;
	background-color:white;
	position:absolute;
	margin:40px;
}


 </style>
	<title>Your Mental Health Profile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap-custom.css">


	<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>

<div class="row">
	<div class="col-xs-12">
		<table width=100%>
			<tr bgcolor="#3687e2" style="border-bottom:1px solid gray">
				<td style="padding-left:15px;" id="back" align="left" width=5%>
					Back
				</td>
				<td width="10%" onclick="location.href='logout.php'">Logout</td>
				<td width=59%><center><font size="5">IBM <strong>Watson for Psychology</strong></font></center>
				</td>
				<td width=19% align="right">
				<img src="images/menu.png" style="width:40px;height:40px">
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-1 col-md-1" height="100%"></div>
	<div class="col-xs-12 col-sm-10 col-md-10">
	<h1 style="font-size:50px; color:#black;">Your Mental Health Profile</h1>
	</div>
<img id="head" style="position:absolute; height:90%; z-index:-1; width:auto; right:-60px; bottom:15px;" src="images/head-outline.png">

</div>
<div class="row">
	<div class="col-xs-12 col-sm-10 col-md-5" style="padding-left:60px; padding-top:0px;">
		<div id="box1" class="box">
			<h2 style="font-size:15px;"><br>Daily Blog<h2><p>You didn't blog today! How was your day?<br>&nbsp;</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-10 col-md-6" style="padding-left:100px; padding-top:0px;">
		<div id="box2" class="box" valign="center">
			<h2 style="font-size:15px;"><br>Your current health status:<h2><p> <?php if ($anxiety_total > 14){$anxiety = 1;echo "You might be at risk for anxiety. Click here to see some steps you can take! ";} if ($depression_total > 18){ $depression = 1; echo "You might be at risk for depression. Click here to see some steps you can take! ";} if ($ptsd_total > 2){$ptsd = 1; echo "You might be at risk for PTSD. Click here to see some steps you can take! ";}?> <br>&nbsp;</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-10 col-md-5" style="padding-left:60px; padding-top:0px;">
		<div id="box3"class="box">
			<h2 style="font-size:15px;"><br>Video Chat<h2><p>There are 12 psychologists online.<br>&nbsp;</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-10 col-md-6" style="padding-left:100px; padding-top:0px;">
		<div id="box4" class="box" valign="center">
			<h2 style="font-size:15px;"><br>SMS Log<h2><p>View your recent conversations with Dr. John Doe<br>&nbsp;</p>
		</div>
	</div>
</div>



<!--Main Bodies-->
<div class="content" id="blog">
	<h1>Blog</h1>
</div>
<div class="content" id="health_status"><center>
<h1>Recommended Actions to take Based on Your Responses</h1>
<?php
if ($ptsd == 1)
{
	echo "<br>PTSD: Many forms of psychotherapy have been found to be efficacious for trauma-related problems such as PTSD. Basic counseling practices common to many treatments for PTSD include education about the condition, and provision of safety and support.[17][95]<br><br>";
}
if($anxiety== 1){
	echo "<br>Anxiety: Cognitive behavioral therapy (CBT) is effective for anxiety disorders.[72][73][74] CBT appears to be equally effective when carried out via the internet.[75] While evidence for mental health apps is promising it is preliminary.[76]<br><br>";
}
if($depression== 1){
	echo "<br>Depression: Behavioral interventions, such as interpersonal therapy and cognitive-behavioral therapy, are effective at preventing new onset depression.[155][157][158] Because such interventions appear to be most effective when delivered to individuals or small groups, it has been suggested that they may be able to reach their large target audience most efficiently through the Internet.[159]<br><br>";
}
?>
</center>
</div>
<div class="content" id="video">
	<h2>Facetime Session</h2>
</div>
<div class="content" id="sms">
	<h1>SMS Log</h1>
</div>


<script type="text/javascript">

window.addEventListener("scroll", scrollEventHandler, false);
</script>
<!-- minifed jQuery -->
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>  
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>