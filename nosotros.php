<?php

require 'includes/app.php';
incluirTemplete('header');

?>


<main class="contenedor">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <source srcset="build/img/nosotros.webp" type="image/webp">
            <source srcset="build/img/nosotros.jpeg" type="image/jpeg">
            <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam distinctio quas id placeat sapiente eius ullam non in necessitatibus nesciunt! Molestias, dolorem corporis? Quas voluptatum deserunt libero dolore nesciunt obcaecati?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur alias maiores neque commodi modi exercitationem quasi deleniti. Velit dolore optio commodi animi ducimus! Commodi aspernatur doloremque expedita nam quam maxime.</p>
        </div>
    </div>
</main>
<section class="contenedor">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis beatae quisquam facere
                rerum illo cupiditate libero velit a consequatur similique </p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis beatae quisquam facere
                rerum illo cupiditate libero velit a consequatur similique </p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis beatae quisquam facere
                rerum illo cupiditate libero velit a consequatur similique </p>
        </div>

    </div>
</section>

<?php

incluirTemplete('footer');

?>