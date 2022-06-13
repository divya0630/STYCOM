<!DOCTYPE html>
<head>
    <!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php
include "db.php";
//default
//showAll query
if(($_GET['filter'])=="showAll")
{  
   
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%') ";
    $showAll = pg_query($connect,$query);
    $result=pg_fetch_all($showAll);
    $total_row = pg_num_rows($showAll);
    
    //new new
    $output    = '';
    echo "<div class='row'>";
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-xs-6 col-md-4 col-sm-6 col-lg-3 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
       
    }
    else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
    echo "</div>";
    //new end
        
}

        
//showCasuals query
if(($_GET['filter'])=="casual")
{
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND specifications LIKE '%casual%' AND product.productid IN(SELECT product.productid FROM product WHERE producttag LIKE '%gents%')";
    $showcasuals = pg_query($connect,$query);
    $result=pg_fetch_all($showcasuals);
    $total_row = pg_num_rows($showcasuals);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-4 col-sm-6 col-lg-3 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

//showChappal query
if(isset($_POST['chappal']))
{
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND producttag LIKE '%chappal%' AND product.productid IN(SELECT pproductid FROM product WHERE producttag LIKE '%gents%')";
    $showchappal = pg_query($connect,$query);
   
    $result=pg_fetch_all($showchappal);
    $total_row = pg_num_rows($showchappal);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-4 col-sm-6 col-lg-3 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

//showFormalquery

if(($_GET['filter'])=="formal")
{
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND specifications LIKE '%formal%' AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%')";
    $showformal = pg_query($connect,$query);
    $result=pg_fetch_all($showformal);
    $total_row = pg_num_rows($showformal);
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-4 col-sm-6 col-lg-3">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

//loafer

if(isset($_POST['loafer']))
{
    
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND producttag LIKE '%loafer%' AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%')";
    $showloafer = pg_query($connect,$query);
   
    $result=pg_fetch_all($showloafer);
    $total_row = pg_num_rows($showloafer);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-3 col-sm-6 col-lg-4 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

if(isset($_POST['partywear']))
{
    
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND producttag LIKE '%partywear%' AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%')";
    $showpartywear = pg_query($connect,$query);
   
    $result=pg_fetch_all($showpartywear);
    $total_row = pg_num_rows($showpartywear);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-3 col-sm-6 col-lg-4 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

if(isset($_POST['pathani']))
{
    
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND producttag LIKE '%pathani%' AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%')";
    $showpathani = pg_query($connect,$query);
   
    $result=pg_fetch_all($showpathani);
    $total_row = pg_num_rows($showpathani);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-3 col-sm-6 col-lg-4 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

if(isset($_POST['sandal']))
{
    
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND producttag LIKE '%sandal%' AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%')";
    $showsandal = pg_query($connect,$query);
   
    $result=pg_fetch_all($showsandal);
    $total_row = pg_num_rows($showsandal);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-3 col-sm-6 col-lg-4 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

if(isset($_POST['sports']))
{
    
    $query = "SELECT * FROM product,productimage WHERE product.productid=productimage.productid AND producttag LIKE '%sports%' AND product.productid IN(SELECT productid FROM product WHERE producttag LIKE '%gents%')";
    $showsports = pg_query($connect,$query);
   
    $result=pg_fetch_all($showsports);
    $total_row = pg_num_rows($showsports);
    
    //new new
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-3 col-sm-6 col-lg-4 center-responsive">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="' . $row['imagename'] . '">
               <img class="pic-2" src="' . $row['imagename'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
           <span class="product-discount-label">-10%</span>
       </div>
       <div class="product-content">
           
           <div class="price">
              $' . $row['productprice'] . '
               <span>$' . $row['productprice'] . '</span>
           </div>
           
            Brand : ' . $row['productbrand'] . ' <br />
           Color: ' . $row['productcolour'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;

    //new end
}

?>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 

</body>
</html>