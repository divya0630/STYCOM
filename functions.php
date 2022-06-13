<!DOCTYPE html>
<body>
<?php
function showMenOnce()
{
include "db.php";

$query = "SELECT *,imagename FROM product,productimage WHERE product.productid = productimage.productid AND producttag LIKE '%gents%'";
$showAll = pg_query($connect,$query);

    if(!$showAll)
    {
        die("Query Failed!" . pg_errormessage($connect));
    }
    while($row = pg_fetch_assoc($showAll))
    {
        $productimage = $row['imagename'];
        $specifications = $row['specifications'];
        $productprice = $row['productprice'];
        $productsize = $row['productsize'];
        $productcolour = $row['productcolour'];
        ?>
        
        <div class="row">
                <div class = "col col-lg-2 col-sm-1 center-responsive productGrid">
                <div class="imageDiv">
                <img src="<?php echo $productimage; ?>" style="height:100px">
                </div>
                <div class="detailsDiv">
                <p><?php echo $specifications; ?></p>
                <button><?php echo $productprice; ?>.00/-</button>
                </div>
                </div>
        </div>

    <?php }
}

?>
</body>
</html>