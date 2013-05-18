<?php


/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO
 */
class Reservas_servicioscontrol extends Controlador{
    //put your code here
    
      public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }
    
    
        public function index() {
        try {
            $datos = $this->modelo->leerReservas_servicios();
            $this->vista->set('reservas_servicios', $datos);
            $this->vista->set('titulo', 'Lista de reservas_servicios');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
     public function detalle($numero_reserva) {
        try {
            $reservas_servicios = $this->modelo->leerUsuarioPorDocumento($numero_reserva);
            if ($reservas_servicios != null) {
                $this->vista->set('titulo', 'Datos de ' . $reservas_servicios->getNumero_servicio());
                $this->vista->set('reservas_servicios', $reservas_servicios);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('reservas_servicios', $reservas_servicios);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Reserva_servicios');
        return $this->vista->imprimir();
    }
    
     public function guardar() {
        
        
        if (isset($_POST['agregarreservas_servicios'])) {

            $numero_reserva= isset($_POST['numero_reserva']) ? $_POST['numero_reserva'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $numero_tarjeta = isset($_POST['numero_tarjeta']) ? $_POST['numero_tarjeta'] : NULL;
            
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $reservas_servicios = new Reservas_servicios();
                $reservas_servicios->setNumero_servicio($numero_servicio);
                $reservas_servicios->setNumero_tarjeta($numero_tarjeta);
                $reservas_servicios->setNumero_reserva($numero_reserva);
                $reservas_servicios->crearReservas_servicios($reservas_servicios);
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
        
         if (isset($_POST['modificarreservas_servicios'])) {

            $numero_reserva= isset($_POST['numero_reserva']) ? $_POST['numero_reserva'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $numero_tarjeta = isset($_POST['numero_tarjeta']) ? $_POST['numero_tarjeta'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $reservas_servicios = new Reservas_servicios();
                $reservas_servicios->setNumero_servicio($numero_servicio);
                $reservas_servicios->setNumero_tarjeta($numero_tarjeta);
                $reservas_servicios->setNumero_reserva($numero_reserva);
                $reservas_servicios->actualizarReservas_servicios($reservas_servicios);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminarreservas_servicios'])) {

            $numero_reserva= isset($_POST['numero_reserva']) ? $_POST['numero_reserva'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $numero_tarjeta = isset($_POST['numero_tarjeta']) ? $_POST['numero_tarjeta'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $reservas_servicios = new Reservas_servicios();
                $reservas_servicios->setNumero_servicio($numero_servicio);
                $reservas_servicios->setNumero_tarjeta($numero_tarjeta);
                $reservas_servicios->setNumero_reserva($numero_reserva);
                $reservas_servicios->eliminarReservas_servicios($reservas_servicios);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
    
    
}

?>
