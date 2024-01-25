<!DOCTYPE html>
<html>
   <head>
     <?php 
         

         include "apis.html"; 
         
     ?>
   </head>
   <body>
        <!-- header section strats -->
        <?php include "header.php"; 
        
        $_SESSION["email"] = $_POST["email"];
         $_SESSION["holder"] = $_POST["holder"];
        $total = $_SESSION["p1"] * 45?>
         <!-- end header section -->
       <!-- product section -->

       <!-- content area -->

<section class="h-100" style="background-color: #eee; margin-left:25%; margin-right:25%; margin-top:2.5%; margin-bottom:2.5%; radius:10%;">
<div style ="margin:10%; text-align:center; align-item:center;">
<h3>Procesando Pago...</h3>
<div class="spinner-border" role="status">
  <span class="sr-only">Procesando pago...</span>
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

<?php



sleep(5) ?>

<script>window.location.replace("recipt.php")</script>