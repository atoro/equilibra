<?php include("Conexion.php"); 
	$listado = "select * from destacados  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$destacado1 = str_replace("\r\n","<br>",$rs["destacado1"]);
		$contenido1 = str_replace("\r\n","<br>",$rs["contenido1"]);
		$destacado2 = str_replace("\r\n","<br>",$rs["destacado2"]);
		$contenido2 = str_replace("\r\n","<br>",$rs["contenido2"]);
		$destacado3 = str_replace("\r\n","<br>",$rs["destacado3"]);
		$contenido3 = str_replace("\r\n","<br>",$rs["contenido3"]);
	}
	
	$listado = "select * from datos  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$datos = str_replace("\r\n","<br>",$rs["datos"]);
	
	}	
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>Capacitaciones Equilibra</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="font/stylesheet.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="imagenes/icon.png">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages('imagenes/twitter_on.png','imagenes/facebook_on.png')">
<div id="header">
	<div id="headerimgs">
		<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
</div>
<nav>
  <div class="botonera" id="botonera">
    <ul>
      <li><a href="index.php" class="botonera">Inicio</a></li>
      <li><a href="nuestroequipo.php" class="botonera">Nuestro Equipo</a></li>
      <li><a href="cursos.php" class="botonera">Cursos</a></li>
      <li><a href="clientes.php" class="botonera">Clientes</a></li>
      <li><a href="contacto.php" class="botonera">Contacto</a></li>
    </ul>
  </div>
</nav>
<div id="contenido">
  <table width="950" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="393" valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="364" valign="top"><table width="950" height="441" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="423" height="260" valign="top"><form name="form1" method="post" action="contacto.php">
                <table width="59%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="386" height="25" align="left" valign="top" class="texto">Nombre</td>
                  </tr>
                  <tr>
                    <td height="5" align="center"><input name="Nombre" type="text" class="textobox" id="Nombre" size="55" /></td>
                  </tr>
                  <tr>
                    <td height="5" align="left"></td>
                  </tr>
                  <tr>
                    <td height="25" align="left" valign="top" class="texto">Tel&eacute;fono</td>
                  </tr>
                  <tr>
                    <td align="center"><input name="Telefono" type="text" class="textobox" id="Telefono" size="55" /></td>
                  </tr>
                  <tr>
                    <td height="5" align="left"></td>
                  </tr>
                  <tr>
                    <td height="25" align="left" valign="top" class="texto">Correo electr&oacute;nico</td>
                  </tr>
                  <tr>
                    <td align="center"><input name="Email" type="text" class="textobox" id="Email" size="55" /></td>
                  </tr>
                  <tr>
                    <td height="5" align="left"></td>
                  </tr>
                  <tr>
                    <td height="25" align="left" valign="top" class="texto">Consulta</td>
                  </tr>
                  <tr>
                    <td align="center"><textarea name="Consulta" cols="40" rows="4" class="textobox" id="Consulta"></textarea></td>
                  </tr>
                  <tr>
                    <td height="5" align="left"></td>
                  </tr>
                  <tr>
                    <td align="center"><div><img src="/../securimage/securimage_show.php" alt="" name="captcha" id="captcha2" /></div></td>
                  </tr>
                  <tr>
                    <td height="22" align="center" valign="top"><div><a href="#" class="detalle_curso" onClick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">Refrescar la imagen</a></div></td>
                  </tr>
                  <tr>
                    <td height="16" align="left"></td>
                  </tr>
                  <tr>
                    <td height="25" align="left" valign="top" class="texto">C&oacute;digo de seguridad</td>
                  </tr>
                  <tr>
                    <td height="39" align="center" valign="top"><input name="captchacode" type="text" class="textobox" id="captchacode" size="15" /></td>
                  </tr>
                  <tr>
                    <td align="left"><div>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="100%" height="25" align="center" class="Letras3"><input name="Enviar" type="submit" class="Boton1" id="Enviar" value="Enviar" /></td>
                        </tr>
                      </table>
                    </div></td>
                  </tr>
                  <tr>
                    <td height="17" align="left"></td>
                  </tr>
                </table>
              </form></td>
              <td width="527" align="left" valign="top">
              
              <iframe width="527" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=rancagua&amp;aq=&amp;sll=-34.117469,-70.807695&amp;sspn=0.339375,0.616608&amp;ie=UTF8&amp;hq=&amp;hnear=Rancagua,+Provincia+de+Cachapoal,+Regi%C3%B3n+del+Libertador+General+Bernardo+O'Higgins&amp;t=m&amp;ll=-34.116921,-70.737534&amp;spn=0.255811,0.361176&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /></td>
            </tr>
            <tr>
              <td height="18" colspan="2" valign="top">&nbsp;</td>
            </tr>
          </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<div id="texto_destacados">
  <table width="950" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="28" class="destacados">Destacados</td>
    </tr>
    <tr>
      <td align="center"><img src="imagenes/dest.png" width="54" height="20"></td>
    </tr>
  </table>
</div>
<div id="contenido_destacados"> 
	<div id="destacados">
	  <table width="950" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td width="317" height="230" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="230" valign="top" bgcolor="#d27a35"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="60" class="destacados_texto"><?php echo $destacado1; ?></td>
	              </tr>
	            <tr>
	              <td valign="top" class="destacados_texto2"><?php echo $contenido1; ?></td>
	              </tr>
	            </table></td>
            </tr>
	        </table></td>
	      <td width="316" align="center" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="230" valign="top" bgcolor="#0d569a"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="60" class="destacados_texto"><?php echo $destacado2; ?></td>
	              </tr>
	            <tr>
	              <td valign="top" class="destacados_texto2"><p><?php echo $contenido2; ?></p></td>
	              </tr>
	            </table></td>
            </tr>
	        </table></td>
	      <td width="316" align="right" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="230" valign="top" bgcolor="#3E903F"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="60" class="destacados_texto"><?php echo $destacado3; ?></td>
	              </tr>
	            <tr>
	              <td valign="top" class="destacados_texto2"><?php echo $contenido3; ?></td>
	              </tr>
	            </table></td>
            </tr>
	        </table></td>
        </tr>
	    <tr>
	      <td height="18">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="90" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="70" bgcolor="#FFFFFF" class="descargarpdf">Descargar PDF</td>
            </tr>
	        </table></td>
	      <td align="center" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="70" bgcolor="#FFFFFF" class="descargarpdf">Descargar PDF</td>
            </tr>
	        </table></td>
	      <td align="right" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="70" bgcolor="#FFFFFF" class="descargarpdf">Descargar PDF</td>
            </tr>
	        </table></td>
        </tr>
      </table>
	</div>
</div>
<div id="redes_sociales"> 
	<div id="contenido_redes_sociales">
	  <table width="950" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="37">&nbsp;</td>
        </tr>
	    <tr>
	      <td class="destacados_texto">-SIGUENOS DONDE VAMOS-</td>
        </tr>
	    <tr>
	      <td height="120" align="center" valign="middle"><table width="100" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="29"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','imagenes/twitter_on.png',1)"><img src="imagenes/twitter.png" width="41" height="40" id="Image3"></a></td>
	          <td>&nbsp;</td>
	          <td><a href="https://www.facebook.com/capacitacion.equilibra?fref=ts" target="new" onMouseOver="MM_swapImage('Image4','','imagenes/facebook_on.png',1)" onMouseOut="MM_swapImgRestore()"><img src="imagenes/facebook.png" width="42" height="40" id="Image4"></a></td>
            </tr>
	        </table></td>
        </tr>
	    <tr>
	      <td class="destacados_texto2"><?php echo $datos; ?></td>
        </tr>
      </table>
	</div>
</div>
<footer>
  <table width="950" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="100" valign="middle" class="footer">Todos los derechos reserbados a Capacitaciones Equilibra</td>
    </tr>
  </table>
</footer>
</body>
</html>