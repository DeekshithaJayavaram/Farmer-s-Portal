<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:main1.html');
  }
?>
<html>
<head>
<title>Seasonal Crops</title>
</head>
<body bgcolor="orange" align="center">
<form name="form1" method="POST" action="useasonalcrops.php">
<table align="center">
<tr>
<td>Place</td>
<td><input type="text" name="place" size="30" required></td>
</tr>
<tr>
<td>Season</td>
<td><input type="text" name="season" size="30" required></td>
</tr>
</table>
<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">
</form>
</body>
</html>
<?php
  if(isset($_POST['submit'])){
  $place=$_POST['place'];
  $season=$_POST['season'];  
  $conn=new mysqli("localhost","root","","mydb37");
   $sql1="select *from season where place='$place' and season='$season'";
   $ans=$conn->query($sql1);
   if($ans->num_rows>=1)
   {
	    echo "Suitable crops are:<br>";
	   while($row=$ans->fetch_assoc())
	   {
		  
		   echo $row['crop']."<br>";
	   }
   }
   else
   {
	   echo "No rows inserted";
   }
  }
?>