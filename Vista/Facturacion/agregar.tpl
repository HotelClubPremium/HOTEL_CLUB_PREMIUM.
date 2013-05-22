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
        <form action="/HOTEL_CLUB_PREMIUM/Facturacion/guardar" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">numero checkout</th>
                    <td width="211"><input name="numero_checkout" id="numero_checkout" type="text" onkeypress="return solonumeros(event)" /></td>
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
                    <th scope="row">facturacion total</th>
                    <td><input name="facturacion_total" id="facturacion_total" type="text" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="agregarfacturacion" id="agregarhabitacion" type="submit" value="Guardar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
    </body>
</html>