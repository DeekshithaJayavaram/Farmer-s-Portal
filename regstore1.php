<html>
<body align="center" bgcolor="orange">
				<form id="form" method="POST" action="regstore1.php"> 
			<fieldset>
				<legend align="center">REGISTRATION PAGE</legend>
					<p class="inputText">FIRST AND LAST NAME</p>
					<input type="text" name="name" required="true" placeholder="Enter your name"/><br>

					<p class="inputText">USER ID</p>
					<input type="text" name="user" required="true" placeholder="Enter your user id" /><br>
				
					<p class="inputText">PASSWORD</p>
					<input  type="password" name="pass" required="true" placeholder="Enter your password" />
						<br>
					<p class="inputText">CONFIRM PASSWORD</p>
					<input  type="password" required="true" name="cpass" placeholder="Confirm your password" /><br>

					<p class="inputText">AADHAR NUMBER</p>
					<input  type="NUMBER" required="true" name="aadhar" placeholder="Enter your aadhar number" />
					<br>
					<p class="inputText">SITE NUMBER</p>
					<input  type="text" name="site" required="true" placeholder="Enter your Site Number" /><br>
					<p class="inputText">SITE ADDRESS</p>
					<input  type="text" required="true" placeholder="Enter your Site Address" />
					<br>
				</form> 
				  <input type="submit" name="submit" value="submit" required>
			</fieldset>
			<a href="main1.html">HOME</a>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
	$name=$_POST['name'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$aadhar=$_POST['aadhar'];
	$site=$_POST['site'];
    $connect=new mysqli("localhost","root","","mydb37");
	echo "connected";
	$sql="insert into farmer(name,user,pass,cpass,aadhar,site) values ('$name','$user','$pass','$cpass','$aadhar','$site')";
	if($connect->query($sql)==true)
	{
		echo "Details entered into the database successfully";
	}
	else
	{
		echo "Error:" .$sql. "<br>".$connect->error;
	}
	$connect->close();
	}
?>
