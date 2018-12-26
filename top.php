<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:main1.html');
  }
?>
<html>
<head>
<style>
a {
  background-color: black;
  border: none;
  color: #FF4040;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

a:hover{
  background-color: white;
  color: white;
}
</style>
	<title>Welcome to Farmer's Portal</title>
</head>
<body style="margin-left: 20px;margin-right: 20px" bgcolor="#121212">
<div>
<img src="capture2.png" height="100px" width="500px">
</div>
<h3 style="color:tomato;text-align:left;margin-left:1200px;">Welcome <?php echo $_SESSION['user']?></h3>
<div>
<table border="0" bgcolor="black" style="margin-left:10px;margin-right:40px;" width="97%" align="center">
<tr>
	<td><br><br><br>
	</td>
<td> <a class="home" href="bottom.php" target="f2"><b style="color:#FF4040">Home</b> </a></td>
<td> <a href="measure.php" target="f2"><b style="color:#FF4040">Validate Minerals</b></a> </td>
<td> <a href="useasonalcrops.php" target="f2"><b style="color:#FF4040">Search Seasonal Crops</b></a> </td>
<td> <a href="contactus.php" target="f2"><b style="color:#FF4040">Contact Us</b></a> </td>
<td> <a href="logout.php" target="_blank"><b style="color:#FF4040">Logout</b></a>  </td>
</tr>
</table>
</div>
</body>
</html>	