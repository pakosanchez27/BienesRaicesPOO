<?php

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

use LDAP\Result;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../../includes/app.php';
estaAutenticado();


$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

$propiedad = Propiedad::find($id);

// Consulta para obtener los vendedores
$vendedores = Vendedor::all();

//consulta de vendedores  
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


// Arrelgo con msj de error
$errores = Propiedad::getErrores();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Asignar los atributos 
    $args = $_POST['propiedad'];


    $propiedad->sincronizar($args);

    // validacion


    $errores = $propiedad->validar();

    // Subida de archivos
    // Generar un nombre unico
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
    // Setear la imagen 
    if ($_FILES['propiedad']['tmp_name']['imagen']) {
        // Realiza un risize a la imagen con Intervention image
        $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
        $propiedad->setImagen($nombreImagen);
    }

   


    if (empty($errores)) {
        if ($_FILES['propiedad']['tmp_name']['imagen']) {
        // Almacenar la imagen
        $image->save(CARPETA_IMAGENES . $nombreImagen);
        
        
        }
        $propiedad->guardar();
    }
}







incluirTemplete('header');
?>


<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach ?>
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php
        include '../../includes/templetes/formulario_propiedades.php'
        ?>

        <input type="submit" value="Actualizar propiedad" class=" boton boton-verde">
    </form>
</main>


<?php




incluirTemplete('footer');
?>