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
                    <th>Numero de Check In</th>
                    <th>Codigo Del Cliente</th>
                    <th>Numero Del Servicio</th>
                    <th>Total a Pagar</th>
                    <th>Fecha De Servicio</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($usuarios as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/TarjetaRegistro/detalles/<?php echo $user->getNum_CheckIn();?>">
                            <?php echo $user->getNum_CheckIn();?></a></td>
                    <td><?php echo $user->getcodigo_cliente();?></td>
                    <td><?php echo $user->getnumero_servicio();?></td>
                    <td><?php echo $user->gettotal();?></td>
                    <td><?php echo $user->getfecha_servicio()->format('Y-m-d');?></td>
                                        
                </tr>
                <?php } ?>
            </tbody>
    </table>
    </body>
</html>