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
<h2 align="center">DETALLE DE HABITACION</h2>
<form action="/HOTEL_CLUB_PREMIUM/Habitacion/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="2" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <th width="197" scope="row">Numero De Habitacion</th>
  <!--  <td width="211"><a href="/Habitacion/detalle/<?php echo $habitacion->getNum_habitacion();?>"><?php echo $habitacion->getNum_habitacion();?></a></td>-->
      <td><input name="num_habitacion" id="num_habitacion" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $habitacion->getNum_habitacion();?> /></td>
  </tr>
  <tr>
      
      <th scope="row">Tipo De Habitacion</th>
   <!-- <td><?php echo $habitacion->getTipo();?></td>-->
      <td><input name="tipo" id="tipo" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $habitacion->getTipo();?> /></td>
  </tr>
  <tr>
    <th scope="row">Precio de Habitacion</th>
   <!-- <td><?php echo $habitacion->getPrecio();?></td>-->
      <td><input name="precio" id="precio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $habitacion->getPrecio();?> /></td>
  </tr>

    <th scope="row">Disponibilidad</th>
      <td><input name="disponibilidad" id="disponibilidad" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $habitacion->getDisponibilidad();?> /></td>
   <!-- <td><?php echo $habitacion->getDisponibilidad();?></td>-->
  </tr>
 
  
  <tr>
   <td colspan="2"><input name="modificarhabitacion" id="modificarhabitacion" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input name="eliminarhabitacion" id="eliminarhabitacion" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
</body>
</html>