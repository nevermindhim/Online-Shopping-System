<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
    <link rel="stylesheet" type="text/css" href="css/showall.css">
    <link rel="stylesheet" type= "text/css" href="css/headerlayout.css">
    
</head>
<body>
    <header>
        
        <div class="logo"><a href="index.php" > <img src="img/logo.jpg"   height="60px" width="60px" > SHOPMe</a></div>
    </header>

        
     

    <div class="main">
     <h1 style="text-align: center;"> PRODUCT DETAILS</h1>
    <div class="upperhalf"> 
	<table  align= "center" border="1px solid black" >
		<tr>
			<th>cat_id</th>
			<th>brand_id</th>
			<th>pr_id</th>
			<th>pr_name</th>
			<th>pr_image</th>
			<th>brand_id</th>
			<th>pr_details</th>
			<th>keyword</th>
			<th>stock</th>
		</tr>
<?php
include "connect.php";
$sql = "SELECT * FROM product";
$result= mysqli_query($con, $sql);
 if($result)
    {
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {	
            	echo "<tr><td>".$row['cat_id']."</td><td>".$row['brand_id']."</td><td>".$row['pr_id']."</td><td>".$row['pr_name']."</td><td>".$row['pr_image']."</td><td>".$row['brand_id']."</td><td>".$row['pr_details']."</td><td>".$row['keyword']."</td><td>".$row['stock']."</td></tr>";
            	/*echo "<tr>";
                echo "<td>{$row['cat_id']}</td>";
                echo "<td>{$row['brand_id']}</td>";
                echo "<td>{$row['pr_id']}</td>";
                echo "<td>{$row['pr_name']}</td>";
                echo "<td>{$row['pr_image']}</td>";
                echo "<td>{$row['pr_details']}</td>";
                echo "<td>{$row['keyword']}</td>";
                echo "<td>{$row['stock']}</td>";
            	echo "</tr>";*/
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
?>
</table>
</div>


<br>
<div class=".lowerhalf" style="float: left; padding-left: 80px; padding-top: 20px;">
    <h1> BRAND DETAILS</h1>

	<table border="0.5px solid black">
		<tr>
			<th>brand_id</th>
			<th>brand_title</th>
		</tr>
<?php
include "connect.php";
$sql = "SELECT * FROM brands";
$result= mysqli_query($con, $sql);
 if($result)
    {
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {	
            	echo "<tr><td>".$row['brand_id']."</td><td>".$row['brand_title']."</td></tr>";
            	/*echo "<tr>";
                echo "<td>{$row['cat_id']}</td>";
                echo "<td>{$row['brand_id']}</td>";
                echo "<td>{$row['pr_id']}</td>";
                echo "<td>{$row['pr_name']}</td>";
                echo "<td>{$row['pr_image']}</td>";
                echo "<td>{$row['pr_details']}</td>";
                echo "<td>{$row['keyword']}</td>";
                echo "<td>{$row['stock']}</td>";
            	echo "</tr>";*/
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
?>
</table>
</div>



<div class=".upperhalf" style="float: right; padding-right: 80px; padding-top: 20px">
    <h1>CATEGORY DETAILS </h1>

	<table border="1px solid black">
		<tr>
			<th>cat_id</th>
			<th>cat_title</th>
		</tr>
<?php
include "connect.php";
$sql = "SELECT * FROM categories";
$result= mysqli_query($con, $sql);
 if($result)
    {
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {	
            	echo "<tr><td>".$row['cat_id']."</td><td>".$row['cat_title']."</td></tr>";
            	/*echo "<tr>";
                echo "<td>{$row['cat_id']}</td>";
                echo "<td>{$row['brand_id']}</td>";
                echo "<td>{$row['pr_id']}</td>";
                echo "<td>{$row['pr_name']}</td>";
                echo "<td>{$row['pr_image']}</td>";
                echo "<td>{$row['pr_details']}</td>";
                echo "<td>{$row['keyword']}</td>";
                echo "<td>{$row['stock']}</td>";
            	echo "</tr>";*/
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
?>
</table>
</div>
</div>


</body>
</html>