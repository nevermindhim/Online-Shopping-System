<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<form action="query1.php" method="POST">
		<select name="brand_slt">
			<option value="$">All Brands</option>
			<option value="1">Samsung</option>
			<option value="2">JBL</option>
			<option value="3">Levis</option>			
		</select>
		<input type="text" name="srchid"  placeholder="ProductName">
		<input type="submit" name="search" value="search">		
	</form>

</body>
</html>

<?php
	require 'connect.php';
	$srchid=$_POST["srchid"];
	$brand_slt=$_POST["brand_slt"];
	//echo $brand_slt;
	if($brand_slt=="$")
	{
		//echo "All Products";
		$sql = "select * from product p,brands b where p.brand_id=b.brand_id and keyword like '%$srchid%'";
		$result=mysqli_query($con,$sql) or die("Bad Query:$sql");
		$num= mysqli_num_rows($result);
		//echo $num;
		if($num>0){	
			while($row=mysqli_fetch_assoc($result))
			{
				echo "{$row['pr_name']}<br>";
			}
		}
		else {
			echo "Not found";
		}
	}
	else{
		$sql = "select * from product p,brands b where p.brand_id=b.brand_id and b.brand_id= '$brand_slt' and keyword like '%$srchid%'";
		$result=mysqli_query($con,$sql) or die("Bad Query:$sql");
		$num= mysqli_num_rows($result);
		//echo $num;
		if($num>0){	
			while($row=mysqli_fetch_assoc($result))
			{
				echo "{$row['pr_name']}<br>";
			}
		}
		else {
			echo "Not found";
		}
	}
?>