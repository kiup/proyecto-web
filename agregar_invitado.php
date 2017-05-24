<?php include_once 'includes/funciones/funciones.php';
    session_start();
    usuario_admin_autenticado();
?>

<?php include_once 'includes/templates/header.php';?>

    <header>
        <link href="css/admin.css" rel="stylesheet" type="text/css">
        <link href="css/registro.css" rel="stylesheet" type="text/css">
    </header>
    <section class="admin seccion contenedor">
        <h2>Panel Administraci&oacute;n</h2>
        <p>Bienvenido <?php echo $_SESSION['usuario'];?><p/>

        <?php include_once 'includes/templates/admin-header.php'?>

        <form class="invitado" action="agregar_invitado.php" method="POST" enctype="multipart/form-data">
            <div class="campo">
                <label for="nombre"> Nombre:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Nombre">
            </div>
            <div class="campo">
                <label for="apellido"> Apellido:</label>
                <input type="text" id="apellido" name="apellido" required placeholder="Apellido">
            </div>
            <div class="campo">
                <label for="descripcion"> Descripci&oacute;n:</label>
                <textarea id="descripcion" name="descripcion"required placeholder="Descripci&oacute;n"></textarea>
            </div>

            <div class="campo">
                <label for="imagen:"> Imagen:</label>
                <input type="file" id="imagen" name="imagen" required>
            </div>

            <div class="campo">
                <input type="submit" name="submit" class="button" value="Agregar Invitado">
            </div>

        </form>
    </section>
<?php include_once 'includes/templates/footer.php'?>