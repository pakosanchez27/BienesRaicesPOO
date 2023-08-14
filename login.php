<?php
    // Conexion a la base de datos
    require 'includes/app.php';
    $db = conectarDB(); 

    // Autenticar el usuario
    $errores = []; 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) ); 
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email){
            $errores[] = 'El Email es obligatorio o no es Valido'; 
        }
    
        if(!$password){
            $errores[] = 'El Password es necesario'; 
        }

        if(empty($errores)){
            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows) {
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar si el password es correcto o no  
                $auth = password_verify($password, $usuario['password']);
                if ($auth) {
                    session_start();
                    // Llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin');
                }else{
                    $errores[] = "El Password o Usuario es incorrecto";
                }
                
            }else {
                $errores[] = 'El Password o Usuario es incorrecto';
            }
        }
    }

   



    // incluye el header
 
    incluirTemplete('header');
?>



<main class="contenedor seccion contenido-centrado">
        <h1>INICIAR SESIÓN</h1>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php  endforeach ?>

    <form class="formulario " method="POST">

    <fieldset>
                <legend>Email y Password</legend>

                <label for="email">Email</label>
                <input type="email" placeholder="Tu Email" id="email" name="email" require>

                <label for="password">Password</label>
                <input type="password" placeholder="Tu Password" id="password" name="password" require>

                <input type="submit" value="Iniciar secion" class="boton boton-verde">

                
            </fieldset>

    </form>

    </main>

    <?php




incluirTemplete('footer');
?>