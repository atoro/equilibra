<?php
session_start();
include("../Conexion.php");
if ($_POST["Grabar"]){
	$insertar="INSERT INTO galeria (titulo,servicios) 
		VALUES('$_POST[titulo]','$_GET[servicios]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un nuevo link: ".mysql_error);

}
if ($_GET["fun"] =="eli"){
	$insertar = "delete from galeria WHERE id = '".$_GET["foto"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un mensaje: ".mysql_error);
	$dir="../galeriaservicios/galeria/". $_GET["foto"] .".jpg";
	if(file_exists($dir)) { 
		if(unlink($dir)) 
			print ""; 
		} else 
			print "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>editar galeria</title>
<link href="file:///Compartida/Trabajos/Desarrollo web/juan quinteros/letras.css" rel="stylesheet" type="text/css" />
<link href="file:///Compartida/Trabajos/Desarrollo web/juan quinteros/css/letras.css" rel="stylesheet" type="text/css" />
<link href="file:///Compartida/Trabajos/Desarrollo web/juan quinteros/admin/letras.css" rel="stylesheet" type="text/css" />
<link href="file:///Compartida/Trabajos/Desarrollo web/juan quinteros/css/estilos.css" rel="stylesheet" type="text/css" />
<link href="file:///Compartida/Trabajos/Desarrollo web/juan quinteros/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="galeria.php?servicios=<?php echo $_GET["servicios"]; ?>">
  <table width="50%" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="textotitulospropiedades">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="19%" class="titulos">Titulo</td>
          <td width="81%"><label for="titulo"></label>
            <input name="titulo" type="text" id="titulo" size="50" /></td>
        </tr>
        <tr>
          <td colspan="2"><label for="Tipo"></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p align="center"><a href="servicios.php" class="textosadmin">Volver</a></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php 
$listado = "select * from  galeria where servicios = '$_GET[servicios]' ";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>

  <tr>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeriaservicios/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&servicios=<?php echo $_GET["servicios"]; ?>" class="titulos">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeriaservicios/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>"" class="titulos">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeriaservicios/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="titulos">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeriaservicios/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center" class="texto_f"><a href="galeria.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>"" class="titulos">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeriaservicios/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="titulos">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeriaservicios/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center" class="texto_f"><a href="galeria.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>"" class="titulos">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../galeriaservicios/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>" class="titulos">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../galeriaservicios/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center" class="texto_f"><a href="galeria.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;servicios=<?php echo $_GET["servicios"]; ?>"" class="titulos">Eliminar</a></td>
      </tr>
    </table></td>
  </tr>
  <?php }}}} ?>
</table>
<p>&nbsp;</p>
</body>
</html>