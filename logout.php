<?php 

  

 //to ensure you are using same session

session_destroy();
$_SESSION['success']=false;
$_SESSION['allowClick']=false; //destroy the session
header("location:index.php"); //to redirect back to "index.php" after logging out
exit();
?>