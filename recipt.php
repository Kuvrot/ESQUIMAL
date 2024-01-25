<!DOCTYPE html>
<html>
   <head>
     <?php 
         

         include "apis.html"; 

     ?>
   </head>
   <body>
        <!-- header section strats -->
        <?php include "header.php"; $total = $_SESSION["p1"] * 45; $id = 5;?>
         <!-- end header section -->
       <!-- product section -->

       <!-- content area -->

       <div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;"> <strong>ID: <?php echo 5?></strong></p>
        </div>
        <div class="col-xl-3 float-end">
          <button class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark" onClick="window.print()"><i
              class="fas fa-print text-primary"></i> Imprimir
            </button>
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
            <img src="images/logo.png" alt="" width="300">
            <p class="pt-0">esquimal.com</p>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">To: <span style="color:#5d9fc5 ;"><?php echo $_SESSION["holder"] ;?></span></li>
              <li class="text-muted"><i class="fas fa-phone"></i> <?php echo $_SESSION["email"] ;?></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">ID:</span>#5</li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Fecha: </span><?php echo date("d/m/Y");?></li>
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio por unidad</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Pastel esquimal</td>
                <td><?php echo $_SESSION["p1"];?></td>
                <td>45</td>
                <td><?php echo $_SESSION["p1"] * 45; ?></td>
              </tr>
            </tbody>

          </table>
        </div>
        <div class="row">
          <div class="col-xl-8">
          

          </div>
          <div class="col-xl-3">
            <p class="text-black float-start"><span class="text-black me-3"> Total</span><span
                style="font-size: 25px;">$ <?php echo $total?> MXN</span></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Gracias por su compra</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


      <!-- footer start -->
      
         <?php include "footer.html"; ?>

      <!-- footer end -->
      
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
   </body>



</html>
<?php include "resetSession.php" ?>