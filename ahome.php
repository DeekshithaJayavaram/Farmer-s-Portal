<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:main1.html');
  }
?>
<html>
<head>
<frameset border="3" rows="30%,*">
<frame name="f1" src="atop.php">
<frame name="f2" src="abottom.php">
</head>
</html>