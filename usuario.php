<?php 

// Importar la conexion 

require 'includes/app.php';
$db = conectarDB();
// crear email y password

$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
// var_dump($passwordHash);


// Query  para el usuario

$query = " INSERT INTO usuarios (email, password) VALUES ( '$email', '$passwordHash')";

// echo $query;
$resultado = mysqli_query($db, $query);

// agregarlo a la base de datos