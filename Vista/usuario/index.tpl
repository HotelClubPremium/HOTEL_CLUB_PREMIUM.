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
        <h2>USUARIOS DE LA APLICACION</h2>
        <table border="1" width="500" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>Correo</th>
                </tr>
          </thead>
            <tbody>
                <?php foreach ($usuarios as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/usuario/detalle/<?php echo $user->getCod_usuario();?>">
                            <?php echo $user->getCod_usuario();?></a></td>
                    <td><?php echo $user->getNom_usuario();?></td>
                    <td><?php echo $user->getApe_usuario();?></td>
                    <td><?php echo $user->getFecha_nacimiento()->format('Y-m-d');?></td>
                    <td><?php echo $user->getSex_usuario();?></td>
                    <td><?php echo $user->getCorreo_electronico();?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
        <a href="/HOTEL_CLUB_PREMIUM/usuario/agregar">Nuevo Usuarios</a>
    </body>
</html>