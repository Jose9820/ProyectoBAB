<?php
session_start();
if (!isset($_SESSION['tipoCuenta'])) {
  header("Location: index.html");
}

$idBoleto = $_POST['id_boleto'];
require 'conexionBD.php';

$consulta = $conexion->query("SELECT * FROM `recorridos` WHERE ID_recorridos='$idBoleto'");

if (mysqli_num_rows($consulta) > 0) {
  $recorrido = mysqli_fetch_array($consulta);
} else {
  mysqli_close($conexion);
  header("location: recorridos.php");
}
mysqli_close($conexion);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AGENCIA BAB. TU DESTINO SEGURO</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>

<body>
  <div class="main">
    <div class="header">
      <div class="header_resize">
        <div class="logo">
          <h1><a href="bienvenida.php">AGENCIA <span>BAB</span> <small>Recoriendo el camino contigo</small></a></h1>
        </div>
        <div class="searchform">
          <span>
            <br><br>
            <p><?php echo $_SESSION['tipoCuenta']; ?></p>
          </span>
        </div>
        <div class="clr"></div>
        <div class="menu_nav">
          <ul>
            <li><a href="bienvenida.php"><span>BIENVENIDO</span></a></li>
            <li class="active"><a href="recorridos.php"><span>RUTAS Y HORARIOS</span></a></li>
            <li><a href="boletos.php"><span>BOLETOS</span></a></li>
            <li><a href="agenciaBAB.php"><span>AGENCIA BAB</span></a></li>
            <li><a href="cerrarSesion.php"><span>SALIR</span></a></li>
          </ul>
        </div>
        <div class="clr"></div>
        <div class="slider">
          <div id="coin-slider">
            <a href="agenciaBAB.php"><img src="images/imagen1.png" width="960" height="360" alt="" />
              <span>Crea tus mejores recuerdos en nuestros viajes, los mejores lugares te esperan. Descubre nuevas experiencias.</span></a>
            <a href="recorridos.php"><img src="images/slide2.jpg" width="960" height="360" alt="" />
              <span>No sabes a donde ir, que lugares visitar o buscar nuevos destinos, nosostros podemos ayudarte. Visita nuestra sección de
                rutas y horarios y alistate a la aventura.
              </span></a>
            <a href="boletos.php"><img src="images/camion3.png" width="960" height="360" alt="" />
              <span>Viajar con nosotros es muy facil. Si ya adquiriste tu boleto y estas list@ para la aventura solo necesitas llevarlo
                impreso el dia del viajes. Puedes verificar y cancelar tus compras en la seccion de boletos, tambien puedes descargar tu
                boleto en esta sección</span></a>
          </div>
          <div class="clr"></div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
    <div class="content">
      <div class="content_resize">
        <div class="mainbar">
          <h2>Comprar es muy facil. Solo elige tu recorrido favorito y una opcion de pago disponible:</h2>
          <p><b>Datos del recorrido a comprar:</b></p>
          <?php
          echo "<p>Lugar de destino: $recorrido[Lugar_Destino]</p>
              <p>Lugar de partida: $recorrido[Lugar_Partida]</p>
              <p>Hora y fecha: $recorrido[Hora], $recorrido[Fecha]</p>
              <p>Precio: $$recorrido[Precio]</p>";
          ?>
          <p><b>Introduzca sus datos personales:</b></p>
          <form action="comprar.php" method="POST">
            <label>Telefono movil:</label><br />
            <input type="text" id="movil" name="telefono" value="" size="8" maxlength="9" /><br />
            <br />
            <label>Email:</label><br />
            <input type="text" id="email1" name="email" value="" size="25" /><br />
            <br />
            <input type="hidden" name="id_boleto" value="<?php echo "$idBoleto"; ?>">
            <input type="submit" value="Comprar">
          </form>
          <!--<p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
        -->
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>ALIADOS EN NUESTROS VIAJES</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="https://www.bestday.com.mx/">¿Necesitas reservar un hotel?</a><br />
                Contamos con servicio especial para agencias de viajes</li>
              <li><a href="http://www.templatesold.com/">Paquetes sugeridos</a><br />
                Paquetes numero uno</li>
              <li><a href="http://www.imhosted.com/">Ofertas</a><br />
                Aprovecha Ofertas</li>
              <li><a href="http://www.megastockphotos.com/">Zonas turisticas</a><br />
                Las mejores 5 zonas turisticas</li>
              <li><a href="http://www.evrsoft.com/">Playas</a><br />
                Las mejores playas</li>
              <li><a href="http://www.csshub.com/">Zonas Arqueológicas</a><br />
                Las mejores 5 Zonas Arqueológicas</li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Menu</span>Auxiliar</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="bienvenida.php">Bienvenido</a></li>
              <li><a href="recorridos.php">Rutas y horarios</a></li>
              <li><a href="boletos.php">Boletos</a></li>
              <li><a href="agenciaBAB.php">Agencia BAB</a></li>
              <li><a href="cerrarSesion.php">Salir</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
    <div class="fbg">
      <div class="fbg_resize">
        <div class="col c1">
          <h2><span>Image</span> Gallery</h2>
          <a href="#"><img src="images/imagen3.jpg" width="75" height="75" alt="" class="gal" /></a>
          <a href="#"><img src="images/imagen4.jpg" width="75" height="75" alt="" class="gal" /></a>
          <a href="#"><img src="images/imagen5.jpg" width="75" height="75" alt="" class="gal" /></a>
          <a href="#"><img src="images/imagen6.jpg" width="75" height="75" alt="" class="gal" /></a>
          <a href="#"><img src="images/imagen7.jpg" width="75" height="75" alt="" class="gal" /></a>
          <a href="#"><img src="images/imagen8.jpg" width="75" height="75" alt="" class="gal" /></a>
        </div>
        <div class="col c2">
          <h2><span>Servicios</span> Hoteles</h2>
          <p>Sigue el enlace de estas paginas y reserva un hotel</p>
          <ul class="fbg_ul">
            <li><a href="#">https://www.bestday.com.mx/</a></li>
            <li><a href="#">https://hiphoteltulum.com/</a></li>
            <li><a href="#">https://www.hardrockhotels.com/</a></li>
          </ul>
        </div>
        <div class="col c3">
          <h2><span>Medios</span> De Contacto</h2>
          <p>Contactanos los 365 dias del año</p>
          <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
            <span>Telefono:</span> 7121654210<br />
            <span>Facebook:</span> AgenciaBAB<br />
            <span>Instagram:</span> agenciabab<br />
            <span>Correo:</span> <a href="#">agenciaBAB@gmail.com</a>
          </p>
        </div>
        <div class="clr"></div>
      </div>
    </div>
    <div class="footer">
      <div class="footer_resize">
        <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
        <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
        <div style="clear:both;"></div>
      </div>
    </div>
  </div>
</body>

</html>