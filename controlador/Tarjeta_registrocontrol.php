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
            $tarjeta_registro = $this->modelo->leerTarjeta_registroporcodigo($num_CheckIn);
            if ($tarjeta_registro!= null) {
                $this->vista->set('titulo', 'Datos de ' . $tarjeta_registro->getCodigo_cliente());
                $this->vista->set('tarjeta_registro', $tarjeta_registro);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('tarjeta_registro', $tarjeta_registro);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Tarjeta_registro');
        return $this->vista->imprimir();
    }

    public function guardar() {
        
        
        if (isset($_POST['agregartarjeta_registro'])) {

            $num_CheckIn = isset($_POST['num_CheckIn']) ? $_POST['num_CheckIn'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $total = isset($_POST['total']) ? $_POST['total'] : NULL;
            $fecha_servicio = isset($_POST['fecha_servicio']) ? $_POST['fecha_servicio'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $tarjeta_registro = new Tarjeta_registro();
                $tarjeta_registro->setcodigo_cliente($codigo_cliente);
                $tarjeta_registro->setNumero_servicio($numero_servicio);
                $tarjeta_registro->setTotal($total);
                $tarjeta_registro->setFecha_servicio($fecha_servicio);
                $tarjeta_registro->setNum_CheckIn($num_CheckIn);
                $tarjeta_registro->crearTarjeta_registro($tarjeta_registro);
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
        
         if (isset($_POST['modificartarjeta_registro'])) {

            $num_CheckIn = isset($_POST['num_CheckIn']) ? $_POST['num_CheckIn'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $total = isset($_POST['total']) ? $_POST['total'] : NULL;
            $fecha_servicio = isset($_POST['fecha_servicio']) ? $_POST['fecha_servicio'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $tarjeta_registro = new Tarjeta_registro();
                $tarjeta_registro->setcodigo_cliente($codigo_cliente);
                $tarjeta_registro->setNumero_servicio($numero_servicio);
                $tarjeta_registro->setTotal($total);
                $tarjeta_registro->setFecha_servicio($fecha_servicio);
                $tarjeta_registro->setNum_CheckIn($num_CheckIn);
                $tarjeta_registro->actualizarTarjeta_registro($tarjeta_registro);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['eliminartarjeta_registro'])) {

            $num_CheckIn = isset($_POST['num_CheckIn']) ? $_POST['num_CheckIn'] : NULL;
            $codigo_cliente = isset($_POST['codigo_cliente']) ? $_POST['codigo_cliente'] : NULL;
            $numero_servicio = isset($_POST['numero_servicio']) ? $_POST['numero_servicio'] : NULL;
            $total = isset($_POST['total']) ? $_POST['total'] : NULL;
            $fecha_servicio = isset($_POST['fecha_servicio']) ? $_POST['fecha_servicio'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
                 $tarjeta_registro = new Tarjeta_registro();
                $tarjeta_registro->setcodigo_cliente($codigo_cliente);
                $tarjeta_registro->setNumero_servicio($numero_servicio);
                $tarjeta_registro->setTotal($total);
                $tarjeta_registro->setFecha_servicio($fecha_servicio);
                $tarjeta_registro->setNum_CheckIn($num_CheckIn);
                $tarjeta_registro->eliminartarjeta_registro($tarjeta_registro);
                $this->vista->set('titulo', 'Datos eliminados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
    
    
    
    
    
    
    
    
}

?>
