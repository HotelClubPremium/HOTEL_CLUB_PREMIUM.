<?php



/**
 * Clase para manejar los controladores en la aplicacion
 * @author MELLADO
 */
class Serviciocontrol extends Controlador{
    //put your code here
    
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }
    
       public function index() {
        try {
            $datos = $this->modelo->leerServicios();
            $this->vista->set('servicios', $datos);
            $this->vista->set('titulo', 'Lista de servicios');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
     public function detalle($cod_servicio) {
        try {
            $servicios = $this->modelo->leerServiciosporcodigo($cod_servicio);
            if ($servicios != null) {
                $this->vista->set('titulo', 'Datos de ' . $servicios->getNombre());
                $this->vista->set('servicios', $servicios);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('servicios', $servicios);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Servicio');
        return $this->vista->imprimir();
    }
    
    
    public function guardar() {
        
        
        if (isset($_POST['agregarservicio'])) {

            $cod_servicio = isset($_POST['cod_servicio']) ? $_POST['cod_servicio'] : NULL;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
            $horario_disponible = isset($_POST['horario_disponible']) ? $_POST['horario_disponible'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $servicios = new Servicio();
                $servicios->setNombre($nombre);
                $servicios->setPrecio($precio);
                $servicios->setHorario_disponible($horario_disponible);
                $servicios->setCod_servicio($cod_servicio);
                $servicios->crearServicios($servicios);
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
        
         if (isset($_POST['modificarservicio'])) {

            $cod_servicio = isset($_POST['cod_servicio']) ? $_POST['cod_servicio'] : NULL;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
            $horario_disponible = isset($_POST['horario_disponible']) ? $_POST['horario_disponible'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $servicios = new Servicio();
                $servicios->setNombre($nombre);
                $servicios->setPrecio($precio);
                $servicios->setHorario_disponible($horario_disponible);
                $servicios->setCod_servicio($cod_servicio);
                $servicios->actualizarServicios($servicios);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminarservicio'])) {

            $cod_servicio = isset($_POST['cod_servicio']) ? $_POST['cod_servicio'] : NULL;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : NULL;
            $horario_disponible = isset($_POST['horario_disponible']) ? $_POST['horario_disponible'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $servicios = new Servicio();
                $servicios->setNombre($nombre);
                $servicios->setPrecio($precio);
                $servicios->setHorario_disponible($horario_disponible);
                $servicios->setCod_servicio($cod_servicio);
                $servicios->eliminarServicios($servicios);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
    


    
    
}

?>
