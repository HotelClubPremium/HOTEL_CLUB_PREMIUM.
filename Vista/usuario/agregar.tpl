<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $titulo; ?></title>
        <script>
        /*function validar_formulario()
            {
            
                if (isNaN(document.formulario.Referencia.value))
                    {
                    alert("La Referencia Solo Debe Resivir Valores Numericos")
                  
                     return false;
                    }
                                        
                   if (isNaN(document.formulario.Pulgadas.value))
                    {
                    alert("El Campo Pulgadas Solo Debe Resivir Valores Numericos")
                    
                     return false;
                    }
                    
                    if (isNaN(document.formulario.Precio.value))
                    {
                    alert("El Campo Precio Solo Debe Resivir Valores Numericos")
                    
                     return false;
                    }
            return true;
                        onclick= "return validar_formulario()"
            } **/

        </script>
        
    </head>
    <body>
       
        <h2>DATOS</h2>
        <form action="/HOTEL_CLUB_PREMIUM/usuario/guardar" method="post" name="formulario">
            <table width="416" border="0" cellspacing="0" cellpadding="2">
                <tr>
                    <th width="197" scope="row">Identificacion: </th>
                    <td width="211"><input name="cod_usuario" id="cod_usuario" type="text" /></td>
                    
                </tr>
                <tr>
                    
                    <th scope="row">Nombre: </th>
                    <td><input name="nom_usuario" id="Nombre" type="text" /></td>
                </tr>
                <tr>
                    <th scope="row">Apellido</th>
                    <td><input name="ape_usuario" id="ape_usuario" type="text" /></td>
                </tr>
                <tr>
                    <th scope="row">Fecha Nacimiento</th>
                    <td><input   name="fecha_nacimiento" id="fecha_nacimiento" type="date"  /></td>
                    
                </tr>
                <tr>
                        <th scope="row">Sexo</th>
                        <td>
                            <input type=radio name=sex_usuario value=M >M
                            <input type=radio name=sex_usuario value=F >F
                        </td>
                     </tr>
                 <tr>
                    <th scope="row">Correo Electronico</th>
                    <td><input name="correo_electronico" id="correo_electronico" type="text" /></td>
                </tr>
                <tr>
                    <th scope="row">Clave</th>
                    <td><input name="clave" id="clave" type="text" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="agregarUsuario" id="agregarTelevisores" type="submit"  value="Guardar"  /></td>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
    </body>
</html>