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

      </style>

   </head>
   <body>
      <!-- header section strats -->
      <?php include "header.php";?>
         <!-- end header section -->
       <!-- product section -->
  <?php include "products.php"; ?>
     <!-- end product section -->

   <!-- why section -->
     <?php include "why.html"; ?>
   <!-- end why section -->

   <div style="border:3px;" class="video">
      <video style="text-align:center;" width="640" height="480" controls>
         <source src="images/video-promocional-esquimal.mp4" type="video/mp4">
      </video> 
   </div> 
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