<?php include_once 'includes/funciones/funciones.php';
session_start();
usuario_admin_autenticado();
?>

<?php include_once 'includes/templates/header.php';?>
    <header>
        <link href="css/admin.css" rel="stylesheet" type="text/css">
        <link href="css/registro.css" rel="stylesheet" type="text/css">
    </header>
    <section class="admin section contenedor">
        <h2>Agregar Evento</h2>
        <p>Bienvenido <?php echo $_SESSION['usuario'];?><p/>
        <?php include_once 'includes/templates/admin-header.php'?>

        <form class="invitado" action="agregar_evento.php" method="POST">
            <div class="campo">
                <label for="nombre"> Nombre Evento:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Nombre">
            </div>
            <div class="campo">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="campo">
                <label for="hora"> Hora:</label>
                <input type="time" id="hora" name="hora" requiredlnioj>
            </div>
            <div class="campo">
                <input type="submit" name="submit" class="button" value="Agregar Invitado">
            </div>

        </form>
    </section>
<?php include_once 'includes/templates/footer.php'?>