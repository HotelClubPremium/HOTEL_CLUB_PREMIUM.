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
        <h2>DATOS</h2>
        <form action="/HOTEL_CLUB_PREMIUM/Checkin/guardar" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Numero De checkin</th>
                    <td width="211"><input name="num_checkin" id="num_CheckIn" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">codigo cliente</th>
                    <td><input name="cod_usuario" id="cod_usuario" type="text" onkeypress="return soloLetras(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">fecha_llegada</th>
                    <td><input name="fecha_llegada" id="fecha_llegada" type="date" onkeypress="return solonumeros(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">fecha_reserva</th>
                    <td><input name="fecha_reserva" id="fecha_reserva" type="date" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">Fecha inicio</th>
                    <td><input name="fecha_inicio" id="fecha_inicio" type="date" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">Fecha salida</th>
                    <td><input name="fecha_salida" id="fecha_salida" type="date" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="agregarcheckin" id="agregarcheckin" type="submit" value="Guardar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
    </body>
</html>