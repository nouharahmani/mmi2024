<?php include('layouts/header.php');?>    

      
    <!--lgoin-->

      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Se connecter / s’inscrire</h2>
            <br>
        </div>
        <div class="mx-auto container">
            <form id="login-form">
                <div class="form-group">
                    <input type="text" class="form-control" id="login-email" name="email"placeholder="Votre Email" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="login-password" name="password" placeholder="Votre mot de passe" required/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="login-btn" value="se connecter"/>
                </div>
                <div class="form-group">
                    <a id="register-url" class="btn">OU CRÉER UN COMPTE</a>
                </div>
            </form>
        </div>
      </section>
      
      
    
      
      
      <?php include('layouts/footer.php');?>    
