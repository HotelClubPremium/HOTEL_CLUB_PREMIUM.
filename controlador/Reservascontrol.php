<?php

/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO..
 */
class Reservascontrol extends Controlador{
     //put your code here
    
      public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }
    
    
        public function index() {
        try {
            $datos = $this->modelo->leerReservas();
            $this->vista->set('Reservas', $datos);
            $this->vista->set('titulo', 'Lista de reservas');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }

    
    
     public function detalle($num_reserva) {
        try {
            $reserva = $this->modelo->leerUsuarioPorDocumento($placa);
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

            $num_reserva = isset($_POST['num_reserva']) ? $_POST['num_reserva'] : NULL;
            $cod_usuario= isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $dias_reserva= isset($_POST['dias_reserva']) ? $_POST['dias_reserva'] : NULL;
            $fecha_inicio= isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : NULL;
            $fecha_reserva= isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
            $total_pagar= isset($_POST['total_pagar']) ? $_POST['total_pagar'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $reserva = new Reserva();
                $reserva->setCod_usuario($cod_usuario);
                $reserva->setNum_habitacion($num_habitacion);
                $reserva->setDias_reserva($dias_reserva);
                $reserva->setFecha_inicio($fecha_inicio);
                $reserva->setFecha_reserva($fecha_reserva);
                $reserva->setTotal_pagar($total_pagar);
                $reserva->setNum_reserva($num_reserva);
                
                $reserva->crearReserva($reserva);
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
                
                $reserva->actualizarReserva($reserva);
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
                
                $reserva->eliminarReserva($reserva);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
    
    
}

?>
