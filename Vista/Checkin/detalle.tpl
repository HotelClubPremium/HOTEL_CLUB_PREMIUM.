<!DOCTYPE html>

<html lang="en">
    <head>
         
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Club Premium - DetallesCheckinUsuarios</title>
<link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
<link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    
    </head>
<body>
 <div id="principal">
  <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
  <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
 <div id="contenido">
<h2>DETALLE DE CHECKIN DEL USUARIO</h2>
<form action="/HOTEL_CLUB_PREMIUM/Checkin/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
<table width="416" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <th width="197" scope="row">Numero checkin</th>
  
      <td><input name="num_checkin" id="num_checkin" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $checkin->getNum_checkin();?> /></td>
  </tr>
  <tr>
      
      <th scope="row">Codigo cliente</th>

      <td><input name="cod_usuario" id="cod_usuario" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getCod_usuario();?> /></td>
  </tr>
 
   <tr>

    <th scope="row">Fecha llegada</th>
      <td><input name="fecha_llegada" id="fecha_llegada" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_llegada()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
   <tr>

    <th scope="row">Fecha reserva</th>
      <td><input name="fecha_reserva" id="fecha_reserva" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_reserva()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
    <tr>

    <th scope="row">Fecha inicio</th>
      <td><input name="fecha_inicio" id="fecha_inicio" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_inicio()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
    <tr>

    <th scope="row">Fecha salida</th>
      <td><input name="fecha_salida" id="fecha_salida" type="date" onkeypress="return solonumeros(event)"  value = <?php echo $checkin->getFecha_salida()->format('Y-m-d');?>  />y-m-d</td>
  
  </tr>
 
  
  <tr>
   <td colspan="2"><input class="btn btn-info" name="modificarcheckin" id="modificarcheckin" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
    </tr>
    
     <tr>
    <td colspan="2"><input class="btn btn-info" name="eliminarcheckin" id="eliminarcheckin" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
    </tr>
  
</table>
    </form>
<p>&nbsp;</p>
</body>
</html>