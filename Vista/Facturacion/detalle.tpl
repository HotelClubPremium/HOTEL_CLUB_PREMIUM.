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
         <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/reserva/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
            <div id="contenido">
                <h2 align="center">DETALLE DE FACTURACION</h2>
                <form action="/HOTEL_CLUB_PREMIUM/Facturacion/modificaryeliminar" method="post" name="form1" onsubmit="return CamposVacios()" >
                <table width="416" border="2" cellspacing="0" cellpadding="2" align="center">
                 <tr>
                  <th width="197" scope="row">Numero De checkout</th>
  
                <td><input name="numero_checkout" id="numero_checkout" type="text" onkeypress="return solonumeros(event)" readonly value = <?php echo $facturacion->getNumero_checkout();?> /></td>
                </tr>
                <tr>
      
                <th scope="row">Codigo de cliente</th>

                 <td><input name="codigo_cliente" id="codigo_cliente" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $facturacion->getCodigo_cliente();?> /></td>
                </tr>
                <tr>
                 <th scope="row">Numero del servicio</th>   
                 <td><input name="numero_servicio" id="numero_servicio" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $facturacion->getNumero_servicio();?> /></td>
                </tr>
                <tr>
                <th scope="row">Facturacion total</th>
                <td><input name="facturacion_total" id="facturacion_total" type="text" onkeypress="return solonumeros(event)"  value = <?php echo $facturacion->getFacturacion_total();?> /></td>
                 </tr>
                 <tr>
                 <th scope="row"></th>
                 <td colspan="2"><input class="btn btn-info" name="modificarfacturacion" id="modificarfacturacion" type="submit" value="Modificar" onsubmit="return CamposVacios()"   /></td>
                </tr>       
                <tr>
                <th scope="row"></th>
                <td colspan="2"><input class="btn btn-info" name="eliminarfacturacion" id="eliminarfacturacion" type="submit" value="Eliminar" onsubmit="return CamposVacios()" /></td>
                </tr>
                </table>
             </form>
            <p>&nbsp;</p>
            </div>
            <div id="pie"> HOTEL CLUB PREMIUM </div>
            </div>
</body>
</html>