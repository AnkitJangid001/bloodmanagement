<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  display: flex;
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
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
form{
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-top: 60px;
  align-items: center;
}
</style>
</head>
<body>

<?php include("navbar.php"); ?>
<form action="server.php" method="POST">
  <div class="container">
    <h1>Login </h1>
    <p>Please fill in this form to sign in your account.</p>
    <hr>
<label>Username</label>
      <input type="text" name="username" >

   <label>Password</label>
      <input type="password" name="password">
    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="login_user" class="registerbtn">SignIn</button>
  </div>
  <p>
      Not yet a member? <a href="reg.php">Sign up</a>
    </p>
</form>

</body>
</html>
