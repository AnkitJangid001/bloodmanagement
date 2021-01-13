<?php include("server.php") ?>
<?php 
  
  
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: logout.php");
  }
?>
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
  padding: 30px;
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

form{
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-top: 150px;
    align-items: center;
}
</style>
</head>
<body>

<?php include("navbar1.php"); 


?>
<br>
<div style="display: flex; justify-content: space-between; ">
  <a href="addblood.php" style="text-align: center; width:50%; border-right: 2px solid black;"   onMouseOver="this.style.color='#0F0'"
   onMouseOut="this.style.color='white'" >Add A Blood Sample</a>
  <a href="available.php" style="text-align: center; width:50%; "   onMouseOver="this.style.color='#0F0'"
   onMouseOut="this.style.color='white'" >Available Blood Sample</a>
</div>
<form action="server.php" method="POST" >

  <div class="container">
    <h1>Add Blood Sample </h1>
    
    <hr>
     <label><b>Blood Group</b></label>
     <select name="blood"> 
         <option>select</option>
         <option value="A+">A+</option> 
         <option value="B+">B+</option>
         <option value="O-">O-</option> 
        <option value="O-">O+</option>
           <option value="AB+">AB+</option>
           <option value="AB-">AB-</option>
       </select>

     <br>
    <button type="submit" name="add_blood" class="registerbtn">Add Blood</button>
  </div>
  
</form>



</body>
</html>
