<?php
session_start();
if (!isset($_SESSION['tipoCuenta'])) {
  header("Location: index.html");
}

$idBoleto = $_POST['id_boleto'];

$opcionPago1[1] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='8QZADEV5J49VL'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[2] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='89MXNUEV82EYY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[3] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='8LGZYFM6SQEA6'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[4] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='EESWNLSF9BJ5E'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[5] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='QUSRLQFNB77CU'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[6] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='75CFYD7EY6SJS'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[7] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='4LGZDZU3BK37A'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[8] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='A9WFMW3BGQQQU'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[9] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='BC3TFSJMVDCBG'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[10] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='S6BKX9SK8EW4N'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[11] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='SXZC2V2SJWGAU'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[12] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='8C4E9UFNN4CG2'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[13] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='Y8B65Q22AN9V6'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[14] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='ZKKGVNTKJYDRL'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[15] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='GUWDXC6ESY7YY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[16] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='U4QSWY4UAUHVA'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[17] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='R4QC7LECNJR8N'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[18] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='CK3ZMCCRG3UMC'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[19] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='FKE3SFL3XKMWY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1[20] = "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='LGKWP69JKT7SY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";

require 'conexionBD.php';
$consulta = $conexion->query("SELECT * FROM `recorridos` WHERE ID_recorridos='$idBoleto'");

if (mysqli_num_rows($consulta) > 0) {
  $recorrido = mysqli_fetch_array($consulta);
  $consulta = $conexion->query("SELECT Nombre_Usuario, Correo_Electronico, Telefono FROM usuarios WHERE ID_usuarios='$_SESSION[id]'");
  $usuario = mysqli_fetch_array($consulta);
  date_default_timezone_set("America/Mexico_City");
  $horaCompra = date("H:i", time());
  $FechaCompra = date("Y-m-d", time());

  $conexion->query("INSERT INTO `boletos` (`Precio_Boleto`, `Hora_Compra`, `Fecha_Compra`, `Codigo`, `id_Usuario`) 
    VALUES ($recorrido[Precio], '$horaCompra', '$FechaCompra', '$recorrido[ID_recorridos]', '$_SESSION[id]')");
} else {
  echo "Recorrido no encontrado. Verifique dato";
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
              <p>Precio: $$recorrido[Precio]</p>
              <p>Nombre: $usuario[Nombre_Usuario]</p>
              <p>Correo de contacto: $usuario[Correo_Electronico]</p>
              <p>Numero de contacto: $usuario[Telefono]</p><br>";
          for ($i = 0; $i <= sizeof($opcionPago1); $i++) {
            if ($idBoleto == $i) {
              echo $opcionPago1[$i];
              $i = 21;
            }
          }
          ?>
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