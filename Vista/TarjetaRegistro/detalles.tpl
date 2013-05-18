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
<h2>DETALLE DE CHECK IN</h2>
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Numero De Check In</th>
    <td width="211"><a href="/TarjetaRegistro/detalles/<?php echo $tarjeta_registro->getNum_CheckIn();?>"><?php echo $tarjeta_registro->getNum_CheckIn();?></a></td>
  </tr>
  <tr>    
    <th scope="row">Codigo del cliente</th>
    <td><?php echo $tarjeta_registro->getcodigo_cliente();?></td>
  </tr>
  <tr>
    <th scope="row">Numero De Servicio</th>
    <td><?php echo $tarjeta_registro->getnumero_servicio();?></td>
  </tr>
  <tr>
    <th scope="row">Total a Pagar</th>
    <td><?php echo $tarjeta_registro->gettotal();?></td>
  </tr>

   <tr>
    <th scope="row">Fecha de Servicio</th>
    <td><?php echo $tarjeta_registro->getfecha_servicio()->format('Y-m-d');?></td>
  </tr>
  
  </table>
<p>&nbsp;</p>
</body>
</html>