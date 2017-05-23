<?php
try{
    require_once ('includes/funciones/db_conexion.php');
    $sql = "SELECT * FROM `invitados`  ";
    $resultado = $conn->query($sql);
}catch (Exception $e){
    $error = $e->getMessage();
}
?>

    <section class="invitados contenedor seccion" id="seccion-invitados">
        <h2>Nuestros invitados</h2>
        <ul class="lista-invitados clearfix">

            <?php while($invitados = $resultado->fetch_assoc() ) { ?>
                <li>
                    <div class="invitado">
                        <img src="imagenes/<?php echo $invitados['uri_imagen']?>" alt="imagen invitado">
                        <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </section>

<?php
$conn->close();
?>