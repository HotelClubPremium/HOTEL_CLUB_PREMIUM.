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
<h2>DETALLE DE HABITACION</h2>
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Numero De Habitacion</th>
    <td width="211"><a href="/Habitacion/detalles/<?php echo $habitacion->getnum_habitacion();?>"><?php echo $habitacion->getnum_habitacion();?></a></td>
  </tr>
  <tr>
      
      
    <th scope="row">Tipo De Habitacion</th>
    <td><?php echo $habitacion->gettipo();?></td>
  </tr>
  <tr>
    <th scope="row">Precio de Habitacion</th>
    <td><?php echo $habitacion->getprecio();?></td>
  </tr>

    <th scope="row">Disponibilidad</th>
    <td><?php echo $habitacion->getdisponibilidad();?></td>
  </tr>
 
</table>
<p>&nbsp;</p>
</body>
</html>