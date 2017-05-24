<?php
    include_once 'includes/funciones/funciones.php';
    session_start();
    usuario_autenticado();
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="admin seccion contenedor">
    <h2>Registrados</h2>
    <p>Bienvenido <?php echo $_SESSION['usuario']; ?> </p>

    <table class="registrados"">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha registro</th>
                <th>Articulos adquiridos</th>
                <th>Regalo</th>
                <th>Total pagado</th>
            </tr>
        </thead>

        <tbody>
            <?php
                try{
                    require_once ('includes/funciones/db_conexion.php');
                    $sql = "SELECT * FROM `registrados` INNER JOIN `regalos` ";
                    $sql .= "ON registrados.regalo=regalos.ID_regalo";
                    $resultado = $conn->query($sql);
                    while($registrados = $resultado->fetch_assoc() ){ ?>
                        <tr>
                            <td><?php echo $registrados['id_registrado'] ?></td>
                            <td><?php echo $registrados['nombre_registrado'] . " " . $registrados['apellido_registrado']; ?></td>
                            <td><?php echo $registrados['email_registrado'] ?></td>
                            <td><?php echo $registrados['fecha_registo'] ?></td>
                            <td><?php $articulos = $registrados['pases_articulos'];
                                    $pedido = formatear_pedido($articulos);
                                    echo $pedido;
                                ?>
                            </td>
                            <td><?php echo $registrados['nombre_regalo'] ?></td>
                            <td>$ <?php echo $registrados['pagado'] ?></td>
                        </tr>
                    <?php }
                    $conn->close();
                }catch (Exception $e){
                    $error = $e->getMessage();
                }
            ?>
        </tbody>
    </table>
</section>

<?php include_once 'includes/templates/footer.php';
