<!DOCTYPE html>

<<html lang="en">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Hotel Club Premium - Reservas</title>
        <link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
        <link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
       <div id="principal">
        <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
         <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/reserva/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
            <div id="contenido">
<h2 align="center">DETALLE DE HABITACION</h2>
<form action="/HOTEL_CLUB_PREMIUM/Habitacion/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="0" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <th width="197" scope="row">Numero De Habitacion</th>
  <!--  <td width="211"><a href="/Habitacion/detalle/<?php echo $habitacion->getNum_habitacion();?>"><?php echo $habitacion->getNum_habitacion();?></a></td>-->
      <td><input name="num_habitacion" id="num_habitacion" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $habitacion->getNum_habitacion();?> /></td>
  </tr>
  <tr>
      
      <th scope="row">Tipo De Habitacion</th>
   <!-- <td><?php echo $habitacion->getTipo();?></td>-->
      <td><input name="tipo" id="tipo" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $habitacion->getTipo();?> /></td>
  </tr>
  <tr>
    <th scope="row">Precio de Habitacion</th>
   <!-- <td><?php echo $habitacion->getPrecio();?></td>-->
      <td><input name="precio" id="precio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $habitacion->getPrecio();?> /></td>
  </tr>

    <th scope="row">Disponibilidad</th>
      <td><input name="disponibilidad" id="disponibilidad" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $habitacion->getDisponibilidad();?> /></td>
   <!-- <td><?php echo $habitacion->getDisponibilidad();?></td>-->
  </tr>
 
  
  <tr>
   <td colspan="2"><input class="btn btn-info" name="modificarhabitacion" id="modificarhabitacion" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input class="btn btn-info" name="eliminarhabitacion" id="eliminarhabitacion" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
 </div>
  <div id="pie">hcp</div>
</div>
</body>
</html>