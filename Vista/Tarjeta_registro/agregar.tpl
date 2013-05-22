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
        <form action="/HOTEL_CLUB_PREMIUM/Tarjeta_registro/guardar" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Numero De checkin</th>
                    <td width="211"><input name="num_CheckIn" id="num_CheckIn" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">codigo cliente</th>
                    <td><input name="codigo_cliente" id="codigo_cliente" type="text" onkeypress="return soloLetras(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">numero servicio</th>
                    <td><input name="numero_servicio" id="numero_servicio" type="text" onkeypress="return solonumeros(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">Total</th>
                    <td><input name="total" id="total" type="text" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">Fecha del servicio</th>
                    <td><input name="fecha_servicio" id="fecha_servicio" type="date" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="agregartarjeta_registro" id="agregartarjeta_registro" type="submit" value="Guardar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
    </body>
</html>