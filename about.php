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

               <h2>Sobre nosotros</h2>
                  <p>En Esquimal, nos apasiona la creación de experiencias culinarias únicas y la exploración de nuevos sabores. Nuestra historia es un viaje de amor por los pasteles helados y un compromiso inquebrantable con la excelencia en cada bocado que servimos.</p>

               <h2>Nuestro equipo</h2>
                  <p>En el corazón de Esquimal se encuentra nuestro talentoso equipo de chefs, amantes de la gastronomía y entusiastas de los sabores. Juntos, compartimos una pasión por la innovación culinaria y la creación de experiencias que deleitan los sentidos.</p>

               <h2>Compromiso con la calidad</h2>
                  <p>Nuestro compromiso con la calidad es innegociable. Seleccionamos cuidadosamente los ingredientes más frescos y de la más alta calidad para nuestros pasteles helados y los transformamos en obras maestras culinarias en nuestras instalaciones. Creemos que la calidad no es un lujo, sino un estándar que nuestros clientes merecen.</p>

               <h2>Responsabilidad social y ambiental</h2>
                  <p>En Esquimal, nos enorgullece apoyar a nuestra comunidad y el medio ambiente. Colaboramos con organizaciones locales y mantenemos prácticas sostenibles en nuestras operaciones para contribuir a un mundo mejor.</p>

               <h1 style="text-align:center;"> Contáctenos </h1>

               <form>
                  <!-- Name input -->
                  <div class="form-outline mb-4">
                     <input type="text" placeholder="Nombre" id="form4Example1" class="form-control" />   
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                     <input type="email" id="form4Example2" placeholder="Correo electrónico" class="form-control" />
                  </div>

                  <!-- Message input -->
                  <div class="form-outline mb-4">
                     <label class="form-label" for="form4Example3">Mensaje</label>
                     <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4 row container" style="display:grid;">
                     
                  <label class="form-check-label col-md" for="form4Example4">
                        Envíame una copia del mensaje
                  </label>
                  <input class="form-check-input col-md" type="checkbox" value="" id="form4Example4" style="text-align:center; margin-right:25%;" checked />
                     
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
               </form>
            </div>
         </div>
      </section>

   <!-- why section -->
     <?php include "why.html"; ?>
   <!-- end why section -->

      <!-- footer start -->
      
         <?php include "footer.html"?>

      <!-- footer end -->
      
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>