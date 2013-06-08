<!DOCTYPE html>

<html lang="en">
    <head>
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Club Premium - DetallesUsuarios</title>
<link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
<link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    </head>
<body>
    
   <div id="principal">
  <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
  <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
 <div id="contenido">
<h2 align="center">DETALLE DE USUARIO</h2>
<form action="/HOTEL_CLUB_PREMIUM/Usuario/modificaryeliminar" method="post" name="formulario2">
    
<table width="416" border="0" cellspacing="0" cellpadding="2" align="center">
 
  
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
   <td colspan="2"><input class="btn btn-info" name="ModificarUsuarios" id="ModificarUsuarios" type="submit" value="Modificar"  /></td>
   <td colspan="2"><input class="btn btn-info" name="EliminarUsuarios" id="EliminarUsuarios" type="submit" value="Eliminar" /></td>
   
    </tr>
   
</table>
<p>&nbsp;</p>
</form>		
                                    
                     					
 </div>
  <div id="pie">hcp</div>
</div>

</body>

</html>