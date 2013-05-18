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
         <br><br>
        <a href="/HOTEL_CLUB_PREMIUM/reseva/agregar">Nueva reserva</a>
    </body>
</html>