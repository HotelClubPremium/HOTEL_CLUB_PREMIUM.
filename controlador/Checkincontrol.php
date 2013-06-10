<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Checkincontrol
 *
 * @author MELLADO
 */
class Checkincontrol extends Controlador{
    //put your code 
    
    
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerCheckin();
            $this->vista->set('checkin', $datos);
            $this->vista->set('titulo', 'Lista de checkin');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
     public function detalle($num_checkin) {
        try {
            $checkin = $this->modelo->leerCheckinporcodigo($num_checkin);
            if ($checkin!= null) {
                $this->vista->set('titulo', 'Datos de ' . $checkin->getCod_usuario());
                $this->vista->set('checkin', $checkin);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('checkin', $checkin);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
      public function informacion() {
        try {
            session_start();
          /*  if (!isset($_SESSION['usuario.id'])) {
                $this->setVista('fuera');
                return $this->vista->imprimir();
            }
//            $Usuario= $_SESSION['usuario.id'] ;  
            
//            $_SESSION['usuario'] = '';
             $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
       //     $usuario = $this->modelo->leerUsuarioPorClave($cod_usuario, $clave);//*/
           
            
        
            
           
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
     
    
//    public function buscar() {
//        if (isset($_POST['buscarcheckin'])) {
//            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
//            
//            $checkin = $this->modelo->leerCheckinporcodigo2($cod_usuario);
//            if ($checkin == NULL) {
//                $this->vista->set('mensaje', 'No esta registrado');
//                    
//            return $this->vista->imprimir();
//             
//            }
//            $this->vista->set('mensaje', 'Entrar a la aplicacion');
//            //MANEJO DE SESIONES
//            session_start();
//            $_SESSION['usuario1.id'] = $checkin->getFecha_llegada();
//            $_SESSION['usuario2.id'] =$checkin->getFecha_reserva();
//            $_SESSION['usuario3.id'] =$checkin->getFecha_inicio();
//            $_SESSION['usuario4.id'] =$checkin->getFecha_salida();
//            $_SESSION['usuario6.id'] =$checkin->getCod_usuario();
//            
//            
//           
//            return $this->vista->imprimir();
//        }
//    }
    
    public function buscar() {
        if (isset($_POST['buscarcheckin'])) {
            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            
            $checkin = $this->modelo->leerCheckinporcodigo2($cod_usuario);
            if ($checkin == NULL) {
                $this->vista->set('mensaje', 'No esta registrado');
                    
            return $this->vista->imprimir();
             
            }
            $this->vista->set('mensaje', 'Entrar a la aplicacion');
            //MANEJO DE SESIONES
            session_start();
            $_SESSION['usuario1.id'] = $checkin->getFecha_llegada();
            $_SESSION['usuario2.id'] =$checkin->getFecha_reserva();
            $_SESSION['usuario3.id'] =$checkin->getFecha_inicio();
            $_SESSION['usuario4.id'] =$checkin->getFecha_salida();
            $_SESSION['usuario6.id'] =$checkin->getCod_usuario();
            
            
           
            return $this->vista->imprimir();
        }
    }
    
    
    
    
    
    
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Checkin');
        return $this->vista->imprimir();
    }

    public function guardar() {
        
        
        if (isset($_POST['agregarcheckin'])) {

            $num_checkin = isset($_POST['num_checkin']) ? $_POST['num_checkin'] : NULL;
            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $fecha_llegada = isset($_POST['fecha_llegada']) ? $_POST['fecha_llegada'] : NULL;
            $fecha_reserva = isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
            $fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : NULL;
            $fecha_salida = isset($_POST['fecha_salida']) ? $_POST['fecha_salida'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $checkin = new Checkin();
                $checkin->setCod_usuario($cod_usuario);
                $checkin->setFecha_llegada($fecha_llegada);
                $checkin->setFecha_reserva($fecha_reserva);
                $checkin->setFecha_inicio($fecha_inicio);
                $checkin->setFecha_salida($fecha_salida);
                $checkin->setNum_checkin($num_checkin);
                $checkin->crearCheckin($checkin);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha guardado la informacion de manera satisfactoria');
            } catch (Exception $ex) {
                $this->vista->set('titulo', 'Error');
                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
            } catch (ErrorException $ex) {
                $this->vista->set('titulo', 'Error');
                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
                $this->setVista('agregar');
            }
            return $this->vista->imprimir();
        }
    }
    
    
     public function modificaryeliminar() {
        
         if (isset($_POST['modificarcheckin'])) {

            $num_checkin = isset($_POST['num_checkin']) ? $_POST['num_checkin'] : NULL;
            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $fecha_llegada = isset($_POST['fecha_llegada']) ? $_POST['fecha_llegada'] : NULL;
            $fecha_reserva = isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
            $fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : NULL;
            $fecha_salida = isset($_POST['fecha_salida']) ? $_POST['fecha_salida'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $checkin = new Checkin();
                $checkin->setCod_usuario($cod_usuario);
                $checkin->setFecha_llegada($fecha_llegada);
                $checkin->setFecha_reserva($fecha_reserva);
                $checkin->setFecha_inicio($fecha_inicio);
                $checkin->setFecha_salida($fecha_salida);
                $checkin->setNum_checkin($num_checkin);
                $checkin->actualizarCheckin($checkin);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminarcheckin'])) {

            $num_checkin = isset($_POST['num_checkin']) ? $_POST['num_checkin'] : NULL;
            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $fecha_llegada = isset($_POST['fecha_llegada']) ? $_POST['fecha_llegada'] : NULL;
            $fecha_reserva = isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
            $fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : NULL;
            $fecha_salida = isset($_POST['fecha_salida']) ? $_POST['fecha_salida'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
                $checkin = new Checkin();
                $checkin->setCod_usuario($cod_usuario);
                $checkin->setFecha_llegada($fecha_llegada);
                $checkin->setFecha_reserva($fecha_reserva);
                $checkin->setFecha_inicio($fecha_inicio);
                $checkin->setFecha_salida($fecha_salida);
                $checkin->setNum_checkin($num_checkin);
                $checkin->eliminarCheckin($checkin);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
}

?>
