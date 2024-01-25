<!DOCTYPE html>
<html>
   <head>
     <?php 

         include "apis.html";

     ?>

      <style>
         .video {

            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom:2.5%;

         }

         .delete {

            color:black;


        }

         .delete:hover {

            color:red;


         }

      </style>

   </head>
   <body>
      <!-- header section strats -->
      <?php include "header.php"; if (isset($_SESSION["p1"])){?>
         <!-- end header section -->
            <?php?>
            
         <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Carrito</h3>
                    <div>
                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                            class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                    </div>
                    
            <div class="card rounded-3 mb-4">
            
            <?php if ($_SESSION["p1"] > 0){?>
            <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                    src="images/stock/0.jpg"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">Pastel esquimal</p>
                <!-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p> -->
                </div>
                
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <form action="pay.php" method="POST">
                    <input style="margin-top:11%;" id="form1" min="1" name="quantity" value="<?php echo $_SESSION["p1"];?>" type="number"
                    class="form-control form-control-sm" />
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 class="mb-0">$45</h5>
                </div>
                <div>
                <a class="delete" href="emptyCart.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg></a>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
                </div>
            </div>
            </div>
            
            <div class="card">
            <div class="card-body">
                <input type="submit" class="btn btn-warning btn-block btn-lg" value="Pagar">
            </div>
            </form> <?php ?> 
            </div>
            <?php } else {?>

                <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">Parece que tu carrito está vacío</p>
                <!-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p> -->
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <form action="cakes.php">
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
                </div>
            </div>
            </div>
            
            <div class="card">
            <div class="card-body">
                <input type="submit" class="btn btn-warning btn-block btn-lg" value="Ver productos">
            </div>


           
            
                
            
            <?php }
            
            
            }else {?>
                <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Carrito</h3>
                    </div>

            <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">Parece que tu carrito está vacío</p>
                <!-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p> -->
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <form action="cakes.php">
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
                </div>
            </div>
            </div>
            
            <div class="card">
            <div class="card-body">
                <input type="submit" class="btn btn-warning btn-block btn-lg" value="Ver productos">
            </div>
            </div>

            <?php } ?>
      
         

      </div>
    </div>
  </div>
</section>
   <!-- end arrival section -->
       
      <!-- footer start -->
      
         <?php include "footer.html"?>

      <!-- footer end -->
      
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>