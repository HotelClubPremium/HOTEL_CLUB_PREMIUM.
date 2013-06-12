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
         <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
            <div id="contenido">
                            
                <p class="text-right" >
                           </p>
                    <h2 align="center">FACTURACION</h2>
                    <table border="2" width="500" cellspacing="0" cellpadding="0" align="center">
                     <thead>
                        <tr>
                   
                            <th>Numero del checkout</th>
                            <th>Codigo del cliente</th>
                            <th>Numero del servicio</th>
                            <th>Facturacion total</th>
                    
                        </tr>
          </thead>
            <tbody>
                <?php foreach ($facturacion as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Facturacion/detalle/<?php echo $user->getNumero_checkout();?>">
                            <?php echo $user->getNumero_checkout();?></a></td>
                    <td><?php echo $user->getCodigo_cliente();?></td>
                    <td><?php echo $user->getNumero_servicio();?></td>
                    <td><?php echo $user->getFacturacion_total();?></td>
           
                                        
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
             <br><br>
    <p class="text-right" ><a href="/HOTEL_CLUB_PREMIUM/Checkin/agregar">Nueva Checkin</a> </p>
        
        
        <form action="/HOTEL_CLUB_PREMIUM/Checkin/index" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="0" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Codigo De usuario</th>
                    <td width="211"><input name="cod_usuario" id="cod_usuario" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                
                   <tr>
                    <td colspan="2"><input class="btn btn-info" name="buscarcheckin" id="buscarcheckin" type="submit" value="buscar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
            
            
            
            
            
            
            
        </form>
    </body>
</html>