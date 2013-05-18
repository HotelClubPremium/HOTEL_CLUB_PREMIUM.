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
<h2>DETALLE DE USUARIO</h2>
<table width="416" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Documento</th>
    <td width="211"><a href="/usuarios/detalles/<?php echo $usuarios->getcod_usuario();?>"><?php echo $usuario->getcod_usuario();?></a></td>
  </tr>
  <tr>
      
      
    <th scope="row">Nombre</th>
    <td><?php echo $usuarios->getnom_usuario();?></td>
  </tr>
  <tr>
    <th scope="row">Apellido</th>
    <td><?php echo $usuarios->getape_usuario();?></td>
  </tr>
  <tr>
    <th scope="row">Fecha de Nacmiento</th>
    <td><?php echo $usuarios->getfecha_nacimiento()->format('Y-m-d');?></td>
  </tr>
  <tr>
    <th scope="row">Sexo</th>
    <td><?php echo $usuarios->getSex_usuario();?></td>
  </tr>
  <tr>
    <th scope="row">Correo Electronico</th>
    <td><?php echo $usuarios->getCorreo_electronico();?></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>