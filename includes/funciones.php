<?php

// es una constante que es llave y valor 

define('TEMPLETES_URL', __DIR__ . '/templetes');
define('FUNCIONES_URL',  __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', __DIR__ .'/../imagenes/');

function incluirTemplete(string $nombre, bool $inicio = false)
{
    include TEMPLETES_URL . "/$nombre.php";
}

function estaAutenticado(): bool
{
    session_start(); 

    if (!$_SESSION['login']) {
        header('Location:  / ');
    }

    return false;
}


function debug ($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";

    exit;
}

// esscapa el html

function s($html) : string{
    $s = htmlspecialchars($html);
    return $s;
}

// Valida tipo de petición
function validarTipoContenido($tipo){
    $tipos = ['vendedor', 'propiedad'];
    return in_array($tipo, $tipos);
}

function mostrarNotificacion($codigo){
    $mensaje = '';

    switch($codigo){
        case 1: 
            $mensaje = ' Creado correctamente'; 
            break;
        case 2: 
            $mensaje = ' Actualizado correctamente'; 
            break;   
        case 3: 
            $mensaje = ' Eliminado correctamente'; 
            break;   
        default:
        $mensaje = false; 
        break;
    }
    return $mensaje;
}