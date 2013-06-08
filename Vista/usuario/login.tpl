<!DOCTYPE html>

<html lang="en">
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Club Premium - Login</title>
<link href="/HOTEL_CLUB_PREMIUM/Css/estilo_basico.css" rel="stylesheet" type="text/css" />
<link href="/HOTEL_CLUB_PREMIUM/Css/textos.css" rel="stylesheet" type="text/css" />
 <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        
  <div id="principal">
  <div id="encabezado"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Logo.gif" width="965" height="266" alt="logo" /></div>
 <div id="menu"><a href="/HOTEL_CLUB_PREMIUM/Principal/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Bienvenidos.gif" alt="Bienvenidos" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Administrador.gif" alt="Administrador" width="193" height="59" border="0" /></a><a href="/HOTEL_CLUB_PREMIUM/usuario/index"><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Usuarios.gif" alt="Usuarios" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Reservas.gif" alt="Reservas" width="193" height="59" border="0" /></a><a href=""><img src="/HOTEL_CLUB_PREMIUM/Imagenes/Servicios.gif" alt="Servicios" width="193" height="59" border="0" /></a></div>
  <div id="contenido">
        
        <h2>ACCEDER</h2>
        <form name="form1" action="/HOTEL_CLUB_PREMIUM/usuario/entrar" method="post">
            <table border="0" width="500" cellspacing="0" cellpadding="0" align="center" >
                <tbody>
                    <tr>
                        <th>Documento</th>
                        <td><input name="cod_usuario" id="cod_usuario" type="text"  placeholder="Documento" /></td>
                    </tr>
                    <tr>
                        <th>Contraseña</th>
                        <td><input name="clave" id="clave" type="password"  placeholder="Contraseña" /></td>
                    </tr>
                    <tr>
                        <th></th>
                         <td colspan="2" align="center" ><input class="btn btn-info" name="enviar" id="enviar" type="submit" value="Entrar" /></td>
                        </tr>
                    <tr>
                        <th></th>
                      <td colspan="2" align="center"><a href="/HOTEL_CLUB_PREMIUM/usuario/olvidoclave">Olvidé mi contraseña!</a></td>
                  </tr>
                </tbody>
            </table>
        </form>
        <br><br>
         <p id="button-style" align="center">
       <button class="btn btn-large btn-info" type="button"><a style="color:#FFFFFF" href="/HOTEL_CLUB_PREMIUM/usuario/agregar">Nuevo Usuario</button>
       </p> 
        </div>
  <div id="pie">hcp</div>
</div>
    </body>
</html>