<!DOCTYPE html>
<html>
   <head>
     <?php 
         

         include "apis.html"; 

     ?>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <?php include "header.php";?>
         <!-- end header section -->
         <!-- slider section -->
         <?php include "slider.html"?>
         <!-- end slider section -->
      </div>
      
       <!-- product section -->
  <?php include "products.php"; ?>
     <!-- end product section -->

   <!-- why section -->
     <?php include "why.html"; ?>
   <!-- end why section -->
      
   <!-- arrival section -->
      
      <?php include "offer.html"?>

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