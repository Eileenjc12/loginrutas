<?php
if(!empty($_POST["btnregistrar"])){
    if(empty($_POST["inombre"]) || empty($_POST["iapellido"])|| empty($_POST["iusuario"])|| empty($_POST["icontrasena"])){ // Cambiado 'and' por '||' para que valide si CUALQUIERA está vacío
        echo '<div class="alert alert-danger" role="alert"> HAY CAMPOS ESTAN VACIOS </div>';        
    } else {

        $nombre = $_POST["inombre"];
        $apellido = $_POST["iapellido"];
        $usuario = $_POST["iusuario"];
        $contrasena = md5($_POST["icontrasena"]);
        
        // Ejecutamos la consulta
        $sql = $conexion->query("insert into usuarios(nombre,apellido,usuario,clave) values ('$nombre','$apellido','$usuario','$contrasena')");
        
        // ESTA PARTE ES CLAVE: Si hay un error en el SQL, esto te lo dirá
        if (!$sql) {
            die("Error en la consulta SQL: " . $conexion->error);
        } else{
            echo '<div class="alert alert-success" role="alert"> REGISTRO EXITOSO </div>';
        }
       
    }

}

?>