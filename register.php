<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
//include 'header.php';
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
	$firstname = mysqli_real_escape_string($con,$firstname); 
	$lastname = stripslashes($_REQUEST['lastname']);
	$lastname = mysqli_real_escape_string($con,$lastname);
	$mint = stripslashes($_REQUEST['mint']);
	$mint = mysqli_real_escape_string($con,$mint);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$phn = stripslashes($_REQUEST['phn']);
	$phn = mysqli_real_escape_string($con,$phn);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
        //$query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $query="INSERT INTO `customer` (`cust_id`, `fname`, `mint`, `lname`, `username`, `email`, `mobileno`, `password`) VALUES (NULL, '$firstname', '$mint', '$lastname', '$username', '$email', '$phn', '$password');";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form' style='margin-top: 250px'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form" style="margin-top: 20px">
<h3>Registration Form</h3>
<form name="registration" action="" method="post">
<input type="text" name="firstname" placeholder="First Name" required />
<input type="text" name="mint" placeholder="Middle Name"  />
<input type="text" name="lastname" placeholder="Last Name" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" maxlength="10" name="phn" placeholder="10 digit Mobile Number" required/>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>