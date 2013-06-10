<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Club Premium - Bienvenidos</title>
<link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
<link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    
<div id="principal">
  <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
 <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
  <div id="contenido">

   
  <h2 align="center">USUARIOS DE LA APLICACION</h2>
  
       
<form action="/HOTEL_CLUB_PREMIUM/Usuario/modificaryeliminar" method="post" name="formulario5">
    
<table width="416" border="0" cellspacing="0" cellpadding="2" align="center">
 
  
                <tr>
                    <th width="197" scope="row">Identificacion: </th>
                    <td width="211"><input name="cod_usuario" id="cod_usuario" type="text" value= <?php echo " ".$_SESSION['usuario6.id'] ;?> /></td>
                    
                </tr>
                
                <tr>
                    <th scope="row">Fecha llegada</th>
                    <td><input   name="fecha_llegada" id="fecha_llegada" type="date" value=<?php echo " ".$_SESSION['usuario1.id']->format('Y-m-d');?> /></td>
                    
                </tr>
                  <tr>
                    <th scope="row">Fecha reserva</th>
                    <td><input   name="fecha_reserva" id="fecha_reserva" type="date" value=<?php echo " ".$_SESSION['usuario2.id']->format('Y-m-d');?> /></td>
                    
                </tr>
                  <tr>
                    <th scope="row">Fecha inicio</th>
                    <td><input   name="fecha_incio" id="fecha_incio" type="date" value=<?php echo " ".$_SESSION['usuario3.id']->format('Y-m-d');?> /></td>
                    
                </tr>
                  <tr>
                    <th scope="row">Fecha salida</th>
                    <td><input   name="fecha_salida" id="fecha_salida" type="date" value=<?php echo " ".$_SESSION['usuario4.id']->format('Y-m-d');?> /></td>
                    
                </tr>
                
     <tr>
         <th scope="row"></th>
   <td colspan="2"><input class="btn btn-info" name="ModificarUsuarios" id="ModificarUsuarios" type="submit" value="Modificar"  /></td>
   </tr>
   
    <tr>
        <th scope="row"></th>
    <td colspan="2"><input class="btn btn-info" name="EliminarUsuarios" id="EliminarUsuarios" type="submit" value="Eliminar" /></td>
   </tr>
</table>
 </form>

      
      	
      <p id="button-style" align="center">
       <button class="btn btn-large btn-info" type="button"><a style="color:#FFFFFF" href="/HOTEL_CLUB_PREMIUM/usuario/agregar">Nuevo Usuario</button>
       </p> 
       <p id="button-style" align="center">
       <button class="btn btn-large btn-info" type="button"><a style="color:#FFFFFF" href="/HOTEL_CLUB_PREMIUM/usuario/fuera">Cerrar Sesion</button>
       </p> 
      
    
     
     </div>
  <div id="pie">hcp</div>
</div>
</body>
</html>