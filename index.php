
<?php include('layouts/header.php');?>

      <!--Home-->
      <section id="home">
        <div class="container">
            <h5>NOUVEAUTÉS </h5>
            <h1><span>Offre fidélité :</span> -25% sur une sélection</h1>
            <p>découvrez nos produits exceptionnels et des offres irrésistibles dès maintenant !</p>
            <button>J'en profite</button>
        </div>
      </section>

      <!--fausse marque-->
      <section id="brand" class="container">
        <div class="row py-5">
            <img class="img-fuild col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.png"/>
            <img class="img-fuild col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.png"/>
            <img class="img-fuild col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.png"/>
            <img class="img-fuild col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.png"/>

        </div>
      </section>

      <!--Nouveautés-->
      <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!--1-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                
                <img class="img-fuild"  src="assets/imgs/serum_2.png"/>
                <div class="details">
                    <h2>Anticernes soin, aussi concentrée qu’un sérum.</h2>
                    <button class="text-uppercase">DÉCOUVRIR</button>
                </div>
            </div>
            <!--2-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fuild" src="assets/imgs/fondation_4.png"/>
                <div class="details">
                    <h2>Sérum Foundation Fond de teint fluide anti-âge</h2>
                    <button class="text-uppercase">DÉCOUVRIR</button>
                </div>
            </div>
            <!--3-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fuild" src="assets/imgs/lotion_7.png"/>
                <div class="details">
                    <h2>Des lèvres aux joues : créez votre propre look.</h2>
                    <button class="text-uppercase">DÉCOUVRIR</button>
                </div>
            </div>

        </div>
      </section>

     <!--featured--> 
      <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Our featured</h3>
                <hr class="mx-auto">
                <p>Voici où vous pouvez consulter nos produits vedettes.</p>
            </div>
            <div class="row mx-auto container-fluid">

            <?php include('server/get_featured_products.php'); ?>
            <?php while($row= $featured_products->fetch_assoc()){?>

                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fuild mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                    <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>">
                    <button class="buy-btn">ajouter au panier</button></a>
                </div>

               <?php }?>

            </div>
      </section>
     <!--banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>SOLDES DE MI-SAISON</h4>
            <h2>Collection été</h2>
            <h1>Jusqu'à 30% DE RÉDUCTION</h1>
            <button class="text-uppercase">Explorez la collection</button>
        </div>
      </section>
     <!--skincare-->
     <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3 class="text-uppercase">Produits Skincare</h3>
            <hr class="mx-auto">
            <p>Ici, vous pouvez découvrir nos produits de soins de la peau.</p>
        </div>
       
        <div class="row mx-auto container-fluid">
        <?php include('server/get_skincare.php'); ?>
        <?php while($row= $skincare_products->fetch_assoc()){?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fuild mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
                <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>">
                    <button class="buy-btn">ajouter au panier</button></a>
            </div>
            <?php }?>

        </div>
  </section>

      <!--Makeup-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>PRODUITS MAQUILLAGE</h3>
            <hr class="mx-auto">
            <p>Ici, vous pouvez découvrir nos produits de maquillage.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <?php include('server/get_makeup.php'); ?>
            <?php while($row= $makeup_products->fetch_assoc()){?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fuild mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
                <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>">
                    <button class="buy-btn">ajouter au panier</button></a>
            </div>
            <?php }?>

        </div>
  </section>
      <!--brushes-->

  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>PINCEAUX DE MAQUILLAGE</h3>
        <hr class="mx-auto">
        <p>Ici, vous pouvez découvrir nos pinceaux de maquillage.</p>
    </div>
    <div class="row mx-auto container-fluid">
        <?php include('server/get_brushes.php'); ?>
            <?php while($row= $brushes_products->fetch_assoc()){?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fuild mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>">
                    <button class="buy-btn">ajouter au panier</button></a>
        </div>
        <?php }?>
    </div>
</section>

<?php include('layouts/footer.php');?>