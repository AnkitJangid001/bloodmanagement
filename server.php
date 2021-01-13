<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registrations');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $type = "hospital";

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, type) 
  			  VALUES('$username', '$email', '$password', '$type')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: addblood.php');
  }
}


// REGISTER receiver  USER
if (isset($_POST['reg_user1'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $type = "receiver";
  $blood = mysqli_real_escape_string($db, $_POST['blood']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($blood)) { array_push($errors, "Blood Group is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM regr WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO regr (username, email, password, type, blood) 
          VALUES('$username', '$email', '$password', '$type' , '$blood')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['allowClick']=true;
    $_SESSION['success'] = "You are now logged in";
    header('location: indexR.php');
  }
}






if (isset($_POST['add_blood'])) {
  // receive all input values from the form
 
  
 
  $blood = mysqli_real_escape_string($db, $_POST['blood']);
  $username1=$_SESSION['username'];


$query = "SELECT * FROM users WHERE username='$username1'";
    $results = mysqli_query($db, $query);
   //echo ("<script>  console.log($results[0]);</script>");
    if (mysqli_num_rows($results) == 1) {
      $row =mysqli_fetch_array($results);
      $id = $row['id'];

}
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
   if (empty($blood)) { array_push($errors, "Blood Group is required"); }
 
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM bloodsamples ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
    $query = "INSERT INTO bloodsamples (blood,hospitalname,hospitalid) 
          VALUES(  '$blood','$username1','$id')";
    mysqli_query($db, $query);
   
    header('location: available.php');
  }
}















// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query_1 = "SELECT * FROM regr WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $results_1 = mysqli_query($db, $query_1);
   //echo ("<script>  console.log($results[0]);</script>");
    if (mysqli_num_rows($results) == 1 || mysqli_num_rows($results_1) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = true;
      $row =mysqli_fetch_array($results);
      $type = $row['type'];
      if($type=="hospital")
      {
            header('location: addblood.php');
      }
      else {
        header('location: indexR.php');
      }
      echo "<p>sagdasfaysd fsdafasdfj dfasjfhs</p>";
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}



?>


