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
   settype($id, "integer");
   $firstname = $_POST['FirstName'];
   $lastname = $_POST['LastName'];
   $gender = $_POST['Gender'];
   $race = $_POST['RaceEthnicity'];
   $age = $_POST['Age'];
   $income = $_POST['Income'];
   $zipcode = $_POST['Zipcode'];
   $state = $_POST['State'];
   $past_diagnosed = $_POST['CurrentMentalIllness'];
   $past_conditions = $_POST['IfYes'];
   $heart_disease = $_POST['HeartDisease'];
   $diabetes = $_POST['Diabetes'];
   $alzheimers = $_POST['AlzheimersDimentiaSpectrum'];
   $cancer = $_POST['Cancer'];
   $copd = $_POST ['COPD'];
   $phone_number = $_POST['PhoneNumber'];
   $sql2 = "INSERT INTO userinfo (id, firstname, lastname, gender, race, age, income, zipcode, state, past_diagnosed, past_conditions, heart_disease, diabetes, alzheimers, cancer, copd, phone_number) VALUES ('$id', '$firstname', '$lastname', '$gender', '$race', '$age', '$income', '$zipcode', '$state', '$past_diagnosed', '$past_conditions', '$heart_disease', '$diabetes', '$alzheimers', '$cancer', '$copd', '$phone_number')";
   $query = mysqli_query($db,$sql2); 
   $took_survey = "Yes";
   $sql4 = "UPDATE users SET took_survey='$took_survey' WHERE id='$id'";
   mysqli_query($db,$sql4);
header("Location: survey2.php");
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
    <th>User Information</th>
    <th>Answer</th>
  </tr>
<form action="" method="POST">
<tr><td>
<p>First Name</p>
</td>
<td>
 <textarea name="FirstName" rows="1" cols="30"></textarea>
 </td></tr>
 <tr><td>
<p>Last Name</p>
</td>
<td>
 <textarea name="LastName" rows="1" cols="30"></textarea>
 </td></tr>
<tr>
<td>
  <p>1. Gender</p>
</td>
<td>
<select name="Gender">

    <option value="0"></option>
    <option value="0">Male</option>
    <option value="0">Female</option>
  </select>
  <br><br>
  </tr>
<tr>
<td>
   <p>2. Race/Ethnicity</p>
</td>
<td>
    <textarea name="RaceEthnicity" rows="1" cols="30"></textarea>
  </select>
  <br><br>
</tr>
</td>
<tr>
    <td>
   <p>3. Age</p>
   <td>
<select name="Age">
   <option value="0"></option>
  <option value="0">1</option>
    <option value="0">2</option>
    <option value="0">3</option>
    <option value="0">4</option>
     <option value="0">5</option>
    <option value="0">6</option>
    <option value="0">7</option>
    <option value="0">8</option>
     <option value="0">9</option>
    <option value="0">10</option>
    <option value="0">11</option>
    <option value="0">12</option>
    <option value="0">13</option>
    <option value="0">14</option>
     <option value="0">15</option>
    <option value="0">16</option>
    <option value="0">17</option>
    <option value="0">18</option>
     <option value="0">19</option>
    <option value="0">20</option>
    <option value="0">21</option>
    <option value="0">22</option>
    <option value="0">23</option>
    <option value="0">24</option>
    <option value="0">25</option>
    <option value="0">26</option>
    <option value="0">27</option>
     <option value="0">28</option>
    <option value="0">29</option>
    <option value="0">30</option>
    <option value="0">31</option>
     <option value="0">32</option>
    <option value="0">33</option>
    <option value="0">34</option>
    <option value="0">35</option>
    <option value="0">36</option>
    <option value="0">37</option>
    <option value="0">38</option>
    <option value="0">39</option>
     <option value="0">40</option>
    <option value="0">41</option>
    <option value="0">42</option>
    <option value="0">43</option>
     <option value="0">44</option>
    <option value="0">45</option>
    <option value="0">45</option>
    <option value="0">46</option>
    <option value="0">47</option>
    <option value="0">48</option>
    <option value="0">49</option>
    <option value="0">50</option>
     <option value="0">51</option>
    <option value="0">52</option>
    <option value="0">53</option>
    <option value="0">54</option>
     <option value="0">55</option>
    <option value="0">56</option>
    <option value="0">57</option>
    <option value="0">58</option>
    <option value="0">59</option>
    <option value="0">60</option>
    <option value="0">61</option>
    <option value="0">62</option>
     <option value="0">63</option>
    <option value="0">64</option>
    <option value="0">65</option>
    <option value="0">66</option>
     <option value="0">67</option>
    <option value="0">68</option>
    <option value="0">69</option>
    <option value="0">70</option>
    <option value="0">71</option>
    <option value="0">72</option>
    <option value="0">73</option>
    <option value="0">74</option>
     <option value="0">75</option>
    <option value="0">76</option>
    <option value="0">77</option>
    <option value="0">78</option>
     <option value="0">79</option>
    <option value="0">80</option>
    <option value="0">81</option>
     <option value="0">82</option>
    <option value="0">83</option>
    <option value="0">84</option>
    <option value="0">85</option>
    <option value="0">86</option>
    <option value="0">87</option>
     <option value="0">88</option>
    <option value="0">89</option>
    <option value="0">90</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
  <p>4. Income</p>
</td>
<td>
  <select name="Income">
    <option value="0">0-$15,000</option>
    <option value="0">$15,001-$30,000</option>
    <option value="0">$30,001-$55,000</option>
    <option value="0">$55,001-$100,000</option>
     <option value="0">$100,001+</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
<p>5. Zipcode</p>
</td><td>
 <textarea name="Zipcode" rows="1" cols="30"></textarea>
  <br><br>
  </tr></td>
  <tr><td>
  <h6>6. State</h6>
</td><td>
 <textarea name="State" rows="1" cols="30"></textarea>
  <br><br>
</tr></td>
<tr><td>
   <h7>7. Are you currently, or have you ever been, diagnosed with a mental health condition by a professional?</h7>
</td><td>
  <select name="CurrentMentalIllness">
     <option value="0"></option>
    <option value="0">No</option>
    <option value="0">Yes</option>
  </select>
  <br><br>
</tr></td>
<tr><td>
   <h8>8. If you answered yes to question 7, please state your current condition.</h8>
</td><td>
  <textarea name="IfYes" rows="1" cols="30"></textarea>
  <br><br>
</td></tr>
<tr><td colspan="2">
  <p>9. Do you have any of the following health conditions?</p>
  </td>
  <tr><td valing="top">
   <h10>Heart Disease</h10></td>
<td><select name="HeartDisease">
   <option value="0"></option>
    <option value="0">No</option>
    <option value="0">Yes</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
  <h11>Diabetes</h11>
</td><td>
  <select name="Diabetes">
    <option value="0"></option>
    <option value="0">No</option>
    <option value="0">Yes</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
<h12>Alzheimers/Dimentia Spectrum</h12>
</td><td>
  <select name="AlzheimersDimentiaSpectrum">
    <option value="0"></option>
    <option value="0">No</option>
    <option value="0">Yes</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
<h13>Cancer</h13>
</td><td>
  <select name="Cancer">
 <option value="0"></option>
    <option value="0">No</option>
    <option value="0">Yes</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
<h14>COPD</h14>
</td><td>
  <select name="COPD">
 <option value="0"></option>
    <option value="0">No</option>
    <option value="0">Yes</option>
  </select>
  <br><br>
</td></tr>
<tr><td>
  <h14>Phone Number</h14>
</td><td>
  <textarea name="PhoneNumber" rows="1" cols="30"></textarea>
  <br><br>
</td></tr>
<tr><td>
  <input style="position: absolute; right: 15px; width: 100px; height:30px" type="submit" name="submit" value="Next"><br>
</td></tr>
</table>
</div>
</form>

</body>
</html>