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
        <BR> <BR><BR>
        <h2 align="center">HABITACIONES </h2>
        <table border="2" width="500" cellspacing="0" cellpadding="0" align="center">
            <thead>
                <tr>
                    <th>Numero de Habitacion</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($habitacion as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Habitacion/detalle/<?php echo $user->getNum_habitacion();?>">
                            <?php echo $user->getNum_habitacion();?></a></td>
                    <td><?php echo $user->getTipo();?></td>
                    <td><?php echo $user->getPrecio();?></td>
                    <td><?php echo $user->getDisponibilidad();?></td>
                    
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
       
        
			<p id="button-style" align="center"><a href="/HOTEL_CLUB_PREMIUM/Habitacion/agregar">NUEVA HABITACION</a></p>
				</div>
			
		</div>
	</div>
	
</div>
    </body>
</html>