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
                    <h2 align="center"> FACTURACIONES </h2>
                    <table border="2" width="500" cellspacing="0" cellpadding="0" align="center">
                     <thead>
                        <tr>
                   
                            <th>Numero del checkout</th>
                            <th>Codigo del cliente</th>
                            <th>Numero del servicio</th>
                            <th>Facturacion total</th>
                            <th>Codigo usuario </th>
                             <th>Numero de habitacion</th>
                            
                             <th>Numero de reserva</th>
                            <th>Dias reservados</th>
                            <th>Fecha inicio</th>
                            <th>Fecha realizo reserva</th>
                            <th>Total a pagar</th>
                            <th>Fecha salida</th>
                            
                            <th>Numero de habitacion</th>
                            <th>Tipo habitacion</th>
                            <th>Precio</th>
       
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
                   <td><?php echo $user->getCod_usuario();?></td>
                   <td><?php echo $user->getNum_habitacion();?></td>    
                   
                   
                    <td><?php echo $user->getNum_reserva();?></td>   
                     <td><?php echo $user->getDias_reserva();?></td>   
                      <td><?php echo $user->getFecha_inicio();?></td>
                      <td><?php echo $user->getFecha_reserva();?></td>
                      <td><?php echo $user->getTotal_pagar();?></td>
                      <td><?php echo $user->getFecha_salida();?></td>
                      
                      <td><?php echo $user->getNum_habitacion2();?></td> 
                      <td><?php echo $user->getTipo();?></td> 
                      <td><?php echo $user->getPrecio();?></td> 
                      
                      
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
             <br><br>
    <p class="text-right" ><a href="/HOTEL_CLUB_PREMIUM/Facturacion/agregar">NUEVA FACTURACION</a> </p>
        
        
        <form action="/HOTEL_CLUB_PREMIUM/Facturacion/index" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="0" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Codigo checkout </th>
                    <td width="211"  ><input name="numero_checkout" id="numero_checkout" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                
                   <tr>
                    <td colspan="2" ><input class="btn btn-info" name="buscarcheckout" id="buscarcheckout" type="submit" value="buscar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
            
            
            
            
            
            
            
        </form>
    </body>
</html>