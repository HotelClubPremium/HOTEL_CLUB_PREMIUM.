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
                <?php echo "Bienvenido ".$_SESSION['usuario.id'] ;?>
                </p>
                <p class="text-center" >RESERVAS</p> 
                     
                 <form action="/HOTEL_CLUB_PREMIUM/Usuario/modificaryeliminar" method="post" name="formulario5">
                       <table width="416" border="0" cellspacing="0" cellpadding="2" align="center">
                           
                           
                           
                        <tr>
                            <th class="text-info"  width="197" scope="row">Identificacion: </th>
                            <td width="211"><input name="cod_usuario" id="cod_usuario" type="text" disabled="" value= <?php echo " ".$_SESSION['usuario6.id'] ;?>  /></td>
                    
                        </tr>
                        <tr>
                            <th class="text-info" scope="row">Nombre: </th>
                            <td><input name="nom_usuario" id="Nombre" type="text" value= <?php echo " ".$_SESSION['usuario.id'] ;?> /></td>
                         
                           
                        </tr>
                        <tr>
                            <th class="text-info" scope="row">Apellido</th>
                            <td><input name="ape_usuario" id="ape_usuario" type="text" value=<?php echo " ".$_SESSION['usuario2.id'] ;?> /></td>
                        </tr>
                         <tr>
                            <th class="text-info" scope="row">Correo Electronico</th>
                            <td><input name="correo_electronico" id="correo_electronico" type="text" value=<?php echo " ".$_SESSION['usuario5.id'] ;?> /></td>
                         </tr>
                         <tr>
                            <th class="text-info" scope="row">Numero de Habitacion                                                                    </th>
                            <td><input name="num_habitacion" id="correo_electronico" type="text" /><button class="btn  btn-mini btn-primary" type="button">Habitaciones</button></td>
                         </tr>
                        <tr>
                            <th class="text-info" scope="row">Fecha de LLegada</th>
                            <td><input name="Fecha_Llegada" id="Fecha_Llegada" type="date" /></td>
                         </tr>
                        <tr>
                            <th class="text-info" scope="row">Fecha de Salida</th>
                            <td><input name="Fecha_Salida" id="Fecha_Salida" type="date" /></td>
                         </tr> 
                        
                         
                         <td colspan="5"><input  class="btn btn-info" name="agregarreserva" id="agregarreserva" type="submit" value="Hacer Reserva"/></td>
                        
                       </table>                 
                   
                       
                  
                   </form>
                   
                         	          
             </div>
  <div id="pie">hcp</div>
</div>
    </body>
</html>