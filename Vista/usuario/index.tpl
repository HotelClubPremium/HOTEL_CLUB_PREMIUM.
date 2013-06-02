

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Club Premium - Bienvenidos</title>
<link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
<link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
<div id="principal">
  <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
 <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
  <div id="contenido">
      
     <h2 align="center">USUARIOS DE LA APLICACION</h2>
       
       			 <table border="2" width="500" cellspacing="0" cellpadding="0"  align="center" >
            <thead>
                
                <tr >
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>Correo</th>
                </tr>
          </thead>
            <tbody>
                <?php foreach ($usuarios as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/usuario/detalle/<?php echo $user->getCod_usuario();?>">
                            <?php echo $user->getCod_usuario();?></a></td>
                    <td  ><?php echo $user->getNom_usuario();?></td>
                    <td><?php echo $user->getApe_usuario();?></td>
                    <td><?php echo $user->getFecha_nacimiento()->format('Y-m-d');?></td>
                    <td><?php echo $user->getSex_usuario();?></td>
                    <td><?php echo $user->getCorreo_electronico();?></td>
                     <td><?php echo $user->getClave();?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br>
      		
      <p id="button-style" align="center" ><a href="/HOTEL_CLUB_PREMIUM/usuario/agregar">NUEVO USUARIO</a></p>
	 <br>
      		
      <p id="button-style" align="center" ><a href="/HOTEL_CLUB_PREMIUM/usuario/fuera">SALIR</a></p>	
      
     <td><?php echo "Bienvenido ".$_SESSION['usuario.id'] ;?></td>
    <td><?php echo " ".$_SESSION['usuario2.id'] ;?></td>
     
     </div>
  <div id="pie">hcp</div>
</div>
</body>
</html>


