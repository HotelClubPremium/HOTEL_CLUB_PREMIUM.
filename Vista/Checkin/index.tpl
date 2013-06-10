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
                   
                    <th>Numero checkin</th>
                    <th>Codigo </th>
                    <th>Fecha llegada </th>
                     <th>Fecha reserva</th>
                      <th>Fecha  inicio</th>
                       <th>Fecha salida</th>
                        
                     
               </tr>
          </thead>
            <tbody>
                <?php foreach ($checkin as $user) { ?>
                <tr>
                    <td><a href="/HOTEL_CLUB_PREMIUM/Checkin/detalle/<?php echo $user->getNum_checkin();?>">
                           <?php echo $user->getNum_checkin();?></a></td>
                     <td><?php echo $user->getCod_usuario();?></td>
                     <td><?php echo $user->getFecha_llegada()->format('Y-m-d');?></td> 
                     <td><?php echo $user->getFecha_reserva()->format('Y-m-d');?></td>
                     <td><?php echo $user->getFecha_inicio()->format('Y-m-d');?></td>
                     <td><?php echo $user->getFecha_salida()->format('Y-m-d');?></td>
                                  
                </tr>
                <?php } ?>
            </tbody>
    </table>
        <br><br>
        <a href="/HOTEL_CLUB_PREMIUM/Checkin/agregar">Nueva Checkin</a>
        
        
        <form action="/HOTEL_CLUB_PREMIUM/Checkin/index" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Codigo De usuario</th>
                    <td width="211"><input name="cod_usuario" id="cod_usuario" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                
                   <tr>
                    <td colspan="2"><input name="buscarcheckin" id="buscarcheckin" type="submit" value="buscar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
            
            
            
            
            
            
            
        </form>
    </body>
</html>