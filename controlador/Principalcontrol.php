<?php


/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO
 */
class Principalcontrol extends Controlador{
    //put your code here
    
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
       
    }

 public function index() {
        try {
            /* session_start();
            if (!isset($_SESSION['usuario.id'])) {
                $this->setVista('fuera');
                return $this->vista->imprimir();
            }*/
           
          
//            $this->vista->set('titulo', 'Lista de usuarios');
              $this->vista->set('Principal','');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
    
    
    
    
}

?>
