<!DOCTYPE html>
<html>
<head>
<title>Add New Image</title>
</head>
<center>
<body>
<form action="" method="POST">
<label for="productid">Product ID
<input type="text" name="productid"><br><br>
<label for="imagename">Image Name
<input type="text" name="imagename"><br><br>
<label for="colour">Image Colour
<input type="text" name="colour"><br><br>
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
    $colour = $_POST['colour'];
    $imagename = $_POST['imagename'];

    $query = "INSERT INTO productimage VALUES('$productid','$imagename','$colour')";
    $addimagequery = pg_query($connect,$query);

    if(!$addimagequery)
    {
        die("Query Failed!" . pg_errormessage($connect));
    }
        

}




?>





