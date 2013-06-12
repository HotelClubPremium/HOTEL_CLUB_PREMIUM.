<?php



/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO.
 */
class Facturacioncontrol extends Controlador{
    //put your code here
       public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

//    public function index() {
//        try {
//            $datos = $this->modelo->leerFacturacion();
//            $this->vista->set('facturacion', $datos);
//            $this->vista->set('titulo', 'Lista de facturacion');
//            return $this->vista->imprimir();
//        } catch (Exception $exc) {
//            echo 'Error de aplicacion: ' . $exc->getMessage();
//        }
//    }
    
    public function index() {
        try {
          $numero_checkout = isset($_POST['numero_checkout']) ? $_POST['numero_checkout'] : NULL;
            $datos = $this->modelo->leerFacturacionporcodigo($numero_checkout);
            $this->vista->set('facturacion', $datos);
            $this->vista->set('titulo', 'Lista de facturacion');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
  }
    
    
    
      public function detalle($numero_checkout) {
        try {
            $facturacion = $this->modelo->leerFacturacionporcodigo($numero_checkout);
            if ($facturacion != null) {
                $this->vista->set('titulo', 'Datos de ' . $facturacion->getCodigo_cliente());
                $this->vista->set('facturacion', $facturacion);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('facturacion', $facturacion);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Facturacion');
        return $this->vista->imprimir();
    }
    
    
    
     public function guardar() {
        
        
        if (isset($_POST['agregarfacturacion'])) {

            $numero_checkout = isset($_POST['numero_checkout']) ? $_POST['numero_checkout'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $facturacion_total = isset($_POST['facturacion_total']) ? $_POST['facturacion_total'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $facturacion = new Facturacion();
                $facturacion->setCodigo_cliente($codigo_cliente);
                $facturacion->setNumero_servicio($numero_servicio);
                $facturacion->setFacturacion_total($facturacion_total);
                $facturacion->setNumero_checkout($numero_checkout);
                $facturacion->crearFacturacion($facturacion);
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
        
         if (isset($_POST['modificarfacturacion'])) {

            $numero_checkout = isset($_POST['numero_checkout']) ? $_POST['numero_checkout'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $facturacion_total = isset($_POST['facturacion_total']) ? $_POST['facturacion_total'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $facturacion = new Facturacion();
                $facturacion->setCodigo_cliente($codigo_cliente);
                $facturacion->setNumero_servicio($numero_servicio);
                $facturacion->setFacturacion_total($facturacion_total);
                $facturacion->setNumero_checkout($numero_checkout);
                $facturacion->actualizarFacturacion($facturacion);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminarfacturacion'])) {

            $numero_checkout = isset($_POST['numero_checkout']) ? $_POST['numero_checkout'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $facturacion_total = isset($_POST['facturacion_total']) ? $_POST['facturacion_total'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $facturacion = new Facturacion();
                $facturacion->setCodigo_cliente($codigo_cliente);
                $facturacion->setNumero_servicio($numero_servicio);
                $facturacion->setFacturacion_total($facturacion_total);
                $facturacion->setNumero_checkout($numero_checkout);
                $facturacion->eliminarFacturacion($facturacion);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>
