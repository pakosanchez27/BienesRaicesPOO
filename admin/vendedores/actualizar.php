<?php

require '../../includes/app.php';

use App\Vendedor;

estaAutenticado();

// Validar que sea un id valido

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('location: /admin');
}

// Obtener el arreglo del vendedor

$vendedor = Vendedor::find($id);

// Arreglo con mensajes de errores
$errores = Vendedor::getErrores();

// Ejecutar el código después de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $args = $_POST['vendedor'];
    
    $vendedor->sincronizar($args);

    $errores = $vendedor->validar();

    if (empty($errores)) {
        $vendedor->guardar();
    }



}



incluirTemplete('header');


?>

<main class="contenedor seccion">
    <h1>Actualizar Vendedor(a)</h1>



    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" >
        <?php include '../../includes/templetes/formulario_vendedores.php'; ?>

        <input type="submit" value="Guardar Cambios" class="boton boton-verde">
    </form>

</main>

<?php

incluirTemplete('footer');

?>