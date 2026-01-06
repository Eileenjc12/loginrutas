
<?php 
    include("modelo/conexion_bd.php");
    include('controlador/control_login.php');
?>
    
    <div class="login-container">
        <form class="login-form" method="post" action=''>
            <h2>Iniciar Sesión</h2>
           
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="********" >
            </div>          

            <button type="submit" class="btn btn-dark" name="btningresar" value="INICIAR SESION">Iniciar Sesión</button>
        </form>
    </div>

