<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:main1.html');
  }
?>
<html>
<body bgcolor="orange" text="blue" align="center">
<h1>FOR ANY QUERIES PLEASE CONTACT US:</h1>
<h3>www.farmersportal.com</h3>
<h3>Phone no:9876543210</h3>
</html>