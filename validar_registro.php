  <?php if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total-pedido'];
    $fecha = date('Y-m-d H:i:s');

    //Pedidos
    $boletos = $_POST['boletos'];
    $camisas = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];

    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($boletos, $etiquetas, $etiquetas);

    //eventos
    $eventos = $_POST['registro'];
    $registro = eventos_json($eventos);

    try{
        require_once ('includes/funciones/db_conexion.php');
        $result = mysqli_query($conn,"INSERT INTO registrados VALUES ($nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total)");
        if($result || $result == null){
            header('Location: validar_registro.php?exitoso=2');
        }else{
            header('Location: validar_registro.php?exitoso=1');
        }
        header('Location: validar_registro.php?exitoso=1');
    }catch (Exception $e){
        $error = $e->getMessage();
    }
    ?>
  <?php } ?>
  <?php include_once 'includes/templates/header.php' ?>

  <section class="seccion-contenedor">
      <h2>Resumen registro</h2>
      <?php if (isset($_GET['exitoso'])) {
          if ($_GET['exitoso'] == "1") {
              echo "<script>alert('Registro exitoso')</script>";
          }else{
              echo "<script>alert('Ocurrio un error, vuelva a intentarlo')</script>";
          }
      } ?>
  </section>

<?php include_once 'includes/templates/footer.php' ?>
