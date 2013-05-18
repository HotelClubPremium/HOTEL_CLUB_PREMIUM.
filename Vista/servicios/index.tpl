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
        <h2>SERVICIOS</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Codigo de servicio</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Horario disponible</th>
                    
                </tr>
          </thead>
            <tbody>
                <?php foreach ($usuarios as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Servicios/detalles/<?php echo $user->getcod_servicio();?>">
                            <?php echo $user->getcod_servicio();?></a></td>
                    <td><?php echo $user->getnombre();?></td>
                    <td><?php echo $user->getprecio();?></td>
                    <td><?php echo $user->gethorario_disponible();?></td>
                    
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
    </body>
</html>