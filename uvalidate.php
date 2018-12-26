
<html>
<head>
<style>
body{
	  font-style:italic;
	  color:blue;
  }
	  
  </style>
  </head>
<body bgcolor="orange" align="center" color="blue">
<form  align="center" name="f1" action="uvalidate.php" method="POST">
<marquee><h2>Welcome to Farmer's Portal</h2></marquee>
<h2>USER LOGIN</h2>
<div  style="margin-left:400px;border:px solid black;width:500px;height:500px;">
<table  align="center">
<tr>
<td align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Capture.png"  height="290" width="490" alt="image not found"><br><br>
</td>
</tr>
<tr>
<td align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USERNAME<input type="text" required name="uname" maxlength="25"/><br><br>
</td>
</tr>
<tr>
<td align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD<input type="password" required name="pwd"/><br><br>
</td>
</tr>
<tr>
<td align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="login" value="click">LOGIN</button>
</td>
</tr>
<tr><td align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="uforget.php" ><h3>forgotpassword?</h3></a>
</td></tr>
</table>
</div>
</form>
</body>
</html>
<?php
session_start();
if( isset($_POST['login'])) {
		$conn=mysqli_connect("localhost","root","","mydb37");
		$user=$_POST['uname'];
		$pass=$_POST['pwd'];
		$res=mysqli_query( $conn, "SELECT * FROM farmer WHERE user='$user' AND pass='$pass' ");
		$row = mysqli_fetch_assoc($res);
		if(!$row) {
			echo "<h1>Enter valid credentials</h1>";
		}	
		else {
	        session_start();
	        $_SESSION['user']=$user;
			header('location: home.php');
		}
} 
?>