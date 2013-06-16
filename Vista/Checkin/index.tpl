<!DOCTYPE html>

<html lang="en">
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
     <!--   <p class="text-right" >
         
       </p>-->
        <h2>INGRESO DEL CHECHIN</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   
                    <th>Numero checkin</th>
                    <th>Codigo </th>
                    <th>Fecha llegada </th>
                    <th>Fecha reserva</th>
                    <th>Fecha  inicio</th>
                    <th>Fecha salida</th>
                        
                     
               </tr>
          </thead>
            <tbody>
                <?php foreach ($checkin as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Checkin/detalle/<?php echo $user->getNum_checkin();?>">
                           <?php echo $user->getNum_checkin();?></a></td>
                     <td><?php echo $user->getCod_usuario();?></td>
                     <td><?php echo $user->getFecha_llegada()->format('Y-m-d');?></td> 
                     <td><?php echo $user->getFecha_reserva()->format('Y-m-d');?></td>
                     <td><?php echo $user->getFecha_inicio()->format('Y-m-d');?></td>
                     <td><?php echo $user->getFecha_salida()->format('Y-m-d');?></td>
                                  
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
   <!-- <p class="text-right" ><a href="/HOTEL_CLUB_PREMIUM/Checkin/agregar">Nueva Checkin</a> </p>-->
        
        
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
            
          <p id="button-style" align="center">
       <button class="btn btn-large btn-info" type="button"><a style="color:#FFFFFF" href="/HOTEL_CLUB_PREMIUM/Administrador/fuera">Cerrar Sesion</button>
       </p>  
            
            
            
            
            
        </form>
    </body>
</html>