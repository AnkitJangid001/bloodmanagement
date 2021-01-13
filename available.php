<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

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


* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}



/* Set a grey background color and center the text of the "sign in" section */
table  td {
  border-color: white;
  
}
table th, td {
   padding: 8px;
}

</style>
</head>
<body>

<?php include("navbar1.php"); 


?>
<br>
<div style="display: flex; justify-content: space-between; ">
  <a href="addblood.php" style="text-align: center; width:50%; border-right: 2px solid black;"   onMouseOver="this.style.color='#0F0'"
   onMouseOut="this.style.color='#000'" >Add A Blood Sample</a>
  <a href="Available.php" style="text-align: center; width:50%; "   onMouseOver="this.style.color='#0F0'"
   onMouseOut="this.style.color='#000'" >Available Blood Sample</a>
</div>
<center>
  <div style="padding: 40px;display: flex;
    flex-direction: column;
    justify-content: center; ">
<table style="color: white; border-collapse: collapse;">
<tr style="text-align: center;">
  <td>
    Sr. No.
  </td>
   <td>
    Blood Group
  </td>
  </tr>



<?php
$username1=$_SESSION['username'];


$query = "SELECT * FROM users WHERE username='$username1'";
    $results = mysqli_query($db, $query);
   //echo ("<script>  console.log($results[0]);</script>");
    if (mysqli_num_rows($results) == 1) {
      $row =mysqli_fetch_array($results);
      $id = $row['id'];

}
$query ="SELECT * FROM bloodsamples WHERE hospitalid='$id'";
$res = mysqli_query($db ,$query);
$count=1;
while ($row=mysqli_fetch_array($res)) { ?>
  <tr style="text-align: center;">
  <td >
  <?php echo $count; ?>
  </td>
   <td>
  <?php echo $row['blood']; ?>
  </td> 
  </tr>
<?php
  $count++;
}
?>
</table>
</div>
</center>
</body>
</html>
