<!DOCTYPE html>
<html>
   <head>
     <?php 

         include "apis.html";

     ?>

      <style>

:root{
         --primary: #e86b39;
         --secondary: #0F6DA0;
        }

         .history h1{

            font-weight:bold;
            color: var(--primary);

         }

         .history h2{

            font-weight:bold;
            color: var(--secondary);

         }

         .history p {

            font-weight:bold;

         }

      </style>


   </head>
   <body>

       <?php include "header.html";?>
      <section class="arrival_section history">
         <div class="container">
            <div class="box">
               <h1>ESQUIMAL</h1>

               <h2>Misión</h2>
                  <p>nuestra misión es deleitar a nuestros clientes con una nueva experiencia de sabor a través de nuestros pasteles helados artesanales. Nos comprometemos a ofrecer productos de la más alta calidad, elaborados con ingredientes frescos y creatividad sin límites. Nuestro objetivo es ser el destino preferido de aquellos que buscan sabores únicos y momentos especiales de disfrute, brindando alegría a cada bocado y compartiendo sonrisas a través de la magia de nuestros pasteles.</p>

               <h2>Nuestro Visión</h2>
                  <p>Nuestra visión en Esquimal es convertirnos en un referente reconocido a nivel nacional e internacional en el mundo de los pasteles helados. Nos esforzamos por expandir nuestra presencia, ofrecer una gama aún más amplia de sabores y continuar explorando la innovación en la creación de experiencias culinarias. Buscamos inspirar a las personas a descubrir y apreciar la diversidad de sabores que el mundo tiene para ofrecer, y ser reconocidos por nuestra dedicación inquebrantable a la calidad y la satisfacción del cliente. En última instancia, aspiramos a crear momentos de felicidad que perduren en la memoria de nuestros clientes a través de la excelencia en cada pastel helado que servimos.</p>

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