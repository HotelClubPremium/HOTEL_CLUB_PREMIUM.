<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $titulo; ?></title>
    </head>
<body>
<p>
          <?php include HOME . DS . 'includes' . DS . 'menu.php'; ?>
        </p>
       
<h2 align="center">DETALLE DE servicios</h2>
<form action="/HOTEL_CLUB_PREMIUM/servicio/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="2" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <th width="197" scope="row">Numero Del servicio</th>
      <td><input name="cod_servicio" id="cod_servicio" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $servicios->getCod_servicio();?> /></td>
  </tr>
  <tr>
      
      <th scope="row"> NOMBRE</th>
      <td><input name="nombre" id="nombre" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $servicios->getNombre();?> /></td>
  </tr>
  <tr>
    <th scope="row">Precio de SERVICIO</th>
  
      <td><input name="precio" id="precio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $servicios->getPrecio();?> /></td>
  </tr>

    <th scope="row">Disponibilidad</th>
      <td><input name="horario_disponible" id="horario_disponible" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $servicios->getHorario_disponible();?> /></td>
  
  </tr>
  <tr>
   <td colspan="2"><input name="modificarservicio" id="modificarservicio" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input name="eliminarservicio" id="eliminarservicio" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
</body>
</html>