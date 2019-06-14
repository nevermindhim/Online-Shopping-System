<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type= "text/css" href="css/headerlayout.css">
<link rel="stylesheet" type= "text/css" href="css/footerlayout.css">
<link rel="stylesheet" type= "text/css" href="css/bodylayout.css">
</head>


<body>
	<header>
		<div class="logo"><a href="index.php" > <img src="img/logo.jpg"   height="60px" width="60px" > SHOPMe</a></div>
	</header>
	
<?php
//include 'header.php';
require('connect.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$adm="admin";
	$pass="admin";
	        $query = "SELECT cust_id,username,password FROM customer WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
        	if($username=="admin"&&$password="admin")
            {
            	header("Location: adminupdate.php");
            }
        	else{
	    $_SESSION['username'] = $username;
	     while($row = mysqli_fetch_array($result))
            {
                $cust_id=$row['cust_id'];
                $_SESSION['cust_id'] = $cust_id;
            }
            
            // Redirect user to index.php
	    	header("Location: index.php");
	    }
         }else{
	echo "<div class='form' style='margin-top: 150px'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form" style="margin-top: 150px"> 
	
<h1>Please Log-In</h1>
<table> 

<form action="" method="post" name="login">
	<tr> <td><input type="text" name="username" placeholder="Username" required /> </td><td rowspan="3"> <img src="img/logo12.jpg" height="300px" width="300px" style="padding-left: 35px"></td></tr>
	<tr><td><input type="password" name="password" placeholder="Password" required /> </td></tr>

<tr> <td><input name="submit" type="submit" value="Login" /></td></tr>
<tr><td></td></tr>
</form>
</table>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
<?php } ?>

</body>
</html>