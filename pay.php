<!DOCTYPE html>
<html>
   <head>
     <?php 
         

         include "apis.html"; 

     ?>
   </head>
   <body>
        <!-- header section strats -->
        <?php include "header.php";  $_SESSION["p1"] = $_POST["quantity"]; $total = $_SESSION["p1"] * 45?>
         <!-- end header section -->
       <!-- product section -->

       <!-- content area -->

<section class="h-100" style="background-color: #eee; margin-left:25%; margin-right:25%; margin-top:2.5%; margin-bottom:2.5%; radius:10%;">
  <div style="margin:2.5%;">
  <div class="d-flex justify-content-between align-items-center mb-5">
    <div class="d-flex flex-row align-items-center" style="margin-top:2.5%;">
      <h4 class="text-uppercase mt-1" >Método de pago</h4>
      <span class="ms-2 me-3"></span>
    </div>
    <a href="index.php">Cancelar y regresar al sitio</a>
  </div>

  <div class="row">
    <div class="col-md-7 col-lg-7 col-xl-6 mb-4 mb-md-0">
      <h5 class="mb-0 text-success">Total $<?php echo ($total);?></h5>
      
      <div>
        <div class="d-flex justify-content-between">
          <div class="d-flex flex-row mt-1">
            
           
          </div>
          <div class="d-flex flex-row align-items-center text-primary">
            
          </div>
        </div>
        <p>
         
        </p>
        <div class="p-2 d-flex justify-content-between align-items-center" style="background-color: #eee;">
          
          
        </div>
        <hr />
        <form action="payprocess.php" method="POST" >
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom:2.5%;">
          <div class="d-flex flex-row mt-1">
            <h6 class="d-flex">Correo electrónico:</h6> <input class="form-control form-control-lg d-flex" size="10"  type="email" name="email"  requiered>
            <h6 class="fw-bold text-success ms-1"></h6>
          </div>
          <div class="d-flex flex-row align-items-center text-primary">
            <span class="ms-1"></span>
          </div>
        </div>
        <hr />
        
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-outline">
                  
                  <label class="form-label" for="typeText">Número de tarjeta</label>
                  <img src="https://img.icons8.com/color/48/000000/visa.png" alt="visa" width="64px" />
                <img src="https://img.icons8.com/color/48/000000/mastercard.png" alt="visa" width="64px" />
                <input  type="text" id="typeText" class="form-control form-control-lg" num ="cardnum"siez="17"
                    placeholder="Número de tarjeta" minlength="19" maxlength="19" requiered />
                </div>
                
              </div>

              <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-outline">
                <label class="form-label" for="holder">Nombre del titular</label>
                  <input type="text" id="holder" class="form-control form-control-lg" name="holder"size="17"
                    placeholder="Nombre del titular de la tarjeta" requiered />
                  
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center pb-2">
                <div class="form-outline">
                  <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY"
                    size="7" id="exp" minlength="5" maxlength="5" requiered/>
                  <label class="form-label" for="typeExp">Expiration</label>
                </div>
                <div class="form-outline" style="margin-right:50%;">
                  <input type="password" id="typeText2" class="form-control form-control-lg"
                    placeholder="123" size="2" minlength="3" maxlength="5" requiered/>
                  <label class="form-label" for="typeText2">Cvv</label>
                </div>
              </div>
           
        <div class="d-flex flex-column mb-3">
          <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            
            
          </div>
        </div>
        <input type="submit" class="btn btn-success btn-lg btn-block" style="margin-bottom:5%;" value="Proceder al pago" />
        </form>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 col-xl-4 offset-lg-1 offset-xl-2">
      <div class="p-3" style="background-color: #eee;">
        <span class="fw-bold">Orden</span>
        <div class="d-flex justify-content-between mt-2">
          <span><?php echo $_POST["quantity"]?> Pastel esquimal</span> <span>$<?php echo $total?></span>
        </div>
        
        <hr />
        <div class="d-flex justify-content-between mt-2">
          <span>Total </span> <span class="text-success">$<?php echo $total?></span>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>


      <!-- footer start -->
      
         <?php include "footer.html"?>

      <!-- footer end -->
      
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>
