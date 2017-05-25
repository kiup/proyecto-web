<?php include_once 'includes/funciones/funciones.php';
session_start();
usuario_admin_autenticado();
?>

<?php include_once 'includes/templates/barra.php';?>
<header>
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/registro.css" rel="stylesheet" type="text/css">
</header>
<section class="seccion admin contenedor">

    <h2>Crear administradores</h2>
    <?php include_once 'includes/templates/admin-header.php'?>
    <form action="crear_admin.php" class="login" method="POST">
        <div class="campo">
            <label for="usuario"> Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="tu usuario">

        </div>
        <div class="campo">
            <label for="password"> Contrase&ntilde;a:</label>
                <input type="password" id="password" name="password" placeholder="tu contrase&ntilde;a" onblur="validatePress(this.value)">

        </div>
        <div class="campo">
                <input type="submit" name="submit" class="button" value="Crear">
        </div>
    </form>
    <script type="text/javascript">
    <!--
    function validatePass(value) {
        var RegExPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
        var errorMessage = 'Password Incorrecta.';
        if ((value.match(RegExPattern)) && (value!='')) {
            alert('Password Correcta'); 
        } else {
            alert(errorMessage);
            campo.focus();
        } 
    }
    //-->
    </script>
    <?php
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        if(strlen($usuario)<5){
            echo "El nombre de usuario debe ser más largo";
        }
        $opciones = array(
                'cost'=> 12,
                'salt'=> mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        );

        $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
        try{
            require_once ('includes/funciones/db_conexion.php');
            $stmt = $conn -> prepare("INSERT INTO admins (usuario, hash_pass) VALUES (?, ?)");
            $stmt -> bind_param("ss", $usuario, $hash_password);
            $stmt -> execute();
            if($stmt->error){
                echo "<div class='mensaje error'>";
                echo "Hubo un error";
                echo "</div>";
            }else{
                echo "<div class='mensaje'>";
                echo "Se inserto el usuario correctamente";
                echo "</div>";
            }
            $stmt->close();
            $conn->close();
        }catch (Exception $e){
            echo"Error" . $e->getMessage();
        }
    }
    ?>
</section>
<?php include_once 'includes/templates/footer.php'?>
