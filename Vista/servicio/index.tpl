<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
      
        <div id="recuadro">
	<div id="page-recuadro">
		<div id="page">
			
				<div>
                                      <p>
          <?php include HOME . DS . 'includes' . DS . 'menu.php'; ?>
        </p>
        <h2 align="center">SERVICIOS</h2>
        <table border="2" width="500" cellspacing="0" cellpadding="0" align="center">
            <thead>
                <tr>
                    <th>Codigo de servicio</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Horario disponible</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($servicios as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/servicio/detalle/<?php echo $user->getCod_servicio();?>">
                            <?php echo $user->getCod_servicio();?></a></td>
                    <td><?php echo $user->getNombre();?></td>
                    <td><?php echo $user->getPrecio();?></td>
                    <td><?php echo $user->getHorario_disponible();?></td>
                    
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
         <br><br>
       
					
					<p id="button-style" align="center"><a href="/HOTEL_CLUB_PREMIUM/servicio/agregar">NUEVO SERVICIOS</a></p>
				</div>
			
		</div>
	</div>
	
</div>
    </body>
</html>