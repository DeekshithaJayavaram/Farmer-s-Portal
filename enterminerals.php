
<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:main1.html');
  }
?><html>
<head>
<title>Enterminerals</title>
</head>
<body bgcolor="orange" text="black">
<fieldset>
<legend align="center">Enter minerals</legend>
<form align="center" name="f1" method="POST" action="enterminerals.php">
<table align="center">
<tr>
<td>Place</td>
<td><input type="text" name="place" size="20" required="true"></td>
<tr>
<td>Nitrogen</td>
<td><input type="text" name="nitrogen" size="20" required="true"></td>
</tr>
<tr>
<td>Phosphorous</td>
<td><input type="text" name="phosphorous" size="20" required="true"></td>
</tr>
<tr>
<td>Potassium</td>
<td><input type="text" name="potassium" size="20" required="true"></td>
</tr>
<tr>
<td>Magnesium</td>
<td><input type="text" name="magnesium" size="20" required="true"></td>
</tr>
<tr>
<td>Sulfur</td>
<td><input type="text" name="sulfur" size="20" required="true"></td>
</tr>
<tr>
<td>Crop</td>
<td><input type="text" name="crop" size="20" required="true"></td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT">
<input type="reset" name="reset" value="RESET">
</form>
</fieldset>
</body>
</html>
<?php
  if(isset($_POST['submit'])){ 
   $place=$_POST['place'];
   $nitrogen=$_POST['nitrogen'];
   $phosphorous=$_POST['phosphorous'];
   $potassium=$_POST['potassium'];
   $magnesium=$_POST['magnesium'];
   $sulfur=$_POST['sulfur'];
   $crop=$_POST['crop'];
   $connect=new mysqli("localhost","root","","mydb37");
   $sql="insert into adminmin(place,nitrogen,phosphorous,potassium,magnesium,sulfur,crop) values ('$place','$nitrogen','$phosphorous','$potassium','$magnesium','$sulfur','$crop')";
   if($connect->query($sql)==true)
   {
      echo "Successfully inserted";
   }
   else
   {
       echo "Error:".$sql."<br>".$connect->error;
   }
  }
?>