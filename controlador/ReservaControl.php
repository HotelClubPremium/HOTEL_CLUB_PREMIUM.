<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservaControl
 *
 * @author Carlos
 */
class ReservaControl extends Controlador{
    //put your code here
    
      public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }
    
    
        public function index() {
        try {
            session_start();
            if (!isset($_SESSION['usuario.id'])) {
                $this->setVista('fuera');
                return $this->vista->imprimir();
            }
            $this->vista->set('reserva','');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }

    
    
     public function detalle($num_reserva) {
        try {
            $reserva = $this->modelo->leerUsuarioPorDocumento($num_reserva);
            if ($reserva != null) {
                $this->vista->set('titulo', 'Datos de ' . $reserva->getCod_usuario());
                $this->vista->set('reserva', $reserva);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('moto', $reserva);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    public function agregar() {
        $this->vista->set('titulo', 'Agregar Reserva');
        return $this->vista->imprimir();
    }
    
    
    
    
    
     public function guardar() {
        
        
        if (isset($_POST['agregarreserva'])) {

            
            $cod_usuario= isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $fecha_inicio= isset($_POST['Fecha_Llegada']) ? $_POST['Fecha_Llegada'] : NULL;
            $fecha_salida= isset($_POST['Fecha_Salida']) ? $_POST['Fecha_Salida'] : NULL;
            $fecha_reserva= isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
//            try {
                $reserva = new Reserva();
                $reserva->setCod_usuario($cod_usuario);
                $reserva->setNum_habitacion($num_habitacion);
                $reserva->setFecha_inicio($fecha_inicio);
                $reserva->setFecha_salida($fecha_salida);
                $reserva->setFecha_reserva($fecha_reserva);
                $reserva->crearReservas($reserva);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha guardado la informacion de manera satisfactoria');
//            } catch (Exception $ex) {
//                $this->vista->set('titulo', 'Error');
//                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
//            } catch (ErrorException $ex) {
//                $this->vista->set('titulo', 'Error');
//                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
//                $this->setVista('agregar');
//            }
            return $this->vista->imprimir();
        }
    }
 
    
    
     public function modificaryeliminar() {
        
         if (isset($_POST['modificarreserva'])) {

            $num_reserva = isset($_POST['num_reserva']) ? $_POST['num_reserva'] : NULL;
            $cod_usuario= isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $dias_reserva= isset($_POST['dias_reserva']) ? $_POST['dias_reserva'] : NULL;
            $fecha_inicio= isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : NULL;
            $fecha_reserva= isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
            $total_pagar= isset($_POST['total_pagar']) ? $_POST['total_pagar'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $reserva = new Reserva();
                $reserva->setCod_usuario($cod_usuario);
                $reserva->setNum_habitacion($num_habitacion);
                $reserva->setDias_reserva($dias_reserva);
                $reserva->setFecha_inicio($fecha_inicio);
                $reserva->setFecha_reserva($fecha_reserva);
                $reserva->setTotal_pagar($total_pagar);
                $reserva->setNum_reserva($num_reserva);
                
                $reserva->actualizarReservas($reserva);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminarreserva'])) {

            $num_reserva = isset($_POST['num_reserva']) ? $_POST['num_reserva'] : NULL;
            $cod_usuario= isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $dias_reserva= isset($_POST['dias_reserva']) ? $_POST['dias_reserva'] : NULL;
            $fecha_inicio= isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : NULL;
            $fecha_reserva= isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
            $total_pagar= isset($_POST['total_pagar']) ? $_POST['total_pagar'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $reserva = new Reserva();
                $reserva->setCod_usuario($cod_usuario);
                $reserva->setNum_habitacion($num_habitacion);
                $reserva->setDias_reserva($dias_reserva);
                $reserva->setFecha_inicio($fecha_inicio);
                $reserva->setFecha_reserva($fecha_reserva);
                $reserva->setTotal_pagar($total_pagar);
                $reserva->setNum_reserva($num_reserva);
                
                $reserva->eliminarReservas($reserva);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
}

?>
