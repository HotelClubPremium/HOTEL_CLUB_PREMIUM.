<?php


/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO.
 */
class Tarjeta_registrocontrol extends Controlador{
    //put your code here
    
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerTarjeta_registro();
            $this->vista->set('tarjeta_registro', $datos);
            $this->vista->set('titulo', 'Lista de tarjetas_registro');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
     public function detalle($num_CheckIn) {
        try {
            $tarjeta_registros = $this->modelo->leerUsuarioPorDocumento($num_CheckIn);
            if ($tarjeta_registros!= null) {
                $this->vista->set('titulo', 'Datos de ' . $tarjeta_registros->getCodigo_cliente());
                $this->vista->set('tarjeta_registros', $tarjeta_registros);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('tarjeta_registros', $tarjeta_registros);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Tarjeta_registros');
        return $this->vista->imprimir();
    }

    public function guardar() {
        
        
        if (isset($_POST['agregartarjeta_registros'])) {

            $num_CheckIn = isset($_POST['num_CheckIn']) ? $_POST['num_CheckIn'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $total = isset($_POST['total']) ? $_POST['total'] : NULL;
            $fecha_servicio = isset($_POST['fecha_servicio']) ? $_POST['fecha_servicio'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $tarjeta_registros = new Tarjeta_registros();
                $tarjeta_registros->setcodigo_cliente($codigo_cliente);
                $tarjeta_registros->setNumero_servicio($numero_servicio);
                $tarjeta_registros->setTotal($total);
                $tarjeta_registros->setFecha_servicio($fecha_servicio);
                $tarjeta_registros->setNum_CheckIn($num_CheckIn);
                $tarjeta_registros->crearTarjeta_registros($tarjeta_registros);
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
        
         if (isset($_POST['modificartarjeta_registros'])) {

            $num_CheckIn = isset($_POST['num_CheckIn']) ? $_POST['num_CheckIn'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $total = isset($_POST['total']) ? $_POST['total'] : NULL;
            $fecha_servicio = isset($_POST['fecha_servicio']) ? $_POST['fecha_servicio'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $tarjeta_registros = new Tarjeta_registros();
                $tarjeta_registros->setcodigo_cliente($codigo_cliente);
                $tarjeta_registros->setNumero_servicio($numero_servicio);
                $tarjeta_registros->setTotal($total);
                $tarjeta_registros->setFecha_servicio($fecha_servicio);
                $tarjeta_registros->setNum_CheckIn($num_CheckIn);
                $tarjeta_registros->actualizarTarjeta_registros($tarjeta_registros);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminartarjeta_registros'])) {

            $num_CheckIn = isset($_POST['num_CheckIn']) ? $_POST['num_CheckIn'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $total = isset($_POST['total']) ? $_POST['total'] : NULL;
            $fecha_servicio = isset($_POST['fecha_servicio']) ? $_POST['fecha_servicio'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
                $tarjeta_registros = new Tarjeta_registros();
                $tarjeta_registros->setcodigo_cliente($codigo_cliente);
                $tarjeta_registros->setNumero_servicio($numero_servicio);
                $tarjeta_registros->setTotal($total);
                $tarjeta_registros->setFecha_servicio($fecha_servicio);
                $tarjeta_registros->setNum_CheckIn($num_CheckIn);
                $tarjeta_registros->eliminarTarjeta_registros($tarjeta_registros);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
}

?>
