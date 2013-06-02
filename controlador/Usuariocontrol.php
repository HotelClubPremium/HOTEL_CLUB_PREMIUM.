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
            session_start();
            if (!isset($_SESSION['usuario.id'])) {
                $this->setVista('fuera');
                return $this->vista->imprimir();
            }
//            $Usuario= $_SESSION['usuario.id'] ;  
            
//            $_SESSION['usuario'] = '';
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
             $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $usuario = new Usuario();
                $usuario->setCod_usuario($cod_usuario);
                $usuario->setNom_usuario($nom_usuario);
                $usuario->setApe_usuario($ape_usuario);
                $usuario->setFecha_nacimiento($fecha_nacimiento);
                $usuario->setSex_usuario($sex_usuario);
                $usuario->setCorreo_electronico($correo_electronico);
                $usuario->setClave($clave);
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
    
     public function login() {
        $this->vista->set('titulo', 'Acceder a la aplicaci&oacute;n');
        return $this->vista->imprimir();
    }

    public function fuera() {
        $this->vista->set('titulo', 'SALIENDO DE LA APLICACION');
         session_start();
        $_SESSION['usuario.id'] = null;
        session_destroy();
        return $this->vista->imprimir();
    }

    public function entrar() {
        if (isset($_POST['enviar'])) {
            $cod_usuario = isset($_POST['cod_usuario']) ? $_POST['cod_usuario'] : NULL;
            $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
            $usuario = $this->modelo->leerUsuarioPorClave($cod_usuario, $clave);
            if ($usuario == NULL) {
                $this->vista->set('mensaje', 'No esta registrado');
                return $this->vista->imprimir();
            }
            $this->vista->set('mensaje', 'Entrar a la aplicacion');
            //MANEJO DE SESIONES
            session_start();
            $_SESSION['usuario.id'] = $usuario->getNom_usuario();
            $_SESSION['usuario2.id'] =$usuario->getApe_usuario();
            return $this->vista->imprimir();
        }
    }
    
    
    public function olvidoclave() {
        $this->vista->set('titulo', 'Recuperar contrase&ntilde;a');
        return $this->vista->imprimir();
    }
    
    
     public function enviardatosolvido() {
        if (isset($_POST['botonenviar'])) {
            $cod_usuario = isset($_POST['$cod_usuario']) ? $_POST['$cod_usuario'] : NULL;
            $correo_electronico = isset($_POST['correo_electronico']) ? $_POST['correo_electronico'] : NULL;
            $usuario = $this->modelo->leerUsuarioPorMail($cod_usuario, $correo_electronico);
            if ($usuario == NULL) {
                $this->vista->set('mensaje', 'No esta registrado');
                return $this->vista->imprimir();
            }

            $msg1 = "Para cambiar su clave, haga clic en el siguiente enlace:<br>";
            //TODO: Mejor URL Para recuperar clave, por ejemplo, 
            //md5 o sha combinando usuario+mail+salt, etc.
            $msg1 .= "http://localhost/HOTEL_CLUB_PREMIUM/usuario/cambiarclave/" . $usuario->getCod_usuario();
            $msg1 .= "<br>El administrador";

            //TODO: se puede encapsular el envio de correos en una clase, para 
            //personalizar mas facil los datos configuracion y las opciones de envio.
            $mailer = new PHPMailer();
            $mailer->SetFrom("cursoss400@gmail.com", "PROGRAMACION BAJO WEB SS400");
            $direccion = $usuario->getCorreo_electronico();
            $nombre = $usuario->getNom_usuario() . " " . $usuario->getApe_usuario();
            $mailer->AddAddress($direccion, $nombre);
            $mailer->CharSet = "UTF-8";
            $mailer->SMTPDebug = true;
            $mailer->Subject = "Cambio de contraseña en la aplicación HOTEL_CLUB_PREMIUM";
            $mailer->MsgHTML($msg1);
            $mailer->IsSMTP();
            $mailer->Host = "smtp.gmail.com";
            $mailer->Port = 587;
            $mailer->SMTPAuth = true;
            $mailer->SMTPSecure = "tls";
            $mailer->Username = "cursoss400@gmail.com";
            $mailer->Password = "curso-400";
            if (!$mailer->Send()) {
                $this->vista->set("mensaje", "Error al enviar correo! (" . $mailer->ErrorInfo . ")");
                return $this->vista->imprimir();
            } else {
                $this->vista->set('mensaje', 'Se ha enviado la informaci&oacute;n de acceso a su correo.');
                return $this->vista->imprimir();
            }
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
