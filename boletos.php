<?php
session_start();
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
                    <h1><a href="bienvenida.html">AGENCIA <span>BAB</span> <small>Recoriendo el camino contigo</small></a></h1>
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
                        <li><a href="bienvenida.html"><span>BIENVENIDO</span></a></li>
                        <li><a href="recorridos.php"><span>RUTAS Y HORARIOS</span></a></li>
                        <li class="active"><a href="boletos.php"><span>BOLETOS</span></a></li>
                        <li><a href="usuario.php"><span>USUARIO</span></a></li>
                        <li><a href="agenciaBAB.html"><span>AGENCIA BAB</span></a></li>
                    </ul>
                </div>
                <div class="clr"></div>
                <div class="slider">
                    <div id="coin-slider">
                        <a href="agenciaBAB.html"><img src="images/imagen1.png" width="960" height="360" alt="" />
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
                    <div class="boletos">
                        <?php
                        if ($_SESSION['tipoCuenta'] == "Administrador") {
                            echo "<h2>Boletos adquiridos por los usuarios:</h2>";
                        }
                        if ($_SESSION['tipoCuenta'] == "Cliente" or $_SESSION['tipoCuenta'] == "Terceros") {
                            echo "<h2>Boletos comprados:</h2>";
                        }
                        ?>
                        <table>
                            <tr class="camposTabla">
                                <th>ID boleto</th>
                                <th>Precio</th>
                                <th>Hora</th>
                                <th>Fecha</th>
                                <th>Codigo</th>
                                <th>ID usuario</th>
                                <th>Más detalles</th>
                            </tr>
                            <?php
                            require 'conexionBD.php';

                            if ($_SESSION['tipoCuenta'] == "Administrador") {
                                $tablaBoletos = $conexion->query("SELECT * FROM `boletos` ");
                                while ($registro = mysqli_fetch_array($tablaBoletos)) {
                                    echo "<tr>
                                            <td>$registro[ID_boleto]</td>
                                            <td>$registro[Precio_Boleto]</td>
                                            <td>$registro[Hora_Compra]</td>
                                            <td>$registro[Fecha_Compra]</td>
                                            <td>$registro[Codigo]</td>
                                            <td>$registro[id_Usuario]</td>
                                            <td><button name='ver' id='btnVer'>Ver</button></td>
                                         </tr>";
                                }
                            }
                            if ($_SESSION['tipoCuenta'] == "Cliente" or $_SESSION['tipoCuenta'] == "Terceros") {
                                $tablaBoletos = $conexion->query("SELECT * FROM `boletos` WHERE id_Usuario = '$_SESSION[id]'");
                                while ($registro = mysqli_fetch_array($tablaBoletos)) {
                                    echo "<tr>
                                            <td>$registro[ID_boleto]</td>
                                            <td>$registro[Precio_Boleto]</td>
                                            <td>$registro[Hora_Compra]</td>
                                            <td>$registro[Fecha_Compra]</td>
                                            <td>$registro[Codigo]</td>
                                            <td>$registro[id_Usuario]</td>
                                            <td><button name='ver' id='btnVer'>Ver</button></td>
                                         </tr>";
                                }
                            }

                            mysqli_close($conexion);
                            ?>
                        </table>
                    </div>
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