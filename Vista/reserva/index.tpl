<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hotel Club Premium - Reservas</title>
        <link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
        <link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
       <div id="principal">
        <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
         <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
            <div id="contenido">
        <h2>RESERVAS</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Numero Reserva</th>
                    <th>Codigo Usuario</th>
                    <th>Numero Habitacion</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Reserva</th>
                    <th>Dias De Reserva</th>
                    <th>Total a Pagar</th>
                </tr>
          </thead>
            <tbody>
                <?php foreach ($reservas as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/reserva/detalle/<?php echo $user->getNum_reserva();?>">
                        <?php echo $user->getNum_reserva();?></a></td>
                    <td><?php echo $user->getCod_usuario();?></td>
                    <td><?php echo $user->getNum_habitacion();?></td>
                    <td><?php echo $user->getFecha_inicio()->format('Y-m-d');?></td>
                    <td><?php echo $user->getFecha_reserva()->format('Y-m-d');?></td>
                    <td><?php echo $user->getDias_reserva();?></td>
                    <td><?php echo $user->getTotal_pagar();?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br>
      		
      <p id="button-style" align="center" ><a href="/HOTEL_CLUB_PREMIUM/usuario/agregar">NUEVO USUARIO</a></p>
	 <br>
      		
      <p id="button-style" align="center" ><a href="/HOTEL_CLUB_PREMIUM/usuario/fuera">SALIR</a></p>	
      
       <p id="button-style" align="center" ><a href="/HOTEL_CLUB_PREMIUM/usuario/informacion">CONFIGURACION</a></p>
      
             </div>
  <div id="pie">hcp</div>
</div>
    </body>
</html>