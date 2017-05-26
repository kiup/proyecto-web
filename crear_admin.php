<?php include_once 'includes/funciones/funciones.php';
session_start();
usuario_admin_autenticado();
?>

<?php include_once 'includes/templates/barra.php';?>
<header>
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/registro.css" rel="stylesheet" type="text/css">
    <script language="JavaScript">
        <!--
        function validatePass(campo) {
            var RegExPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#])([A-Za-z\d$@$!%*?&#]|[^ ]){8,15}$/;
            var errorMessage = 'Password Incorrecta. El password debe contener al menos una mayúscula, al menos una minúscula, ' +
                'un valor numérico, uno de los siguientes caracteres $@$!%*?&# y de ser una logngitud de al menos 8';
            if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
                alert('Password Correcta');
                response = false;
                window.location.href = window.location.href + "?response=" + response;
            } else {
                alert(errorMessage);
                campo.focus();
                response = false;
                window.location.href = window.location.href + "?response=" + response;
            }
        }
        //-->
    </script>
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
                <input type="password" id="password" name="password" placeholder="tu contrase&ntilde;a" onblur="validatePass(this)">

        </div>
        <div class="campo">
                <input type="submit" name="submit" class="button" value="Crear">
        </div>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        echo "<script>validatePass(document.getElementById('password'));</script>";
        if($_GET['response']){
            if(strlen($usuario)<5){
                echo "<script>alert('El nombre de usuario debe ser más largo, al menos 5 caracteres');</script>";
            }else {
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
        }
    }
    ?>
</section>
<?php include_once 'includes/templates/footer.php'?>
