<?php

    require 'includes/app.php';

    
    incluirTemplete('header');
?>


    <main class="contenedor seccion">

        <h2>Casas y Depas en Venta</h2>

        <?php

            $limite = 10;
         include 'includes/templetes/anuncios.php';
          ?>
      
    </main>

    
    <?php



incluirTemplete('footer');
?>