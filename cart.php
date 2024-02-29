<?php include('layouts/header.php');?>    

    <!--cart-->
      <Section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">PANIER</h2>
        </div>
            <table class="mt-5 pt-5">
            <tr>
                <th>produit</th>
                <th>quantité</th>
                <th>totale</th>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/bodywash.png">
                        <div>
                            <p>Lotion pour le corps</p>
                            <small><span>$</span>24.99</small>
                            <br>
                            <a class="remove-btn" href="#">supprimer</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1"/>
                    <a class="edit-btn" href="#"></a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">24.99</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/bodywash.png">
                        <div>
                            <p>Lotion pour le corps</p>
                            <small><span>$</span>24.99</small>
                            <br>
                            <a class="remove-btn" href="#">supprimer</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1"/>
                    <a class="edit-btn" href="#"></a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">24.99</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/bodywash.png">
                        <div>
                            <p>Lotion pour le corps</p>
                            <small><span>$</span>24.99</small>
                            <br>
                            <a class="remove-btn" href="#">supprimer</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1"/>
                    <a class="edit-btn" href="#"></a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">24.99</span>
                </td>
            </tr>
            </table>
        <div class="cart-total">
            <table>
            <tr>
                <td>Sous-total</td>
                <td>$155</td>
            </tr>
            <tr>
                <td>total </td>
                <td>$400</td>
            </tr>
            </table>
        </div>
        <div class="checkout-container">
            <button class="btn checkout-btn">valider mon panier</button>
        </div>
      </Section>





      <?php include('layouts/footer.php');?>    



