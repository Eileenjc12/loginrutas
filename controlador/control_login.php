<?php
if(!empty($_POST["btningresar"])){
    if(empty($_POST["usuario"]) || empty($_POST["password"])){ // Cambiado 'and' por '||' para que valide si CUALQUIERA está vacío
        echo '<div class="alert alert-danger" role="alert"> LOS CAMPOS ESTAN VACIOS </div>';        
    } else {
        $usuario = $_POST["usuario"];
        $clave = md5($_POST["password"]); // Corregido el nombre de la variable de 'calve' a 'clave'
        
        // Ejecutamos la consulta
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");

        // ESTA PARTE ES CLAVE: Si hay un error en el SQL, esto te lo dirá
        if (!$sql) {
            die("Error en la consulta SQL: " . $conexion->error);
        }

        if($datos = $sql->fetch_object()){
            header("location:vistas/inicio.php");
            exit(); // Siempre usa exit después de un header location
        } else {
            echo '<div class="alert alert-danger" role="alert"> ACCESO DENEGADO </div>';
        }
    } 
}
?>