<?php
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE servicios SET titulo ='".$_POST["titulo"]."',descripcion ='".$_POST["descripcion"]."',descripcioncompleta ='".$_POST["descripcioncompleta"]."'   WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un producto: ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="servicios.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar producto</title>
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php 
$listado = "select * from  servicios where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form id="form1" name="form1" method="post" action="editarservicios.php?id=<?php echo $_GET["id"]; ?>">
  <table width="50%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81%" valign="top"><p>
        <label>
          <input name="Modificar" type="submit" class="textobox3" id="Modificar" value="Modificar" />
          </label>
        </p>
        <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="29%" align="right" valign="top" class="textobox">&nbsp;</td>
            <td width="71%" valign="top" class="Letras1"><label for="titulo"></label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="titulos">Titulo&nbsp;</td>
            <td valign="top" class="Letras1"><input name="titulo" type="text" id="titulo" value="<?php echo $rs["titulo"]; ?>" /></td>
          </tr>
          <tr>
            <td height="122" valign="top" class="textobox"><div align="right" class="titulo"><span class="titulos">Descripci&oacute;n &nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="descripcion" cols="40" rows="5" class="Letras1" id="descripcion"><?php echo $rs["descripcion"]; ?></textarea>
            </span></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="98" valign="top"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="29%" height="98" valign="top" class="textobox"><div align="right" class="titulo"><span class="titulos">Descripcion Completa&nbsp;</span></div></td>
          <td width="71%" valign="top" class="Letras1"><span class="textobox">
            <textarea name="descripcioncompleta" cols="40" rows="5" class="Letras1" id="descripcioncompleta"><?php echo $rs["descripcioncompleta"]; ?></textarea>
            </span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>
