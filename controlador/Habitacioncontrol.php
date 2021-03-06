<?php



/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO.
 */
class Habitacioncontrol extends Controlador  {
    //put your code here
    
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
        
        
    }

    public function index() {
        try {
            $datos = $this->modelo->leerHabitacion();
            $this->vista->set('habitacion', $datos);
            $this->vista->set('titulo', 'Lista de habitacion');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
    
  public function detalle($num_habitacion) {
        try {
            $habitacion = $this->modelo->leerHabitacionporcodigo($num_habitacion);
            if ($habitacion != null) {
                $this->vista->set('titulo', 'Datos de ' . $habitacion->getTipo());
                $this->vista->set('habitacion', $habitacion);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('habitacion', $habitacion);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function agregar() {
        $this->vista->set('titulo', 'Agregar Habitacion');
        return $this->vista->imprimir();
    }
    

     public function guardar() {
        
        
        if (isset($_POST['agregarhabitacion'])) {

            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : NULL;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
            $disponibilidad = isset($_POST['disponibilidad']) ? $_POST['disponibilidad'] : NULL;
            
            try {
//            
                
                $habitacion = new Habitacion();
                $habitacion->setTipo($tipo);
                $habitacion->setPrecio($precio);
                $habitacion->setDisponibilidad($disponibilidad);
                $habitacion->setNum_habitacion($num_habitacion);
                
                $habitacion->crearHabitacion($habitacion);
                $this->vista->set('titulo', 'Datos Guardados');
                $this->vista->set('mensaje', 'La Informacion ha sido guardada satisfactoriamente');
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
        
         if (isset($_POST['modificarhabitacion'])) {

            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : NULL;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
            $disponibilidad = isset($_POST['disponibilidad']) ? $_POST['disponibilidad'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $habitacion = new Habitacion();
               
                $habitacion->setTipo($tipo);
                $habitacion->setPrecio($precio);
                $habitacion->setDisponibilidad($disponibilidad);
                $habitacion->setNum_habitacion($num_habitacion);
                $habitacion->actualizarHabitacion($habitacion);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminarhabitacion'])) {
          
            $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : NULL;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
            $disponibilidad = isset($_POST['disponibilidad']) ? $_POST['disponibilidad'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
                $habitacion = new Habitacion();
               
                $habitacion->setTipo($tipo);
                $habitacion->setPrecio($precio);
                $habitacion->setDisponibilidad($disponibilidad);
                $habitacion->setNum_habitacion($num_habitacion);
                $habitacion->eliminarHabitacion($habitacion);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
 
    
    
    
    
}

?>
