<?php
include 'db.php';
error_reporting(E_ALL); ini_set('display_errors', 1);
    if($_POST['submit']){
        $productname=$_POST['product_name'];
        $productprice=$_POST['product_price'];
        $filename=$_FILES['product_image'] ['name'];
        $tempname=$_FILES["product_image"] ['tmp_name'];
        $folder="products/".$filename;
        move_uploaded_file($tempname,$folder);
        // echo "<img src='$folder' height='100' width='100' ";
        // echo $folder;
        // print_r($_FILES["product_image"]);
        
        if($productname!="" && $productprice!="" && $filename!=""){
            $query="INSERT INTO products(product_name,product_price,product_image) VALUES('$productname','$productprice','$folder')";
            $data=mysqli_query($con,$query);
            if($data){
                echo "data inserted successfully";
            }
            else{
                echo "all fileds required";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        product name: <input type="text" name="product_name" id=""><br>
        product image: <input type="file" name="product_image" id=""><br>
        product price: <input type="number" name="product_price" id=""><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>