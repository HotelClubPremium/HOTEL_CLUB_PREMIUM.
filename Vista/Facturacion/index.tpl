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
         
        <form action="/HOTEL_CLUB_PREMIUM/Facturacion/index" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="500" border="0" cellspacing="0" cellpadding="2" align = "center">
                <tr align = "center">
                    <th align = "center" width="200" scope="row">Codigo checkout </th>
                    <td width="250"  ><input name="numero_checkout" id="numero_checkout" type="text" onkeypress="return solonumeros(event)" /></td>
                 <td colspan="2" ><input class="btn btn-info" name="buscarcheckout" id="buscarcheckout" type="submit" value="buscar" onsubmit="return CamposVacios()" /></td>
              
                </tr>
                
            </table>
        </form>
    <br><br>
            
                    <h2 align="center"> INFORMACION DEL CHECKOUT </h2>
                    <table border="2" width="550" cellspacing="0" cellpadding="0" align="center">
                     <thead>
                         
                        <tr>     
                    <th width="197" scope="row">Numero De checkout</th>
                    <th width="197" scope="row">Codigo usuario</th>
                    <th width="197" scope="row">Numero del servicio</th>
                    <th width="197" scope="row">Facturacion total</th>
                   
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
                    <h2 align="center"> INFORMACION RESERVA </h2>
                    <table border="2" width="700" cellspacing="0" cellpadding="0" align="center">
                     <thead>
                        <tr>
                             
                              <th width="197" scope="row">Numero de reserva</th>
                              <th width="197" scope="row">Numero de habitacion</th>
                              <th width="197" scope="row">Dias reservados</th>
                              <th width="197" scope="row">Fecha inicio</th>
                              <th width="197" scope="row">Fecha realizo reserva</th>
                              <th width="197" scope="row">Total a pagar</th>
                               <th width="197" scope="row">Fecha salida</th>
                              
                        </tr>
          </thead>
            <tbody>
                <?php foreach ($facturacion as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Facturacion/detalle/<?php echo $user->getNumero_checkout();?>"><?php echo $user->getNum_reserva();?></td>  
                     <td><?php echo $user->getNum_habitacion();?></td>     
                     <td><?php echo $user->getDias_reserva();?></td>   
                      <td><?php echo $user->getFecha_inicio();?></td>
                      <td><?php echo $user->getFecha_reserva();?></td>
                      <td><?php echo $user->getTotal_pagar();?></td>
                      <td><?php echo $user->getFecha_salida();?></td>
                      
                </tr>
                <?php } ?>
            </tbody>
    </table>
                    
                    
                    </table>
                    <br><br>
             <br><br>
                    <h2 align="center"> INFORMACION HABITACION CLIENTE </h2>
                    <table border="2" width="500" cellspacing="0" cellpadding="0" align="center">
                     <thead>
                        <tr>
                           
                             <th width="197" scope="row">Numero de habitacion</th>
                              <th width="197" scope="row">Tipo habitacion</th>
                               <th width="197" scope="row">Precio</th>
                             
                        </tr>
          </thead>
            <tbody>
                <?php foreach ($facturacion as $user) { ?>
                <tr>
                    <td><?php echo $user->getNum_habitacion();?></td> 
                      <td><?php echo $user->getTipo();?></td> 
                      <td><?php echo $user->getPrecio();?></td> 
                      
                      
                </tr>
                <?php } ?>
            </tbody>
    </table>
    
        

    </body>
</html>