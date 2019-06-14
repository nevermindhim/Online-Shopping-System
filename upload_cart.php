<?php
		require 'connect.php';
		session_start();
		$cust_id=$_SESSION["cust_id"];
		$pr_id=$_POST['{$row['pr_id']}'];

	$insert_Query = "INSERT INTO carts VALUES ('$cust_id','11140','2')";
    try{
        $insert_Result = mysqli_query($con, $insert_Query);
        echo "<div style='margin-top=200px'>";
        echo $cust_id;
        echo "sdfafafjasjdfnajdsfhakjnbgahkjsmndbhuijkmvsnbhvhjkmd<br><br>";
        echo $cust_id;
        echo $pr_id;
        if($insert_Result)
        {
            if(mysqli_affected_rows($con) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
    echo "</div>";
?>