<?php include_once 'includes/templates/header.php';?>
<header>
    <link href="css/registro.css" rel="stylesheet" type="text/css">
</header>
<section class="seccion contenedor">
    <h2>Crear administradores</h2>

    <form action="crear_admin.php" class="login" method="POST">
        <div class="campo">
            <label for="usuario"> Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="tu usuario">

        </div>
        <div class="campo">
            <label for="password"> Contrase&ntilde;a:</label>
                <input type="password" id="password" name="password" placeholder="tu contrase&ntilde;a">

        </div>
        <div class="campo">
                <input type="submit" name="submit" class="button" value="Crear">
        </div>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if(strlen($usuario)<5){
            echo "El nombre de usuario debe ser más largo";
        }
        $opciones = array(
                'cost'=> 12,
                'salt'=> mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
        );
        $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    }
    ?>
</section>
<?php include_once 'includes/templates/footer.php'?>