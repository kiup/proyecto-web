<?php include_once 'includes/templates/header.php' ?>

<h2>Comentarios y Sugerencias</h2>
<form name="comentarios" action="mail.php" method="post">
  <section class="seccion contenedor" >
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="tu nombre">
    </div>
    <br>
    <div>
      <label for="email">Email: </label>
      <input type="text" id="email" name="email" placeholder="tu email">
    </div>
    <br>
    <label>Comentarios o Sugerencias: </label>
    <div>
      <textarea id="comentarios" name="comentarios" placeholder="tus comentarios y sugerencias aqui" rows="10" cols="50"></textarea>
    </div>
    <input id="btnEnviar" type="submit" name="submit" class="button">
  </section>
</form>

<?php include_once 'includes/templates/footer.php' ?>
