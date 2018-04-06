<?php
session_start();

// initializing some variables
$username = "";
$email    = "";
$errors = array(); 

// CONNECTING TO DATABASE
$db = mysqli_connect('localhost', 'iumw', 'Webtechiumw123', 'iumw');

// CHECKING CONNECTION
if($db === false){
    die("1 - ERROR: Could not connect. " . mysqli_connect_error());
}

// CHECKING IF THE TABLE EXIST
$table_check = "SELECT * FROM `users`";
if($db->query($table_check) == FALSE) {
	echo  '<center><font color="red">Table \'iumw.users\' doesn\'t exist. >><a href="back-end/install.php"><font color="black">click here</font></a><< to create the table, then come back to continue</font></center>';
}
// REGISTER USER
	if (isset($_POST['reg_user'])) {
	  // receive all input values from the form
	  $username = mysqli_real_escape_string($db, $_POST['username']);
	  $email = mysqli_real_escape_string($db, $_POST['email']);
	  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	  // form validation: ensure that the form is correctly filled ...
	  // by adding (array_push()) corresponding error unto $errors array
	  if (empty($username)) { array_push($errors, "Username is required"); }
	  if (empty($email)) { array_push($errors, "Email is required"); }
	  if (empty($password_1)) { array_push($errors, "Password is required"); }
	  if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	  }

	  // checking if the user exists
	  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	  $result = mysqli_query($db, $user_check_query);
	  $user = mysqli_fetch_assoc($result);
	  
	  // if user exists
	  if ($user) { 
		if ($user['username'] === $username) {
		  array_push($errors, "Username already exists");
		}

		if ($user['email'] === $email) {
		  array_push($errors, "email already exists");
		}
	  }

	  // if user does not exist
	  if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password

		$query = "INSERT INTO users (username, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
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
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
		  $_SESSION['username'] = $username;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	  }
	}
?>