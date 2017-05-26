<?php
$resultado = "";
if(isset($_POST['submit'])){
    session_start();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    try{
        require_once ('includes/funciones/db_conexion.php');
        $stmt = $conn -> prepare("SELECT * FROM admins WHERE usuario = ?;");
        $stmt -> bind_param("s", $usuario);
        $stmt -> execute();
        $stmt -> bind_result($id, $nombre_usuario, $password_usuario);
        while($stmt->fetch()){
            if(password_verify($password,$password_usuario)){
                $_SESSION['usuario'] = $usuario;
                $_SESSION['id']=$id;
                $_SESSION['tipo'] = 'admin';
                header('Location: admin-area.php');
            }else{
                $resultado = "Hubo un error";
            }
        }
        $stmt->close();
        $conn->close();
    }catch (Exception $e){
        echo"Error" . $e->getMessage();
    }
}
?>

<?php include_once 'includes/templates/barra.php';?>
    <header>
        <link href="css/registro.css" rel="stylesheet" type="text/css">
    </header>
    <section class="seccion contenedor">
        <h2>Iniciar sesi&oacute;n (Solo Administradores)</h2>

        <form action="login.php" class="login" method="POST">
            <div class="campo">
                <label for="usuario"> Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="tu usuario">

            </div>
            <div class="campo">
                <label for="password"> Contrase&ntilde;a:</label>
                <input type="password" id="password" name="password" placeholder="tu contrase&ntilde;a">

            </div>
            <div>
                <input type="submit" name="submit" class="button" value="Iniciar sesi&oacute;n">
            </div>
        </form>
        <?php echo $resultado;
                $resultado = "";
        ?>
    </section>
<?php include_once 'includes/templates/footer.php'?>
