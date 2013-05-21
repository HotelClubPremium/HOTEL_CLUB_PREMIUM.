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
        <form action="/HOTEL_CLUB_PREMIUM/Habitacion/guardar" method="post" name="form1"  onsubmit="return CamposVacios()">
            <table width="416" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Numhabitacion</th>
                    <td width="211"><input name="numhabitacion" id="numhabitacion" type="text" onkeypress="return solonumeros(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">Tipo</th>
                    <td><input name="tipo" id="tipo" type="text" onkeypress="return soloLetras(event)" /></td>
                </tr>
                <tr>
                    <th scope="row">Precio</th>
                    <td><input name="precio" id="precio" type="text" onkeypress="return solonumeros(event)"/></td>
                </tr>
                <tr>
                    <th scope="row">Disponibilidad</th>
                    <td><input name="disponibilidad" id="disponibilidad" type="text" onkeypress="return soloLetras(event)"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="agregarhabitacion" id="agregarhabitacion" type="submit" value="Guardar" onsubmit="return CamposVacios()" /></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
    </body>
</html>