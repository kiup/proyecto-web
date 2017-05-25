<?php include_once 'includes/funciones/funciones.php';
    session_start();
    usuario_admin_autenticado();
?>

<?php include_once 'includes/templates/barra.php';?>

    <header>
        <link href="css/admin.css" rel="stylesheet" type="text/css">
        <link href="css/registro.css" rel="stylesheet" type="text/css">
    </header>
    <section class="admin seccion contenedor">
        <h2>Panel Administraci&oacute;n</h2>
        <p>Bienvenido <?php echo $_SESSION['usuario'];?><p/>
        <?php include_once 'includes/templates/admin-header.php'?>
    </section>
<?php include_once 'includes/templates/footer.php'?>
