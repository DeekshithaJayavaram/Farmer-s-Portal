<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:login.html');
  }
?>
<html>
<body bgcolor="darkviolet">
<form  name="f1" action="forget.php" method="POST" >
<table align="center">
<tr>
<td align="center">
USERNAME<input type="text" name="uname" maxlength="25"/><br><br>
</td>
</tr>
<tr>
<td align="center">
NEW PASSWORD<input type="password" required name="pwd"/><br><br>
</td>
</tr>
<tr>
<td align="center">
CONFIRM PASSWORD<input type="password" required name="pwd1"/><br><br>
</td>
</tr>
<tr>
<td align="center">
<button name="login" value="click">submit</button>
</td>
</tr>
</table>
</body>
</html>
<?php
session_start();
if( isset($_POST['login'])) {
		$conn=mysqli_connect("localhost", "root", "", "it");
		$user=$_POST['uname'];
		$pass=$_POST['pwd1'];
		$query = mysqli_query($conn,"select * from register where username='$user'"); 
        if (mysqli_num_rows ($query)==1) 
         {
          $query3 = mysqli_query($conn,"update register set Password='$pass' where username='$user'"); 
          echo 'Password Changed successfully';
		  }
         else
	     {
          echo 'Error';
		 }  
}
