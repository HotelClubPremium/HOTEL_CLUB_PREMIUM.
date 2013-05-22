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
        <h2>FACTURACION</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   
                    <th>Numero del checkout</th>
                    <th>Codigo del cliente</th>
                    <th>Numero del servicio</th>
                    <th>Facturacion total</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($facturacion as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Facturacion/detalle/<?php echo $user->getNumero_checkout();?>">
                            <?php echo $user->getNumero_checkout();?></a></td>
                    <td><?php echo $user->getCodigo_cliente();?></td>
                    <td><?php echo $user->getNumero_servicio();?></td>
                    <td><?php echo $user->getFacturacion_total();?></td>
           
                                        
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
        <a href="/HOTEL_CLUB_PREMIUM/Facturacion/agregar">Nueva facturacion</a>
    </body>
</html>