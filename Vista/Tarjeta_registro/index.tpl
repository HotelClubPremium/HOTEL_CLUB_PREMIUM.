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
        <h2>TARJETA REGISTRO</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   
                    <th>Numero del checkin</th>
                    <th>Codigo del cliente</th>
                    <th>Numero del servicio</th>
                    <th> Total</th>
                    <th>Fecha del servicio</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($tarjeta_registro as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Tarjeta_registro/detalle/<?php echo $user->getNum_CheckIn();?>">
                            <?php echo $user->getNum_CheckIn();?></a></td>
                    <td><?php echo $user->getCodigo_cliente();?></td>
                    <td><?php echo $user->getNumero_servicio();?></td>
                    <td><?php echo $user->getTotal();?></td>
                    <td><?php echo $user->getFecha_servicio()->format('Y-m-d');?></td>
           
                                        
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
        <a href="/HOTEL_CLUB_PREMIUM/Tarjeta_registro/agregar">Nueva tarjetaregistro</a>
    </body>
</html>