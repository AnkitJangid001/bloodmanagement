<DOCTYPE!>
<html>
<head>
<title> Blood Management System </title>
<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>

  <?php 

    if(!isset($_SESSION['success']))
    {
      echo "<li><a href='login.php'>Login Page</a></li>
            <li><a href='reg.php'>Signup Page</a></li>";
    }

  ?>
  
</ul>


</body>





</html>