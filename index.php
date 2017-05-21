<?php include_once 'includes/templates/header.php'?>
    <script type="text/javascript" src="js/main.js"></script>
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
                <nav class="menu-programa">
                    <a href="#"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
                    <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
                    <a href="#"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
                </nav>

                <div id="talleres" class="info-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>HTML5, CSS3 y JavaScript</h3>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                        <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo De la torre Valdez</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Responsive Web Design</h3>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                        <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo De la torre Valdez</p>
                    </div>
                    <a href="#" class="button float-right">Ver todos</a>
                </div>
            </div>
        </div>
    </div>
  </section>

<!-- LA SECCIÓN DE INVITADOS VA AQUI -->
  <section class="invitados contenedor seccion" id="seccion-invitados">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="imagenes/invitado1.jpg" alt="imagen invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="imagenes/invitado2.jpg" alt="imagen invitado">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="imagenes/invitado3.jpg" alt="imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="imagenes/invitado4.jpg" alt="imagen invitado">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="imagenes/invitado5.jpg" alt="imagen invitado">
          <p>Harnold Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="imagenes/invitado6.jpg" alt="imagen invitado">
          <p>Susana Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

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
            <h3>Pase por d&iacute;a</h3>
            <p class="numero">$300</p>
            <ul>
              <li>Caracteristica 1</li>
              <li>Caracteristica 2</li>
              <li>Caracteristica 3</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los d&iacute;as</h3>
            <p class="numero">$500</p>
            <ul>
              <li>Caracteristica 1</li>
              <li>Caracteristica 2</li>
              <li>Caracteristica 3</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por dos d&iacute;as</h3>
            <p class="numero">$400</p>
            <ul>
              <li>Caracteristica 1</li>
              <li>Caracteristica 2</li>
              <li>Caracteristica 3</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
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
      <p>Registrate al newsletter</p>
      <h3>Conferencias</h3>
      <a href="#" class="button transparente">Registro</a>
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
