<h1 class="Titulo">
    REGISTRAR
</h1>

<?php 
    include("../modelo/conexion_bd.php");
    include('../controlador/control_registrousar.php');
?>
<div>
    <form class="login-form" method="post" action=''>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombres</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nombres" name="inombre">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Apellidos" name="iapellido">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="addon-wrapping">@Usuario</span>
            <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="addon-wrapping" name="iusuario">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="addon-wrapping">Password</span>
            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" name="icontrasena">
            
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
                </span>
            </div>  
        </div>
        <div class="input-group mb-3">
        <input class="btn btn-primary" type="submit" value="Submit" name="btnregistrar" >
        </div>
    </form>
</div>