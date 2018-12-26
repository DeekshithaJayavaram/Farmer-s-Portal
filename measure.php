<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:main1.html');
  }
?>
<html>
<head>
<title>minerals measurement</title>
</head>
<body bgcolor="orange" text="black">
<fieldset>
<legend align="center">MINERALS MEASUREMENT</legend>
<form align="center" name="f1" method="POST" action="measure.php">
<table align="center">
<tr>
<td>Place</td>
<td><input type="text" name="place" size="20" required>
</tr>
<tr>
<td>Nitrogen</td>
<td><input type="text" name="nitrogen" size="20" required></td>
</tr>
<tr>
<td>Phosphorous</td>
<td><input type="text" name="phosphorous" size="20" required></td>
</tr>
<tr>
<td>Potassium</td>
<td><input type="text" name="potassium" size="20" required></td>
</tr>
<tr>
<td>Magnesium</td>
<td><input type="text" name="magnesium" size="20" required></td>
</tr>
<tr>
<td>Sulfur</td>
<td><input type="text" name="sulfur" size="20" required></td>
</tr>
<tr>
<td>Crop</td>
<td><input type="text" name="crop" size="20" required></td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT">
<input type="reset" name="reset" value="RESET">
</form>
</fieldset>
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
   $sql="insert into minerals(nitrogen,phosphorous,potassium,magnesium,sulfur,place,crop) values ('$nitrogen','$phosphorous','$potassium','$magnesium','$sulfur','$place','$crop')";
   if($connect->query($sql)==true)
   {
   }
   else
   {
       echo "Error:".$sql."<br>".$connect->error;
   }
   $connect->close();
   $remark1=0;
   $remark2=0;
   $remark3=0;
   $remark4=0;
   $remark5=0;
   $status1=0;
   $status2=0;
   $status3=0;
   $status4=0;
   $status5=0;
   $neg=0;
   $pos=0;
   $conn=new mysqli("localhost","root","","mydb37");
   $sql1="select *from adminmin where place='$place' and crop='$crop'";
   $ans=$conn->query($sql1);
   if($ans->num_rows>=1)
   {
	   
	   while($row=$ans->fetch_assoc())
	   {
	   
			   if($nitrogen>=$row['nitrogen'])
			   {
				   $remark1="<font color='green'>$nitrogen</font>";
				   $status1=1;
				   $pos=$pos+1;
			   }
			   else
			   {
				   $remark1="<font color='red'>$nitrogen</font>";
				   $status1=0;
				   $neg=$neg+1;
			   }
			   
			   if($phosphorous>=$row['phosphorous'])
			   {
				   $remark2="<font color='green'>$phosphorous</font>";
				   $status2=1;
				   $pos=$pos+1;
			   }
			   else
			   {
				   $remark2="<font color='red'>$phosphorous</font>";
				   $status2=0;
				   $neg=$neg+1;
			   }
			   
			   if($potassium>=$row['potassium'])
			   {
				   $remark3="<font color='green'>$potassium</font>";
				   $status3=1;
				   $pos=$pos+1;
			   }
			   else
			   {
				   $remark3="<font color='red'>$potassium</font>";
				   $status3=0;
				   $neg=$neg+1;
			   }
			   if($magnesium>=$row['magnesium'])
			   {
				   $remark4="<font color='green'>$magnesium</font>";
				   $status4=1;
				   $pos=$pos+1;
			   }
			   else
			   {
				   $remark4="<font color='red'>$magnesium</font>";
			   }
			   if($sulfur>=$row['sulfur'])
			   {
				   $remark5="<font color='green'>$sulfur</font>";
				   $status5=1;
				   $pos=$pos+1;
			   }
			   else
			   {
				   $remark5="<font color='red'>$sulfur</font>";
				   $status5=0;
				   $neg=$neg+1;
			   }
	   }
			   if($pos==0 || $neg==5 || $neg>$pos)
			   {
				   echo "Place is not suitable for crop ".$crop."<br>";
				   echo "Choose another crop <br>";
			   }
			   else
			   {
				   echo "Place is suitable for crop ".$crop."<br>";
			   }
   }	
   else{
    echo "enter valid credentials";
   }	
   echo "<html><body><center>";
   echo "<table border=1 width=100%>";
   echo "<tr><th>MINERAL</th><th>QUANTITY OF MINERAL</th></tr>";
   echo "<tr><td>NITROGEN</td><td>". $remark1."</td></tr>";
   echo " <tr><td>PHOSPHOROUS</td><td>".$remark2."</td></tr>";
   echo "<tr><td>POTASSIUM</td><td>".$remark3."</td></tr>";
   echo "<tr><td>MAGNESIUM</td><td>".$remark4."</td></tr>";
   echo "<tr><td>SULFUR</td><td>".$remark5."</td></tr>";
   echo "</table></center></body></html>";
			  }
?>
	