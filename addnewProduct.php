<!DOCTYPE html>
<html>
<head>
<title>Add New Product</title>
</head>
<center>
<body>
<form action="" method="POST">
<label for="productid">Product ID
<input type="text" name="productid"><br><br>
<label for="material">Product Material
<input type="text" name="material"><br><br>
<label for="productbrand">Product Brand
<input type="text" name="productbrand"><br><br>
<label for="productprice">Product Price
<input type="text" name="productprice"><br><br>
<label for="productsize">Product Size
<input type="text" name="productsize"><br><br>
<label for="productcolour">Product Colour
<input type="text" name="productcolour"><br><br>
<label for="specifications">Product Specifications
<input type="text" name="specifications"><br><br>
<label for="productavailablequantity">Product Available Quantity
<input type="text" name="productavailablequantity"><br><br>
<label for="productavailablequantity">Product Tag
<input type="text" name="producttag"><br><br>
<input type="submit" name="Add" value="ADD"><br><br>
</form>

</body>
</center>
</html>

<?php

include "db.php";

if(isset($_POST['Add']))
{
    $productid = $_POST['productid'];
    $productbrand = $_POST['productbrand'];
    $material = $_POST['material'];
    $productprice = $_POST['productprice'];
    $productsize = $_POST['productsize'];
    $productcolour = $_POST['productcolour'];
    $specifications = $_POST['specifications'];
    $productavailablequantity = $_POST['productavailablequantity'];
    $producttag = $_POST['producttag'];

    $query = "INSERT INTO product VALUES('$productid',$productprice,'$productsize','$productcolour',$productavailablequantity,'$material','$specifications','$producttag','$productbrand')";
    $addproductquery = pg_query($connect,$query);

    if(!$addproductquery)
    {
        die("Query Failed!" . pg_errormessage($connect));
    }
        

}




?>





