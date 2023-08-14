<?php


use LDAP\Result;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../../includes/app.php';

use App\Vendedor;

estaAutenticado();

$vendedor = new Vendedor();

    // Arreglo con mensajes de errores
    $errores = Vendedor::getErrores();

    // Ejecutar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Crear una nueva instancia 

        $vendedor = new Vendedor($_POST['vendedor']); 

        // Validar que no haya campos vacios 

        $errores = $vendedor->validar();

        // No hay errores

        if (empty($errores)) {
            $vendedor->guardar();
        }


    }



    incluirTemplete('header');


    ?>

<main class="contenedor seccion">
        <h1>Registrar Vendedor(a)</h1>

        

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST">
            <?php include '../../includes/templetes/formulario_vendedores.php'; ?>

            <input type="submit" value="Registrar Vendedor" class="boton boton-verde">
        </form>
        
    </main>

<?php 

incluirTemplete('footer');

?>