
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/responsive_styles.css">
	<title>Electronics</title>
</head>
<body>
	<?php
    require 'connect.php';
    $sql = "SELECT * FROM product WHERE cat_id=1";
    $result=mysqli_query($con,$sql) or die("Bad Query:$sql");
    $num= mysqli_num_rows($result);
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
				
					<div class='price'> &#x20B9 {$row['pr_price']} <br><a href='#'><span style='font-size: 22px;' name='{$row['pr_id']}'> Add to cart</span></a>
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
  ?>

</body>
</html>