<?php include_once 'includes/templates/header.php'?>
  <section class="seccion contenedor">
    <h2>La mejor p&aacute;gina de conferencias en M&eacute;rida</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </section>

  <section class="programa" id="seccion-programa">
    <div class="contenedor-video">
        <video autoplay loop poster="bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.webm" type="video/webm">
            <source src="video/video.ogv" type="video/ogv">
        </video>
    </div><!-- Contenedor video -->
    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
                <h2>Programa del evento</h2>
                <?php
                    try{
                        require_once ('includes/funciones/db_conexion.php');
                        $sql = "SELECT * FROM `categoria_evento` ";
                        $resultado = $conn->query($sql);
                    }catch (Exception $e) {
                        $error = $e -> getMessage();
                    }
                ?>
                <nav class="menu-programa">
                    <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <?php $categoria = $cat['cat_evento']; ?>
                            <a href="#<?php echo strtolower($categoria) ?>" id="<?php echo strtolower($categoria) ?>" class="" onclick="cambiarMenu(this.id)">
                                <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                            </a>
                    <?php } ?>
                </nav>
                <?php
                try{
                    require_once ('includes/funciones/db_conexion.php');
                    $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                    $sql .= "FROM `eventos` ";
                    $sql .= "INNER JOIN `categoria_evento` ";
                    $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                    $sql .= "INNER JOIN `invitados` ";
                    $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                    $sql .= "AND eventos.id_cat_evento = 1 ";
                    $sql .= "ORDER BY `evento_id` LIMIT 2;";

                    $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                    $sql .= "FROM `eventos` ";
                    $sql .= "INNER JOIN `categoria_evento` ";
                    $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                    $sql .= "INNER JOIN `invitados` ";
                    $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                    $sql .= "AND eventos.id_cat_evento = 2 ";
                    $sql .= "ORDER BY `evento_id` LIMIT 2;";

                    $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                    $sql .= "FROM `eventos` ";
                    $sql .= "INNER JOIN `categoria_evento` ";
                    $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                    $sql .= "INNER JOIN `invitados` ";
                    $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                    $sql .= "AND eventos.id_cat_evento = 3 ";
                    $sql .= "ORDER BY `evento_id` LIMIT 2;";
                }catch (Exception $e){
                    $error = $e->getMessage();
                }
                ?>

                <?php $conn->multi_query($sql); ?>

                <?php
                    do{
                        $resultado = $conn->store_result();
                        $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

                        <?php $i = 0; ?>
                        <?php foreach ($row as $evento): ?>
                            <?php if($i % 2 == 0){?>
                                <div id="div-<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix" style="display: none">
                            <?php } ?>
                                <div class="detalle-evento">
                                    <h3><?php echo utf8_encode($evento['nombre_evento']) ?></h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                                    <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado']; ?></p>
                                </div>

                                <?php if($i % 2 == 1): ?>
                                    <a href="calendario.php" class="button float-right">Ver todos</a>
                                    </div>
                                <?php endif ?>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                            <?php $resultado->free(); ?>
                <?php } while ($conn->more_results() && $conn->next_result()); ?>
            </div>
        </div>
    </div>
  </section>

<!-- LA SECCIÓN DE INVITADOS VA AQUI -->
<?php include_once 'includes/templates/invitados.php'; ?>
  <!-- Termina sección invitados-->

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">6</p> Invitados</li>
        <li><p class="numero">15</p> Talleres</li>
        <li><p class="numero">3</p> D&iacute;as</li>
        <li><p class="numero">9</p> Conferencias</li>
      </ul>
    </div>
  </div><!-- contador -->

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por Viernes</h3>
            <p class="numero">$300</p>
            <ul>
              <li>Caracteristica 1</li>
              <li>Caracteristica 2</li>
              <li>Caracteristica 3</li>
            </ul>
            <a href="registro.php" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por S&aacute;bado</h3>
            <p class="numero">$500</p>
            <ul>
              <li>Caracteristica 1</li>
              <li>Caracteristica 2</li>
              <li>Caracteristica 3</li>
            </ul>
            <a href="registro.php" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por D&oacute;mingo</h3>
            <p class="numero">$400</p>
            <ul>
              <li>Caracteristica 1</li>
              <li>Caracteristica 2</li>
              <li>Caracteristica 3</li>
            </ul>
            <a href="registro.php" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa">

  </div>

  <!--LA SECCION DE TESTIMONIALES VA AQUI-->
  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Contacto</p>
      <h3>Envianos tus comentarios y sugerencias</h3>
      <a href="comentarios_y_sugerencias.php" class="button transparente">Enviar</a>
    </div> <!--contenido-->
  </div> <!--newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p class="numero">8</p>D&iacute;as</li>
        <li><p class="numero">15</p>Horas</li>
        <li><p class="numero">5</p>Minutos</li>
        <li><p class="numero">30</p>Segundos</li>
      </ul>
    </div>
  </section>
  </div>

<!--TESTIMONIALES-->
<section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.</p>
                <footer class="info-testimonial clearfix">
                    <img src="imagen.png" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.</p>
                <footer class="info-testimonial clearfix">
                    <img src="imagen.png" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.</p>
                <footer class="info-testimonial clearfix">
                    <img src="imagen.png" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
<!--TESTIMONIALES-->

<?php include_once 'includes/templates/footer.php'?>
