
<!DOCTYPE html>
<html>
    <head>
        <title>INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <form action="adminedit.php" method="post">

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
            <br><br>

            <select name="cat_slt">
                <option value="$">Select Categories</option>
                <option value="1">Electronics</option>
                <option value="2">Clothes</option>
                <option value="3">Shoes</option>
                <option value="4">Home Appliances</option>
                <option value="5">Foods</option>
                <option value="6">Mens Accessories</option>
                <option value="7">Book</option>
                <option value="8">Women's Accessories</option>
                <option value="9">Kids Toy</option>
                <option value="10">Musical Instruments</option>
                <option value="11">Nepali Cultural Attire</option>               
            </select>
            <br><br>

            <input type="text" name="id" placeholder="Product_Id" value="<?php echo $id;?>"><br><br>
            <input type="text" name="prname" placeholder="Product Name" value="<?php echo $prname;?>"><br><br>
            <input type="text" name="price" placeholder="Price" value="<?php echo $price;?>"><br><br>
            <input type="text" name="keyword" placeholder="Keywords" value="<?php echo $keyword;?>"><br><br>
            <input type="text" name="img" placeholder="Image Name" value="<?php echo $img;?>"><br><br>
            <textarea  rows = "5" cols = "50" name = "detail" placeholder="Write Details"  value="<?php echo $detail;?>"> </textarea>
            <br><br>
            <input type="number" name="stock" placeholder="Stock" value="<?php echo $stock;?>"><br><br>
            
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Find">
            </div>
        </form>
    </body>
</html>

<?php
include "connect.php";
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['brand_slt'];
    $posts[1] = $_POST['cat_slt'];
    $posts[2] = $_POST['id'];
    $posts[3] = $_POST['prname'];
    $posts[4] = $_POST['price'];
    $posts[5] = $_POST['keyword'];
    $posts[6] = $_POST['img'];
    $posts[7] = $_POST['detail'];
    $posts[8] = $_POST['stock'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM product WHERE pr_id = $data[2]";
    
    $search_Result = mysqli_query($con, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $cat_slt=$row['cat_id'];
                $brand_slt=$row['brand_id'];
                $id=$row['pr_id'];
                $price=$row['price'];
                $prname=$row['pr_name'];
                $img=$row['pr_image'];
                $detail=$row['pr_details'];
                $keyword=$row['keyword'];
                $stock=$row['stock'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO product VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')";
    try{
        $insert_Result = mysqli_query($con, $insert_Query);
        
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
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM product WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($con, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($con) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `product` SET brand_id='$data[0]',cat_id='$data[1]',price='$data[3]',pr_name='$data[4]',pr_image='$data[5]',pr_details='$data[6]',keyword='$data[7]', stack='$data[8]' WHERE `pr_id` = $data[2]";
    try{
        $update_Result = mysqli_query($con, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($con) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>

