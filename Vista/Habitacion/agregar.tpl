<!DOCTYPE html>

<html lang="en">
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
        <h2 align="center">HABITACIONES</h2>
        <form action="/HOTEL_CLUB_PREMIUM/Habitacion/guardar" method="post" name="form1" enctype="multipart/form-data" onsubmit="return CamposVacios()">
            <table width="416" border="0" cellspacing="0" cellpadding="2" align="center">
                <tr>
                    <th width="197" scope="row">Numhabitacion</th>
                    <td width="211"><input name="num_habitacion" id="num_habitacion" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">Tipo</th>
                    <td><input name="tipo" id="tipo" type="text" onkeypress="return soloLetras(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">Precio</th>
                    <td><input name="precio" id="precio" type="text" onkeypress="return solonumeros(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">Disponibilidad</th>
                    <td><input name="disponibilidad" id="disponibilidad" type="text" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                  <th scope="row">Foto</th>
                  <td><input type="file" name="foto" id="foto" accept="image/*" ></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td colspan="2"><input class="btn btn-info" name="agregarhabitacion" id="agregarhabitacion" type="submit" value="Guardar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
         </div>
  <div id="pie">hcp</div>
</div>
    </body>
</html>