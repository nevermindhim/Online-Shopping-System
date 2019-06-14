
	<!--
	require 'connect.php';
	$sql="SELECT * FROM `customer`";
	$result=mysqli_query($con,$sql) or die("Bad Query:$sql");

	while($row=mysqli_fetch_assoc($result))
	{
		echo "{$row['fname']}<br>";
	}
	require 'connect.php';
	$sql="SELECT pr_name from product where keyword like'% men%';";
	$result=mysqli_query($con,$sql) or die("Bad Query:$sql");

	while($row=mysqli_fetch_assoc($result))
	{
		echo "{$row['pr_name']}<br>";
	}
	
	require 'connect.php';
	$srchid=$_POST["srchid"];
	//echo $srchid;
	//$sql="SELECT * FROM product WHERE pr_price='';
	$sql = "select * from product where keyword like '% women%'";
	$result=mysqli_query($con,$sql) or die("Bad Query:$sql");

	while($row=mysqli_fetch_assoc($result))
	{
		echo "{$row['pr_name']}<br>";
	}
*/	

	<form action="#" method="post">
	<select name="Color">
	<option value="Red">Red</option>
	<option value="Green">Green</option>
	<option value="Blue">Blue</option>
	<option value="Pink">Pink</option>
	<option value="Yellow">Yellow</option>
	</select>
	<input type="submit" name="submit" value="Get Selected Values" />
	</form>
	<?php
	//if(isset($_POST['submit'])){
	$selected_val //= $_POST['Color'];  // Storing Selected Value In Variable
	//echo "You have selected :" .$selected_val;  // Displaying Selected Value
	//}

?>
-->

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
		<br>
		<input type="range" min="1" max="30000" step="1" value="1" id="foo" name="minprice" onchange='document.getElementById("bar").value =      "Min Price= " + document.getElementById("foo").value;'/>
			<input type="text" name="bar" id="bar" value="Min Price= 1" disabled />
		
		<input type="range" min="1" max="30000" step="1" value="30000" id="fooo" name="maxprice" onchange='document.getElementById("barr").value =      "Max Price= " + document.getElementById("fooo").value;'/>
			<input type="text" name="barr" id="barr" value="Max Price= 30000" disabled />	
	<input type="submit" name="search" value="search">	
	<input type="radio" name="order" value="asc"> <label style="font-family:aerial;font-size: 15px">Ascending</label><br>
			<input type="radio" name="order" value="desc">	<label style="font-family:aerial;font-size: 15px">Descending</label>	
	</form>

</body>
</html>


<?php
	require 'connect.php';
	$srchid='';
	$brand_slt='';
	$srchid=$_POST["srchid"];
	$brand_slt=$_POST["brand_slt"];
	$minprice=$_POST["minprice"];
	$maxprice=$_POST["maxprice"];
	//echo $price;
	//echo $brand_slt;
	
	echo "$radioval";
	if($brand_slt=="$")
	{
		echo "All Products";
		$sql = "select * from product p,brands b where p.brand_id=b.brand_id and p.pr_price>'$minprice' and p.pr_price<'$maxprice' and keyword like '%$srchid% and order by pr_price '";
		$result=mysqli_query($con,$sql) or die("Bad Query:$sql");
		$num= mysqli_num_rows($result);
		//echo $num;
		if($num>0){	
			while($row=mysqli_fetch_assoc($result))
			{
				echo "{$row['pr_name']}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['pr_price']}<br>";
			}
		}
		else {
			echo "Not found";
		}
	}
	else{
		$sql = "select * from product p,brands b where p.brand_id=b.brand_id and b.brand_id= '$brand_slt' and p.pr_price>'$minprice' and p.pr_price<'$maxprice'  and keyword like '%$srchid%'";
		$result=mysqli_query($con,$sql) or die("Bad Query:$sql");
		$num= mysqli_num_rows($result);
		//echo $num;
		if($num>0){	
			while($row=mysqli_fetch_assoc($result))
			{
				echo "{$row['pr_name']}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['pr_price']}<br>";
			}
		}
		else {
			echo "Not found";
		}
	}
?>
