<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function cargadorClases(){
    include './config/Configuracion.php';
    include './config/Db.php';
    include './MODELOS/Modelo.php';
    include './MODELOS/Usuarios.php';
    include './MODELOS/Habitacion.php';
    
}

spl_autoload_register(cargadorClases);

$users = new Usuarios();
$lista = $users->leerUsuarios();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        ?>
        <table border="0" width="500" cellspacing="2" cellpadding="1">
            <thead>
                <tr>
                    <th>codigo de usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $usuario) { ?>
                <tr>
                    <td><?php echo $usuario->getcod_usuario();?></td>
                    <td><?php echo $usuario->getnom_usuario;?></td>
                    <td><?php echo $usuario->getape_usuario();?></td>
                           
                    
                    <td><?php echo $usuario->getfecha_nacimiento->format('Y-m-d');?></td>
                       <td><?php echo $usuario->getsex_usuario();?></td>
                       <td><?php echo $usuario->getcorreo_electronico();?></td>
                       
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
?>
