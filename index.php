<DOCTYPE!>
<html>
<head>
<title> Blood Management System </title>
<link rel="stylesheet" type="text/css" href="index.css">
<style>
/*body  {
  background-image:  url("www.png");
  background-repeat: no-repeat;
background-size: 100% 100%;
width: auto;



}*/


body {
  font-family: Arial, Helvetica, sans-serif;
    background-color: #f5f5f5b6; 
    display: flex;
    flex-direction: column;
    justify-content: center;
    
  

}
html { 
  background: url(uu.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

table th, td {
   padding: 8px;
}
 
</style>
</head>
<body>

<!-- <ul class="topnav">
  <li><a class="active" href="#">Home</a></li>
  <li><a href="Login.php">Login Page</a></li>
  <li><a href="reg.php">Signup Page</a></li>
  <li class="right" ><a href="#">About</a></li>
</ul> -->

<?php include("navbar.php"); ?>

<h1>Blood Management System</h1>




<table >
	<table style="width:100%; border-collapse: collapse;">
  <tr style="color: white;   ">
  	<th>SR.NO.</th>
    <th>Blood Type</th>
    <th>Hospital Name</th> 
    <th>Request Sample</th>
  </tr>
<?php 
$db = mysqli_connect('localhost', 'root', '', 'registrations');
  $query ="SELECT * FROM bloodsamples";
$res = mysqli_query($db ,$query);
$count=1;
while ($row=mysqli_fetch_array($res)) { ?>
  <tr>
  <td style="text-align:center;">
  <?php echo $count; ?>
  </td>
   <td style="text-align:center;">
  <?php echo $row['blood']; ?>
  </td> 
  <td style="text-align:center;">
  <?php echo $row['hospitalname']; ?>
  </td> 
  <td style="text-align:center;"><?php    if(!isset($_SESSION['allowClick'])){
  echo '<a href=server.php>Request</a>';
}
?>
</td>
  </tr>
<?php
  $count++;
}
?>
</table>

</body>





</html>