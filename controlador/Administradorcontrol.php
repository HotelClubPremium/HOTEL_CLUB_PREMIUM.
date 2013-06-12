<?php


/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO
 */
class Administradorcontrol extends Controlador{
    //put your code here
    
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
       
    }

 public function index() {
       try {
             session_start();
            if (!isset($_SESSION['usuario.id'])) {
//                $this->setVista('fuera');
                return $this->vista->imprimir();
            }
           
          $this->setVista('index');
          //  $this->vista->set('titulo', 'Lista de usuarios');
//              $this->vista->set('Principal','');
           $this->vista->set('usuarios');
            $this->vista->set('titulo', 'Lista de usuarios');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
     
      public function login() {
        $this->vista->set('titulo', 'Acceder a la aplicaci&oacute;n');
        return $this->vista->imprimir();
    }
     public function entrar() {
        if (isset($_POST['enviar'])) {
            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
            $usuario = $this->modelo->leerUsuarioPorClave2($cod_usuario, $clave);
            if ($usuario == NULL) {
                $this->vista->set('mensaje', 'No esta registrado');
                return $this->vista->imprimir();
            }
            $this->vista->set('mensaje', 'Entrar a la aplicacion');
            //MANEJO DE SESIONES
            session_start();
            $_SESSION['usuario.id'] = $usuario->getNom_usuario();
            $_SESSION['usuario2.id'] =$usuario->getApe_usuario();
            $_SESSION['usuario3.id'] =$usuario->getFecha_nacimiento();
            $_SESSION['usuario4.id'] =$usuario->getsex_usuario();
            $_SESSION['usuario5.id'] =$usuario->getCorreo_electronico();
            $_SESSION['usuario6.id'] =$usuario->getCod_usuario();
            return $this->vista->imprimir();
        }
    }
     public function fuera() {
        $this->vista->set('titulo', 'SALIENDO DE LA APLICACION');
         session_start();
        $_SESSION['usuario.id'] = null;
        session_destroy();
        return $this->vista->imprimir();
    }
    
    
    
    
 
    
    
    
}

?>
