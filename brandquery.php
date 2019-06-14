<head>
	<link rel="stylesheet" type="text/css" href="css/responsive_styles.css">
</head>
<?php
	require 'connect.php';
	$srchid=' ';
	$brand_slt='';
	$srchid=$_POST["srchid"];
	$brand_slt=$_POST["brand_slt"];
	//echo $price;
	//echo $brand_slt;
	if($brand_slt=="$")
	{
		//echo "All Products";
		$sql = "select * from product p,brands b where p.brand_id=b.brand_id  and keyword like '%$srchid%'";
		$result=mysqli_query($con,$sql) or die("Bad Query:$sql");
		$num= mysqli_num_rows($result);
		//echo $num;
		    if($num>0){
    for($i=0;$i<3;$i++)
    {
	      echo "<div class='main'>"; 
	      while($row=mysqli_fetch_assoc($result))
	      {
	        echo "<div class='container'>
				<div class='box'>
					<div class='img'>
						<img src='img/{$row['pr_image']}'>
					</div>	
				
					<div class='price'> &#x20B9 {$row['pr_price']} <br><a href='#'><span style='font-size: 22px;'> Add to cart</span></a>
					 </div>
				 </div> 
				<div class='content'>
				 	<div class='details'> {$row['pr_details']}
				</div>
				</div> 
			</div>";
	      }
	      echo "</div>";
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
    for($i=0;$i<3;$i++)
    {
	      echo "<div class='main'>"; 
	      while($row=mysqli_fetch_assoc($result))
	      {
	        echo "<div class='container'>
				<div class='box'>
					<div class='img'>
						<img src='img/{$row['pr_image']}'>
					</div>	
				
					<div class='price'> &#x20B9 {$row['pr_price']} <br><a href='#'><span style='font-size: 22px;'> Add to cart</span></a>
					 </div>
				 </div> 
				<div class='content'>
				 	<div class='details'> {$row['pr_details']}
				</div>
				</div> 
			</div>";
	      }
	      echo "</div>";
	    }
	}
    else {
      echo "Not found";
    }
	}
?>