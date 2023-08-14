<?php

require 'includes/app.php';
incluirTemplete('header');

?>


<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
    </picture>
    <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat vitae reiciendis error perspiciatis corrupti, illum libero voluptatem pariatur laudantium sed sapiente animi consectetur at vel perferendis obcaecati, facilis neque iusto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nemo expedita optio odit tempora sapiente, sint autem eius suscipit et assumenda voluptate numquam quaerat debitis quo officiis libero! Deserunt, qui?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum autem enim, voluptate quia error, nihil molestias veniam laudantium vel asperiores nulla, incidunt id? Vero eveniet placeat eos fugit sit molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo exercitationem libero labore deserunt odit, consequatur voluptates, perferendis blanditiis explicabo nostrum magnam alias non cum ex esse reprehenderit deleniti, vitae veniam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nulla quas, modi sunt, voluptates facere nemo labore voluptatibus praesentium sint dolores excepturi libero in optio a aperiam maiores impedit quo!</p>
    </div>

</main>

<?php

incluirTemplete('footer');

?>