<?php


/**
 * Description of inicio
 *
 * @author Carlos
 */
$controlador = "Usuario";
$accion = "index";
$consulta = null;

if(isset($_GET['leer'])){
    $parametros  = array();
    $parametros  =  explode("/", $_GET['leer']); //explode: divide en varias cadenas la cadena de consulta. 
    $controlador = ucwords($parametros[0]); //ucwords: Convierte a mayúsculas el primer caracter de cada palabra en una cadena
    
    if(isset($parametros[1]) && !empty($parametros[1])){
        $accion = $parametros[1]; //variable de variable
    }
    
    if(isset($parametros[2]) && !empty($parametros[2])){
        $consulta = $parametros[2]; //variable de variable
    }
}

$modelo = $controlador;     /*  mmmmmmmm */
$controlador .='Control';
$carga = new $controlador($modelo, $accion); //variable de variables       /*  mmmmmmmm */

if(method_exists($carga, $accion)){
    $carga->$accion($consulta);
}else{
    die('Metodo no valido. por favor verificar la URL');
}

?>
