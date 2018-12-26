<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:mani1.html');
  }
  $conn=new mysqli("localhost","root","","mydb37");
   $sql1="select *from farmer";
   $ans=$conn->query($sql1);
   if($ans->num_rows>=1)
   {
	    echo "<html><body bgcolor=orange><center>";
        echo "<table border=1 width=100%>";
		echo "<tr><th>Name</th><th>Username</th><th>Password</th><th>Aadhar</th><th>Site</th></tr>";
	   while($row=$ans->fetch_assoc())
	   {
	      
		   echo "<tr><td>".$row['name']."</td><td>".$row['user']."</td><td>".$row['pass']."</td><td>".$row['aadhar']."</td><td>".$row['site']."</td><tr>";
	   }
	   echo "</table></center></body></html>";
   }
   else
   {
	   echo "No user registered";
   }
 ?>