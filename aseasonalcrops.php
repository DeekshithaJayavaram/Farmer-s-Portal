<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:main1.html');
  }
?>
<html>
<head>
<title>Seasonal Crops</title>
</head>
<body bgcolor="orange" align="center">
<form name="form1" method="POST" action="aseasonalcrops.php">
<table align="center">
<tr>
<td>Place</td>
<td><input type="text" name="place" size="30" required></td>
</tr>
<tr>
<td>Season</td>
<td><input type="text" name="season" size="30" required></td>
</tr>
<tr>
<td>Crop</td>
<td><input type="text" name="crop" size="30"required></td>
</tr>
</table>
<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">
</form>
</body>
</html>
<?php
   if(isset($_POST['submit']))
   {
	   $place=$_POST['place'];
	   $season=$_POST['season'];
	   $crop=$_POST['crop'];
	   $conn=new mysqli("localhost","root","","mydb37");
	   $sql="insert into season(place,season,crop) values ('$place','$season','$crop')";
	   if($conn->query($sql)==true)
	   {
		   echo "Inserted successfully";
	   }
	   else
	   {
		   echo "Error".$sql."<br>".$conn->error;
	   }
	   $conn->close();
   }
?>
	   