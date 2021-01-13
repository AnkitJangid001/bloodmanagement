<DOCTYPE!>
<html>
<head>
<title> Blood Management System </title>
<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

<ul class="topnav">
  <li><a class="active" href="index.php">Home page</a></li>
  <li style="padding-left: 1250px; margin-right: 10px;"><?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: black;">Welcome <b style="color: green;"><?php echo $_SESSION['username']; ?></b></p><?php endif ?></li>
  <p> <a href="logout.php?logout='1'" style="color: white"  >logout</a> </p>
</ul>


</body>




</html>