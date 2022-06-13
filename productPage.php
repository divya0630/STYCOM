<!DOCTYPE html>
<head>
  <title>Product Page</title>

  <!-- favicon -->
	<link rel="icon" href="favicon/favicon.ico">

<!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- css -->
<link rel="stylesheet" href="css/productPage.css">
</head>

<body>
  <section class="productNavbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >

    <a class="navbar-brand" href="index.html">STYCOM</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">

    <ul class="navbar-nav ml-auto">

    <li class="nav-item">
    <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.html">Home</a>
    </li>
    <a class="nav-link" href="#">Wishlist</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg>
    </a>
    </li>
    </ul>
    </div>
    </nav>
  </section>

  <section class="filter">
    <form method="get" action="">
      <div class="row">
      <div class="col col-xs-12 col-sm-11 col-md-6 col-lg-6">
    
      <div class="button-group">
      <button type="submit" class="filterButton" name="showAll"><a href="productPage.php?source=men&filter=showAll">Show All</a></button>
      <button type="submit" class="filterButton" name="casual"><a href="productPage.php?source=men&filter=casual">Casual</a></button>
      <button type="submit" class="filterButton" name="chappal"><a href="productPage.php?source=men&filter=chappal">Chappal</a></button>
      <button type="submit" class="filterButton" name="formal"><a href="productPage.php?source=men&filter=formal">Formal</a></button>
      <button type="submit" class="filterButton" name="loafer"><a href="productPage.php?source=men&filter=loafer">Loafer</a></button>
      <button type="submit" class="filterButton" name="partyWear"><a href="productPage.php?source=men&filter=partywear">Party Wear</a></button>
      <button type="submit" class="filterButton" name="pathani"><a href="productPage.php?source=men&filter=pathani">Pathani</a></button>
      <button type="submit" class="filterButton" name="sandal"><a href="productPage.php?source=men&filter=sandal">Sandal</a></button>
      <button type="submit" class="filterButton" name="sports"><a href="productPage.php?source=men&filter=sports">Sports</a></button>
      </div><!--/bottongroup-->  
      </div><!--/firstCol-->
      <div class="col col-xs-12 col-sm-11 col-md-6 col-lg-6">
      
      <div class="button-group">
      <button class="colourName filterButton" type="submit" name="antique"><a href="productPage.php?source=men&filter=antique">Antique</a></button>
      <button class="colourName filterButton" type="submit" name="beige"><a href="productPage.php?source=men&filter=beige">Beige</a></button>
      <button class="colourName filterButton" type="submit" name="black"><a href="productPage.php?source=men&filter=black">Black</a></button>
      <button class="colourName filterButton" type="submit" name="gold"><a href="productPage.php?source=men&filter=gold">Gold</a></button>
      <button class="colourName filterButton" type="submit" name="gunmetal"><a href="productPage.php?source=men&filter=gunmetal">Gunmetal</a></button>
      <button class="colourName filterButton" type="submit" name="maroon"><a href="productPage.php?source=men&filter=maroon">Maroon</a></button>
      <button class="colourName filterButton" type="submit" name="peach"><a href="productPage.php?source=men&filter=peach">Peach</a></button>
      <button class="colourName filterButton" type="submit" name="pink"><a href="productPage.php?source=men&filter=pink">Pink</a></button>
      <button class="colourName filterButton" type="submit" name="silver"><a href="productPage.php?source=men&filter=silver">Silver</a></button>
      <button class="colourName filterButton" type="submit" name="white"><a href="productPage.php?source=men&filter=white">White</a></button>
      </div><!--/buttongroup-->
      </div><!--/secondCol-->
      </div><!--/filter row-->
    </form>
  </section>

  <section class="productSection">
    <div class="product">
    <?php
        if(isset($_GET['source']))
        {
          $source=$_GET['source'];
        }    
        else
          $source="";

        switch($source)
        {
          case 'men': include "menproductquery.php";
                      break;
          case 'women': include "womenproductquery.php";
                      break;
          case 'kids': include "kidsproductquery.php";
                      break;
        }
    
    ?>
    </div><!--/products-->
  </section>

</body>