<?php

include ('server/connection.php');

if(isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);

    $stmt->execute();
    $product = $stmt->get_result();//[]




}else {
    header('location: index.php');}?>



<?php include('layouts/header.php');?>
 

      <!--prduit-->
      <section class="container single-product my-5 pt-5">
        <div class="row mt-5">

        <?php while($row = $product->fetch_assoc()){ ?>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fuild w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>" id="mainImg"/>
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image']; ?>" width="100" class="small-img"/>
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image2']; ?>" width="100" class="small-img"/>
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image3']; ?>" width="100" class="small-img"/>
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image4']; ?>" width="100" class="small-img"/>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-12 col-sm-12">
                <h6><?php echo $row['product_category']; ?></h6>
                <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
                <h2>$<?php echo $row['product_price']; ?></h2>
                <input type="number" value="1"/>
                <button class="buy-btn">ajouter au panier</button>
                <h4 class="mt-5 pb-5">Description</h4>
                <span><?php echo $row['product_description']; ?></span>
            </div>
            <?php } ?>

        </div>
      </section>

  <!--related-products-->
  <section id="related-products" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>related products</h3>
        <hr class="mx-auto">
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fuild mb-3" src="assets/imgs/cream_3.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">fond de teint</h5>
            <h4 class="p-price">69.99$</h4>
            <button class="buy-btn">Ajouter au panier</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fuild mb-3" src="assets/imgs/mascara.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Mascara</h5>
            <h4 class="p-price">19.99$</h4>
            <button class="buy-btn">Ajouter au panier</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fuild mb-3" src="assets/imgs/concealer.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Anti-cerne</h5>
            <h4 class="p-price">39.99$</h4>
            <button class="buy-btn">Ajouter au panier</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fuild mb-3" src="assets/imgs/serum_3.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sérum vitamine C</h5>
            <h4 class="p-price">29.99$</h4>
            <button class="buy-btn">Ajouter au panier</button>
        </div>
    </div>
</section>








 
    <script>
       var mainImg = document.getElementById("mainImg");
       var smallImg = document.getElementsByClassName("small-img"); 
       for(let i=0; i<4; i++){
            smallImg[i].onclick = function(){
                mainImg.src = smallImg[i].src;
        }
       }
       
    </script>
  <?php include('layouts/footer.php');?>    


