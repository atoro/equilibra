<?php
session_start();
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update nosotros set titulo  = '$_POST[titulo]',descripcion  ='$_POST[descripcion]' ";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<link href="../estilos.css" rel="stylesheet" type="text/css">
<link href="../css/all.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<title>nosotros</title></head>

<body onLoad="MM_preloadImages('Botones/on/inicio_on.jpg','Botones/on/productos_on.jpg','Botones/on/mercado_on.jpg','Botones/on/certificaciones_on.jpg','Botones/on/demostraciones_on.jpg','Botones/on/distribuidores_on.jpg','Botones/on/quienes_somos_on.jpg','Botones/on/mision_vision_on.jpg','Botones/on/noticias_on.jpg','Botones/on/link_interes_on.jpg','Botones/on/contactenos_on.jpg','Botones/on/galeria_fotos_on.jpg')">
  <?php
	$listado = "select * from nosotros";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo = $rs["titulo"];
		$descripcion = $rs["descripcion"];	
	}
	?>
  <form id="form1" name="form1" method="post" action="nosotros.php">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="40" colspan="2"><div align="center" class="titulos"><strong>Nosotros</strong></div></td>
      </tr>
      <tr>
        <td height="24" valign="top" class="Letras1"><div align="right" class="textocontenido"><span class="titulos">Titulo</span>&nbsp;</div></td>
        <td valign="top"><label>
          <input name="titulo" type="text" class="textopreguntas" id="titulo" value="<?php echo $titulo; ?> " size="50">
        </label></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td width="36%" height="144" valign="top"><div align="right"><span class="titulos">Contenido</span>&nbsp;</div></td>
        <td width="64%" valign="top"><textarea name="descripcion" cols="50" rows="8" id="descripcion"><?php echo $descripcion; ?> </textarea></td>
      </tr>
      <tr>
        <td valign="top" class="Letras1"><div align="right"><a href="../imagenes/nosotros/Upload_foto.php?id=1" class="titulos">Cambiar Imagen</a><a href="../imagenes/destacados/Upload_foto.php?id=ima2" class="texto"></a><span class="textocontenido">&nbsp;</span></div></td>
        <td valign="top"><img src="../imagenes/nosotros/1.jpg" width="457" height="282"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <p>
            <label>
              <input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" />
            </label>
          </p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="textosadmin">Volver</a></p>
</form>
</body>
</html>
