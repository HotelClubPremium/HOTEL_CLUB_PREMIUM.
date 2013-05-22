<?php


/**
 * Clase para manejar los controladores en la aplicacion
 *
 * @author MELLADO
 */
class Usuariocontrol extends Controlador{
    //put your code here
    
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

 public function index() {
        try {
            $datos = $this->modelo->leerUsuarios();
            $this->vista->set('usuarios', $datos);
            $this->vista->set('titulo', 'Lista de usuarios');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: ' . $exc->getMessage();
        }
    }
    
    
     public function detalle($cod_usuario) {
        try {
            $usuario = $this->modelo->leerUsuarioporcodigo($cod_usuario);
            if ($usuario != null) {
                $this->vista->set('titulo', 'Datos de ' . $usuario->getNom_usuario());
                $this->vista->set('usuario', $usuario);
            } else {
                //TODO: Esto se puede mejorar redireccionando a una pagina de error
                $this->vista->set('titulo', 'Usuario no existe');
                $this->vista->set('reserva', $usuario);
            }
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function agregar() {
        $this->vista->set('titulo', 'Agregar Usuario');
        return $this->vista->imprimir();
    }
    
public function guardar() {
        
        
        if (isset($_POST['agregarUsuario'])) {

            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $nom_usuario = isset($_POST['nom_usuario']) ? $_POST['nom_usuario'] : NULL;
            $ape_usuario = isset($_POST['ape_usuario']) ? $_POST['ape_usuario'] : NULL;
            $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : NULL;
            $sex_usuario = isset($_POST['sex_usuario']) ? $_POST['sex_usuario'] : NULL;
            $correo_electronico= isset($_POST['correo_electronico']) ? $_POST['correo_electronico'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $usuario = new Usuario();
                $usuario->setCod_usuario($cod_usuario);
                $usuario->setNom_usuario($nom_usuario);
                $usuario->setApe_usuario($ape_usuario);
                $usuario->setFecha_nacimiento($fecha_nacimiento);
                $usuario->setSex_usuario($sex_usuario);
                $usuario->setCorreo_electronico($correo_electronico);
                $usuario->crearUsuarios($usuario);
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
        
         if (isset($_POST['ModificarUsuarios'])) {

            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $nom_usuario = isset($_POST['nom_usuario']) ? $_POST['nom_usuario'] : NULL;
            $ape_usuario = isset($_POST['ape_usuario']) ? $_POST['ape_usuario'] : NULL;
            $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : NULL;
            $sex_usuario = isset($_POST['sex_usuario']) ? $_POST['sex_usuario'] : NULL;
            $correo_electronico= isset($_POST['correo_electronico']) ? $_POST['correo_electronico'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $usuario = new Usuario();
                $usuario->setNom_usuario($nom_usuario);
                $usuario->setApe_usuario($ape_usuario);
                $usuario->setFecha_nacimiento($fecha_nacimiento);
                $usuario->setSex_usuario($sex_usuario);
                $usuario->setCorreo_electronico($correo_electronico);
                
                $usuario->setCod_usuario($cod_usuario);
                $usuario->actualizarUsuarios($usuario);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha modificado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
        
      if (isset($_POST['EliminarUsuarios'])) {

            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $nom_usuario = isset($_POST['nom_usuario']) ? $_POST['nom_usuario'] : NULL;
            $ape_usuario = isset($_POST['ape_usuario']) ? $_POST['ape_usuario'] : NULL;
            $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : NULL;
            $sex_usuario = isset($_POST['sex_usuario']) ? $_POST['sex_usuario'] : NULL;
            $correo_electronico= isset($_POST['correo_electronico']) ? $_POST['correo_electronico'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
           
            
                $usuario = new Usuario();
                $usuario->setNom_usuario($nom_usuario);
                $usuario->setApe_usuario($ape_usuario);
                $usuario->setFecha_nacimiento($fecha_nacimiento);
                $usuario->setSex_usuario($sex_usuario);
                $usuario->setCorreo_electronico($correo_electronico);
                
                $usuario->setCod_usuario($cod_usuario);
                $usuario->eliminarusuarios($usuario);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha eliminado la informacion de manera satisfactoria');
            
            return $this->vista->imprimir();
        }
    } 
        
    
    
    
}

?>
