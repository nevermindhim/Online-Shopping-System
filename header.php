<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type= "text/css" href="css/headerlayout.css">
<link rel="stylesheet" type= "text/css" href="css/footerlayout.css">
<link rel="stylesheet" type= "text/css" href="css/bodylayout.css">

<title>shopping </title>
</head>
<body>
<header>
<!-- DropDown for account -->								
 <div class="dropdown">
  <button class="dropbtn">My Account</button>
  <div class="dropdown-content">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<!--End DropDown for account -->	



 <div class="logo"><a href="index.php" > <img src="img/logo.jpg"   height="60px" width="60px" > SHOPMe</a></div>
<div style="float: right;margin-right: 50px;">
<a href="#"><img src="img/wishlist.png" width="30px" height="30px"></a>
<a href="#"><img src="img/cart.png" width="30px" height="30px"></a>

</div>				
	<span style="float: left;color: white">Welcome <?php echo $_SESSION['username']; ?>!</span>
					<!-- SEARCH BAR -->
						
	<div class="header-search">
		<form action="brandquery.php" method="post" target="body_iframe">
			<select name="brand_slt">
                <option value="$">Select Brands</option>
                <option value="1">Samsung</option>
                <option value="2">JBL</option>
                <option value="3">Levis</option>
                <option value="4">Nike</option>
                <option value="5">Hawkings</option>
                <option value="6">Cadbury</option>
                <option value="7">Loius Vuitton</option>
                <option value="8">LG</option>
                <option value="9">DELL</option>
                <option value="10">Gucci</option>
                <option value="11">Funny Tools</option>
                <option value="12">Yamaha</option>
                <option value="13">Casio</option>
                <option value="14">Bangemuda</option>
                <option value="15">Chetan Bhagat</option>
            </select>
			<input class="input" id="search" name="srchid" type="text" placeholder="Search here">
			<button type="submit" id="search_btn" class="search-btn">Search</button>
		</form>
	</div>
						<!-- END SEARCH BAR -->
	

<nav class="shppg">	
<table class="navig" align="center">
<tr>
<td align="center"> <a class="one" href="electronics.php" target="body_iframe"> ELECTRONICS </a>
 </td>
 
 <td>  <a class="one" href="books.php" target="body_iframe"> BOOKS</a>
 </td>
 <td>  <a class="one" href="clothes.php" target="body_iframe">CLOTHS  </a>
 </td>
 <td>  <a class="one" href="shoes.php" target="body_iframe"> SHOES </a>
 </td>
 <td> <a class="one" href="home_appliances.php" target="body_iframe"> HOME APPLIENCE </a>
  </td>
 <td>  <a class="one" href="musical.php" target="body_iframe"> MUSICAL INSTRUMENT </a>
 </td></tr>
 </table>			
 <table class="navig" align="center">
<tr>
<td align="center"> <a class="one" href="womens.php" target="body_iframe"> WOMEN ACCESSORIES </a>
 </td>
 
 <td>  <a class="one" href="mens.php" target="body_iframe"> MEN ACCESSORIES</a>
 </td>
 <td>  <a class="one" href="kids.php" target="body_iframe"> KIDS </a>
 </td>
 <td>  <a class="one" href="foods.php" target="body_iframe"> FOODS </a>
 </td>
 <td>  <a class="one" href="nepali.php" target="body_iframe"> NEPALI CULTURAL ATTIRE </a>
 </td>
 </tr>
 </table>							<!-- Navigation bar -->
</nav>

</header>
