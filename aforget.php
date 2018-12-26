<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:main1.html');
  }
?>
<html>
<body bgcolor="orange">
<form  name="f1" action="aforget.php" method="POST" >
<table align="center">
<tr>
<td align="center">
USERNAME&nbsp;&nbsp;<input type="text" name="uname" maxlength="25" required><br><br>
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
if( isset($_POST['login'])) {
		$conn=mysqli_connect("localhost", "root", "", "mydb37");
		$user=$_POST['uname'];
		$pass=$_POST['pwd1'];
		$query = mysqli_query($conn,"select * from admin where username='$user'"); 
        if (mysqli_num_rows ($query)==1) 
         {
          $query3 = mysqli_query($conn,"update admin set password='$pass' where username='$user'"); 
          echo 'Password Changed successfully';
		  }
         else
	     {
          echo 'Error';
		 }  
}
