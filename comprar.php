<?php
session_start();
if(!isset($_SESSION['tipoCuenta'])){
  header("Location: index.html");
}

$idBoleto = $_POST['id_boleto'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];

$opcionPago1 [1]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='8QZADEV5J49VL'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [2]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='89MXNUEV82EYY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [3]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='8LGZYFM6SQEA6'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [4]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='EESWNLSF9BJ5E'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [5]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='QUSRLQFNB77CU'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [6]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='75CFYD7EY6SJS'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [7]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='4LGZDZU3BK37A'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [8]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='A9WFMW3BGQQQU'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [9]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='BC3TFSJMVDCBG'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [10]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='S6BKX9SK8EW4N'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [11]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='SXZC2V2SJWGAU'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [12]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='8C4E9UFNN4CG2'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [13]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='Y8B65Q22AN9V6'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [14]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='ZKKGVNTKJYDRL'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [15]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='GUWDXC6ESY7YY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [16]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='U4QSWY4UAUHVA'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [17]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='R4QC7LECNJR8N'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [18]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='CK3ZMCCRG3UMC'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [19]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='FKE3SFL3XKMWY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";
$opcionPago1 [20]="<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
  <input type='hidden' name='cmd' value='_s-xclick'>
  <input type='hidden' name='hosted_button_id' value='LGKWP69JKT7SY'>
  <input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
  <img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
  </form>";

require 'conexionBD.php';
$consulta = $conexion->query("SELECT * FROM `recorridos` WHERE ID_recorridos='$idBoleto'");

if (mysqli_num_rows($consulta) > 0) {
    $recorrido = mysqli_fetch_array($consulta);
    date_default_timezone_set("America/Mexico_City");
    $horaCompra =date("H:i",time());
    $FechaCompra = date("Y-m-d",time());
    
    $conexion->query("INSERT INTO `boletos` (`Precio_Boleto`, `Hora_Compra`, `Fecha_Compra`, `Codigo`, `id_Usuario`) 
    VALUES ($recorrido[Precio], '$horaCompra', '$FechaCompra', '$recorrido[ID_recorridos]', '$_SESSION[id]')");
}else{
    echo"Recorrido no encontrado. Verifique dato";
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
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
              <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
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
              <p>Correo de contacto: $correo</p>
              <p>Numero de contacto: $telefono</p><br>";
            for ($i = 0; $i <= sizeof($opcionPago1); $i++) { 
              if ($idBoleto == $i) {
               echo $opcionPago1[$i];
               $i=21;
              }
            }
          ?>
          <!--<p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
        -->
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Menu</span>Auxiliar</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Eligenos</a></li>
              <li><a href="#">¿Quienes somos?</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Archives</a></li>
              <li><a href="#">Web Templates</a></li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>ALIADOS EN NUESTROS VIAJES</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="http://www.dreamtemplate.com/">¿Necesitas mas de un asiento?</a><br />
                Contamos con servicio especial para agencias de viajes</li>
              <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
                Premium WordPress &amp; Joomla Themes</li>
              <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
                Affordable Web Hosting Provider</li>
              <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
                Unlimited Amazing Stock Photos</li>
              <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
                Website Builder Software &amp; Tools</li>
              <li><a href="http://www.csshub.com/">CSS Hub</a><br />
                Premium CSS Templates</li>
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
          <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a>
        </div>
        <div class="col c2">
          <h2><span>Services</span> Overview</h2>
          <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus
            vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
          <ul class="fbg_ul">
            <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
            <li><a href="#">Excepteur officia deserunt.</a></li>
            <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
          </ul>
        </div>
        <div class="col c3">
          <h2><span>Medios</span> De Contacto</h2>
          <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida
            gravida eu porttitor dui.</p>
          <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
            <span>Telephone:</span> +123-1234-5678<br />
            <span>FAX:</span> +458-4578<br />
            <span>Others:</span> +301 - 0125 - 01258<br />
            <span>E-mail:</span> <a href="#">mail@yoursitename.com</a>
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