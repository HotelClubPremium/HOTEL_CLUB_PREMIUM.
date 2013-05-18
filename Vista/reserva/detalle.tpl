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
<h2>DETALLE DE RESERVA</h2>
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Numero De Reserva</th>
    <td width="211"><a href="/Reservas/detalles/<?php echo $Reservas->getNum_reserva();?>"><?php echo $Reservas->getNum_reserva();?></a></td>
  </tr>
  <tr>
      
      
    <th scope="row">Codigo Del Usuario</th>
    <td><?php echo $Reservas->getCod_usuario();?></td>
  </tr>
  <tr>
    <th scope="row">Numero De Habitacion</th>
    <td><?php echo $Reservas->getNum_habitacion();?></td>
  </tr>
  <tr>
    <th scope="row">Fecha de Inicio</th>
    <td><?php echo $Reservas->getFecha_inicio()->format('Y-m-d');?></td>
  </tr>
 
  <tr>
    <th scope="row">Fecha de Reserva</th>
    <td><?php echo $Reservas->getFecha_reserva()->format('Y-m-d');?></td>
  </tr>
  <tr>
      
    <th scope="row">Dias de Reserva</th>
    <td><?php echo $Reservas->getDias_reserva();?></td>
  </tr>
  <tr>
    <th scope="row">Total a Pagar</th>
    <td><?php echo $Reservas->getTotal_pagar();?></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>