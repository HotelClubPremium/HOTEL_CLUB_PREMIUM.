<?php

define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));


ini_set('display_erros', 1);



function manejadorErrores($code, $mensaje, $archivo, $linea, $contexto = NULL){
    if(E_RECOVERABLE_ERROR === $code){
        throw new ErrorException($mensaje, $code,1, $archivo, $linea, NULL );
    }
    return false;
}
set_error_handler('manejadorErrores'); //Indica la funcion (callback) que manejara los errores
                                       //Esto es para cambiar de manejo de errores a manejo de 
                                       //Excepciones

function cargadorClases(){
    require_once './config/Configuracion.php';
    require_once './config/Db.php';
    require_once './MODELOS/Modelo.php';        /*  mmmmmmmm */
    require_once './MODELOS/Usuario.php';       /*  mmmmmmmm ......*/
    require_once './MODELOS/Habitacion.php';
    require_once './MODELOS/Servicio.php'; 
    require_once './MODELOS/Facturacion.php'; 
    require_once './MODELOS/Tarjeta_registro.php';
    require_once './controlador/Controlador.php';
    require_once './controlador/Usuariocontrol.php';
    require_once './controlador/Habitacioncontrol.php';
    require_once './controlador/Serviciocontrol.php';
    require_once './controlador/Facturacioncontrol.php';
    require_once './controlador/Principalcontrol.php';
    require_once './controlador/Tarjeta_registrocontrol.php';
    require_once './utiles/class.phpmailer.php';
    require_once './utiles/class.pop3.php';
    require_once './utiles/class.smtp.php';
    
    require_once './vista/Vista.php';
}

spl_autoload_register('cargadorClases');

require_once './utiles/inicio.php';
