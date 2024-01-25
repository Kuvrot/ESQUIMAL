<!DOCTYPE html>
<html>
   <head>
     <?php 

         include "apis.html";

     ?>
   </head>
   <body>
        <!-- header section strats -->
        <?php include "header.php";?>
         <!-- end header section -->
      
         <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/stock/0.jpg" alt="product image" style="border-radius:10px;"/></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">Pastel Esquimal</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                        </div>
                        <p class="lead">Este pastel helado clásico es una deliciosa combinación de capas de helado suave y sabores tradicionales. Cada capa está cuidadosamente elaborada con ingredientes de alta calidad para ofrecer una experiencia de sabor excepcional.</p>
                        <ul class="list-unstyled">
                            <li>Ingredientes Destacados: Helado de vainilla, fudge de chocolate, trozos de galleta.</li> <br>
                            <li>Presentación:Decorado con crema batida, nueces trituradas y una sutil capa de chocolate.</li>
                        </ul>
                        <div class="d-flex">
                            <form class= "d-flex" action="add.php" method="POST">
                                <input class="form-control text-center me-3" id="inputQuantity" name="quantity" type="num" min = 1 value="1" style="max-width: 5rem"/>
                                
                                <div style="padding-left:2.5%;">
                                    <input class="btn btn-outline-dark flex-shrink-0" value ="Añadir al carrito" type="submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <?php include "products.php"; ?>
       
      <!-- footer start -->
      
         <?php include "footer.html"?>

      <!-- footer end -->
      
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>