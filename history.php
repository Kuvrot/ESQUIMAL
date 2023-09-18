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
                
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body>
   
      <?php include "header.html";?>
      <section class="arrival_section history">
         <div class="container">
            <div class="box">
               <h1>Antecedentes Históricos del Pastel Helado</h1>

               <h2>Antigüedad en China</h2>
                  <p>La idea de combinar ingredientes fríos y dulces para crear postres se puede rastrear hasta la antigua China, donde se consumía una mezcla de nieve, jugos de frutas y miel.</p>

               <h2>Época Romana</h2>
                  <p>Los romanos también disfrutaban de postres fríos, como sorbetes hechos con nieve y miel.</p>

               <h2>Europa Medieval</h2>
                  <p>En la Europa medieval, se popularizó la idea de mezclar frutas y jugos con nieve o hielo para crear postres.</p>

               <h2>Renacimiento y Desarrollo en Europa</h2>
                  <p>Durante el Renacimiento en Europa, los chefs italianos comenzaron a experimentar con la creación de postres helados más similares a lo que hoy llamamos helado.</p>
                  <p>En el siglo XVII, Francia se convirtió en un centro de desarrollo de helados y postres fríos, y el helado se convirtió en un manjar de la realeza.</p>

               <h2>Siglo XIX y Desarrollo del Pastel Helado</h2>
                  <p>A medida que avanzaba el siglo XIX, se desarrollaron muchas variedades de postres helados en Europa y Estados Unidos.</p>
                  <p>A finales del siglo XIX, en Estados Unidos, se comenzaron a crear recetas que combinaban capas de galletas o bizcocho con helado o crema batida.</p>
                  <p>La disponibilidad de electrodomésticos de refrigeración doméstica, como el refrigerador, ayudó a popularizar los postres helados.</p>

               <p>Por lo tanto, aunque el pastel helado moderno tal como lo conocemos se desarrolló en el siglo XX, su historia está vinculada a una larga tradición de postres helados que se remonta a la antigüedad y que se desarrolló a lo largo de los siglos en diferentes culturas y continentes.</p>
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