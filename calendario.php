<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor" id="seccion-calendario">
    <h2>Calendario de eventos</h2>

    <?php
        try{
            require_once ('includes/funciones/db_conexion.php');
          //  $sql = "SELECT * FROM `eventos`";
            $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento` ";
            $sql .= "FROM `eventos` ";
            $sql .= "INNER JOIN `categoria_evento` ";
            $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
            $resultado = $conn->query($sql);
        }catch (Exception $e){
            $error = $e->getMessage();
        }
    ?>

<?php while ($eventos = $resultado->fetch_all(MYSQLI_ASSOC)) { ?>
  <pre>
    <?php var_dump($eventos); ?>
  </pre>
<?php } ?>
    <!--<?php while($eventos = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>
        <pre>
            <?php var_dump($eventos); ?>
        </pre>
    <?php } ?>-->

</section>

<?php include_once 'includes/templates/footer.php'; ?>
