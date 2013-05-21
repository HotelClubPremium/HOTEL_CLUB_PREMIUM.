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
<form action="/HOTEL_CLUB_PREMIUM/Usuario/modificaryeliminar" method="post" name="formulario2">
<table width="416" border="1" cellspacing="0" cellpadding="2">
 
  
                <tr>
                    <th width="197" scope="row">Identificacion: </th>
                    <td width="211"><input name="cod_usuario" id="cod_usuario" type="text" value= <?php echo $usuario->getCod_usuario();?> /></td>
                    
                </tr>
                <tr>
                    <th scope="row">Nombre: </th>
                    <td><input name="nom_usuario" id="Nombre" type="text" value= <?php echo $usuario->getNom_usuario();?> /></td>
                </tr>
                <tr>
                    <th scope="row">Apellido</th>
                    <td><input name="ape_usuario" id="ape_usuario" type="text" value=<?php echo $usuario->getApe_usuario();?> /></td>
                </tr>
                <tr>
                    <th scope="row">Fecha Nacimiento</th>
                    <td><input   name="fecha_nacimiento" id="fecha_nacimiento" type="text" value=<?php echo $usuario->getfecha_nacimiento()->format('Y-m-d');?>  />y-m-d</td>
                    
                </tr>
                <tr>
                        <th scope="row">Sexo</th>
                        <td><input name="sex_usuario" id="sex_usuario" type="text" value=<?php echo $usuario->getSex_usuario();?>  /></td>
                     </tr>
                 <tr>
                    <th scope="row">Correo Electronico</th>
                    <td><input name="correo_electronico" id="correo_electronico" type="text" value= <?php echo $usuario->getCorreo_electronico();?> /></td>
                </tr>
    
  <tr>
   <td colspan="2"><input name="ModificarUsuarios" id="ModificarUsuarios" type="submit" value="Modificar"  /></td>
   <td colspan="2"><input name="EliminarUsuarios" id="EliminarUsuarios" type="submit" value="Eliminar" /></td>
    </tr>
</table>
<p>&nbsp;</p>
</form>
</body>

</html>