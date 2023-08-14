<?php 

require 'funciones.php'; // importar las funciones
require 'config/database.php'; // importar la conexion a la base de datos 
require __DIR__ . '/../vendor/autoload.php'; // importar el autoload de vendor

// conectar a la base de datos

$db = conectarDB();

use App\ActiveRecord;

ActiveRecord::setDB($db);


?>