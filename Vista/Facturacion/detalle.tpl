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
<h2 align="center">DETALLE DE FACTURACION</h2>
<form action="/HOTEL_CLUB_PREMIUM/Facturacion/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="2" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <th width="197" scope="row">Numero De checkout</th>
  
      <td><input name="numero_checkout" id="numero_checkout" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $facturacion->getNumero_checkout();?> /></td>
  </tr>
  <tr>
      
      <th scope="row">Codigo de cliente</th>

      <td><input name="codigo_cliente" id="codigo_cliente" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $facturacion->getCodigo_cliente();?> /></td>
  </tr>
  <tr>
    <th scope="row">Numero del servicio</th>
   
      <td><input name="numero_servicio" id="numero_servicio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $facturacion->getNumero_servicio();?> /></td>
  </tr>

    <th scope="row">Facturacion total</th>
      <td><input name="facturacion_total" id="facturacion_total" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $facturacion->getFacturacion_total();?> /></td>
  
  </tr>
 
  
  <tr>
   <td colspan="2"><input name="modificarfacturacion" id="modificarfacturacion" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input name="eliminarfacturacion" id="eliminarfacturacion" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
</body>
</html>