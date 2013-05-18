<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <p>
          <?php include HOME . DS . 'includes' . DS . 'menu.php'; ?>
        </p>
        <h2>RESERVAS</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Numero de Habitacion</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($usuarios as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Habitacion/detalles/<?php echo $user->getnum_habitacion();?>">
                            <?php echo $user->getnum_habitacion();?></a></td>
                    <td><?php echo $user->gettipo();?></td>
                    <td><?php echo $user->getprecio();?></td>
                    <td><?php echo $user->getdisponiblidad();?></td>
                    
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
    </body>
</html>