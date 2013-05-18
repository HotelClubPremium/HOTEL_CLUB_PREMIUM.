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

    public function index() {
        try {
            $datos = $this->modelo->leerFacturacion();
            $this->vista->set('facturacion', $datos);
            $this->vista->set('titulo', 'Lista de facturacion');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
    
    
      public function detalle($numero_checkout) {
        try {
            $facturaciones = $this->modelo->leerUsuarioPorDocumento($numero_checkout);
            if ($facturaciones != null) {
                $this->vista->set('titulo', 'Datos de ' . $facturaciones->getCodigo_cliente());
                $this->vista->set('facturaciones', $facturaciones);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('facturaciones', $facturaciones);
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
                $facturaciones = new Facturaciones();
                $facturaciones->setCodigo_cliente($codigo_cliente);
                $facturaciones->setNumero_servicio($numero_servicio);
                $facturaciones->setFacturacion_total($facturacion_total);
                $facturaciones->setNumero_checkout($numero_checkout);
                $facturaciones->crearFacturacion($facturaciones);
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
           
            
                $facturaciones = new Facturaciones();
                $facturaciones->setCodigo_cliente($codigo_cliente);
                $facturaciones->setNumero_servicio($numero_servicio);
                $facturaciones->setFacturacion_total($facturacion_total);
                $facturaciones->setNumero_checkout($numero_checkout);
                $facturaciones->actualizarFacturacion($facturaciones);
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
           
            
                $facturaciones = new Facturaciones();
                $facturaciones->setCodigo_cliente($codigo_cliente);
                $facturaciones->setNumero_servicio($numero_servicio);
                $facturaciones->setFacturacion_total($facturacion_total);
                $facturaciones->setNumero_checkout($numero_checkout);
                $facturaciones->eliminarFacturacion($facturaciones);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
    
    
}

?>
