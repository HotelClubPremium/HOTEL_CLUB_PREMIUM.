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
<form action="/HOTEL_CLUB_PREMIUM/Tarjeta_registro/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Numero De checkin</th>
  
      <td><input name="num_CheckIn" id="num_CheckIn" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $tarjeta_registro->getNum_CheckIn();?> /></td>
  </tr>
  <tr>
      
      <th scope="row">Codigo de cliente</th>

      <td><input name="codigo_cliente" id="codigo_cliente" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $tarjeta_registro->getCodigo_cliente();?> /></td>
  </tr>
  <tr>
    <th scope="row">Numero del servicio</th>
   
      <td><input name="numero_servicio" id="numero_servicio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $tarjeta_registro->getNumero_servicio();?> /></td>
  </tr>
  
  <tr>

    <th scope="row">Total</th>
      <td><input name="total" id="total" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $tarjeta_registro->getTotal();?> /></td>
  
  </tr>
  
  <tr>

    <th scope="row">Fecha del servicio</th>
      <td><input name="fecha_servicio" id="fecha_servicio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $tarjeta_registro->getFecha_servicio()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
 
  
  <tr>
   <td colspan="2"><input name="modificartarjeta_registro" id="modificartarjeta_registro" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input name="eliminartarjeta_registro" id="eliminartarjeta_registro" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
</body>
</html>