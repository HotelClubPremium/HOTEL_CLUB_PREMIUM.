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
<h2>DETALLE DE SERVICIOS</h2>
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Codigo de servicio</th>
    <td width="211"><a href="/servicios/detalles/<?php echo $servicioss->getcod_servicio();?>"><?php echo $servicioss->getcod_servicio();?></a></td>
  </tr>
  <tr>
      
      
    <th scope="row">Nombre</th>
    <td><?php echo $servicioss->getnombre();?></td>
  </tr>
  <tr>
    <th scope="row">Precio</th>
    <td><?php echo servicioss->getprecio();?></td>
  </tr>
  <tr>
    <th scope="row">Horario disponible</th>
    <td><?php echo $servicioss->gethorario_disponible();?></td>
  </tr>
  
  
</table>
<p>&nbsp;</p>
</body>
</html>