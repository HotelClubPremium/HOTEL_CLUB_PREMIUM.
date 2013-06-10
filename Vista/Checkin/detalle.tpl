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
<h2>DETALLE DE TARJETA REGISTRO</h2>
<form action="/HOTEL_CLUB_PREMIUM/Checkin/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Numero checkin</th>
  
      <td><input name="num_checkin" id="num_checkin" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $checkin->getNum_checkin();?> /></td>
  </tr>
  <tr>
      
      <th scope="row">Codigo cliente</th>

      <td><input name="cod_usuario" id="cod_usuario" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getCod_usuario();?> /></td>
  </tr>
 
   <tr>

    <th scope="row">Fecha llegada</th>
      <td><input name="fecha_llegada" id="fecha_llegada" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_llegada()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
   <tr>

    <th scope="row">Fecha reserva</th>
      <td><input name="fecha_reserva" id="fecha_reserva" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_reserva()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
    <tr>

    <th scope="row">Fecha inicio</th>
      <td><input name="fecha_inicio" id="fecha_inicio" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_inicio()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
    <tr>

    <th scope="row">Fecha salida</th>
      <td><input name="fecha_salida" id="fecha_salida" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_salida()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
 
  
  <tr>
   <td colspan="2"><input name="modificarcheckin" id="modificarcheckin" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input name="eliminarcheckin" id="eliminarcheckin" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
</body>
</html>