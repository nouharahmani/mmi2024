<?php include('layouts/header.php');?>
<?php

// filtre
include ('server/connection.php');

if (isset($_POST['search'])) {

     //savoir la page
     if( isset($_GET['page_no']) && $_GET['page_no'] !="") {
        $page_no = $_GET['page_no'];
    }else{
        //page par défaut
        $page_no = 1; 
    }

    $category = $_POST['category'];
    $price = $_POST['price'];

    // nombres produits
    $stmt1 = $conn->prepare("SELECT COUNT(*) As total_records FROM products WHERE product_category=? AND product_price<=?");
    $stmt1->bind_param( 'si', $category, $price);
    $stmt1->execute();
    $stmt1->bind_result($total_records);
    $stmt1->store_result();
    $stmt1->fetch();

    // produit par page 
        
    $total_records_per_page = 8;
    $offset = ($page_no - 1) * $total_records_per_page;

    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;

    $adjecents = "2";

    $total_no_of_pages = ceil($total_records/$total_records_per_page);
    

         //avoir tout les produits 

         $stmt2 = $conn->prepare("SELECT * FROM products WHERE product_category=? AND product_price<=? LIMIT $offset,$total_records_per_page");
         $stmt2->bind_param("si",$category, $price);    
         $stmt2->execute();
         $product = $stmt2-> get_result();//[]



 

} else {

   //savoir la page
    if( isset($_GET['page_no']) && $_GET['page_no'] !="") {
        $page_no = $_GET['page_no'];
    }else{
        //page par défaut
        $page_no = 1; 
    }


    // nombres produits
    $stmt1 = $conn->prepare("SELECT COUNT(*) As total_records FROM products");
    $stmt1->execute();
    $stmt1->bind_result($total_records);
    $stmt1->store_result();
    $stmt1->fetch();
    // produit par page 
    
    $total_records_per_page = 8;
    $offset = ($page_no - 1) * $total_records_per_page;

    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;

    $adjecents = "2";

    $total_no_of_pages = ceil($total_records/$total_records_per_page);

    //avoir tout les produits 

    $stmt2 = $conn->prepare("SELECT * FROM products LIMIT $offset,$total_records_per_page");
    $stmt2->execute();
    $product = $stmt2-> get_result();

}

?>


      <!--filtre -->
        <section id="search" class="  my-3 py-5  ms-2 float-start">
            <div class="container mt-4 py-5 ">
                <p style="font-size: 1.5rem; font-weight: bold;"> Filtre</p><br>
            </div>
            <form class="form" action="shop.php" method="POST">
                <div class="  row mx-auto container">
                    <div class="form-check-all col-lg-12 col-md-12 col-sm-12">
                        <p style="font-weight: bold;">CATÉGORIE :</p>

                        <div class="form-check">
                        <input class="form-check-input" value="brush" type="radio" name="category" id="category_one" <?php if(isset($category) && $category == 'brush'){echo 'checked';}  ?> >
                        <label class="form-check-label" for="flexRadioDefault1">Brushes</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" value="makeup" type="radio" name="category" id="category_two" <?php if(isset($category) && $category == 'makeup'){echo 'checked';}  ?>>
                        <label class="form-check-label" for="flexRadioDefault2">Makeup</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input"  value="skincare" type="radio" name="category" id="category_two" <?php if(isset($category)&& $category == 'skincare'){echo 'checked';}  ?>>
                        <label class="form-check-label" for="flexRadioDefault2">Skincare</label>
                        </div>

                    </div>
                </div>


                <div class=" row mx-auto container mt-5">
                    <div class=" col-lg-12 col-md-12 col-sm-12">
                        <p style="font-weight: bold;">Prix</p>
                        <input type="range"  class="form-range w-50" name="price" value="<?php  if(isset($price)){echo $price;}else{ echo "15";} ?>" min="1" max="50" id="customRange2" >
                        <div class="w-50">
                            <span style="float: left;">1</span>
                            <span style="float:right;">50</span>
                        </div>
                    </div>
                </div>

                <div class="form-group my-3 mx-3">
                <input type="submit" name="search" value="search"  class="btn btn-primary ">
                </div>
            </form>
        </section>




      <!-- produits-->
      <section id="featured" class="my-5 py-5">
        <!-- -->
        <div class="container mt-5 py-5">
            <h3>Tous les produits</h3>
            <br>
        </div>
        <div class="row mx-auto container">

        <?php while($row = $product->fetch_assoc()){ ?>

            <div onclick="window.location.href='single_product.php';" class="product text-center col-lg-3 col-md-4 col-sm-12">
                <a href="<?php echo "single_product.php?product_id=".$row['product_id'];?>"><img class="img-fuild mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/></a>
                
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
               <a class="btn buy-btn" href="<?php echo "single_product.php?product_id=".$row['product_id'];?>">Ajouter au panier</a>
                
            </div>
        <?php } ?> 


    <!-- pour changer de page-->            
            <nav aria-label="page navigation example" class="mx-auto">
                <ul class="pagination mt-5 mx-auto">

                    <li class="page-item  <?php if($page_no<=1){echo 'disabled';}?> ">
                    <a class="page-link" href="<?php if ($page_no <=1){echo '#';}else{ echo "?page_no=".($page_no-1);} ?>">previous</a>
                    </li>


                    <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>

                    <?php  if($page_no >=3) {?>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="<?php echo "?page_no=".$page_no;?>"><?php echo $page_no;?></a>
                    </li>
                    <?php } ?>


                    <li class="page-item <?php if($page_no>= $total_no_of_pages){echo 'disabled';}?>">
                    <a class="page-link" href="<?php if ($page_no >= $total_no_of_pages){echo '#';}else{ echo "?page_no=".($page_no+1);} ?>">next</a>
                    </li>

                </ul>
            </nav>
        </div>
  </section>

  <?php include('layouts/footer.php');?>