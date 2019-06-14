<!DOCTYPE html>
<html>
<head>
	<title>Query Search</title>
	<link rel="stylesheet" type="text/css" href="css/responsive_styles.css">
</head>
<body>
	<form action="querysearch.php" method="post">
		<input type="text" name="query">
		<input type="submit" name="querry" value="Submit">
	</form>
</body>
</html>

<?php
	include 'connect.php';
	if(isset($_POST['querry']))
{
    $query='';
    $query=$_POST['query'];
    $sql = "$query";
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
