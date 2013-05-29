<?php

/**
 * Description of usuarios
 *
 * @author MIGUEL JOSE PALOMINO
 */
class Usuario extends Modelo {
    
    /**
     *
     * @var declaracion de variables  para la clase usuarios.
     * $Cod_usuario     ----> se refiere al codigo de identidicacion de usuario
       $Nom_usuario;    ----> se refiere a solo el nombre(s) del usuario
       $Ape_usuario;    ----> se refiere a los apellidos de usuario
       $Fecha_nacimiento;---> se refiere a la fecha de nacimento del usuario
       $Sex_usuario;    ----> se refiere al sexo (M/F) del  usuario
       $Correo_electronico;-> se refiere al correo electronico de usuario
     */
    private $cod_usuario;
    private $nom_usuario;
    private $ape_usuario;
    private $fecha_nacimiento;
    private $sex_usuario;
    private $correo_electronico;
    private $clave;

    public function __construct() {
        parent::__construct();
    }

    private function mapearUsuario(Usuario $user, array $props) {
        if (array_key_exists('cod_usuario', $props)) {
            $user->setCod_usuario($props['cod_usuario']);
        }
        if (array_key_exists('nom_usuario', $props)) {
            $user->setNom_usuario($props['nom_usuario']);
        }
        if (array_key_exists('ape_usuario', $props)) {
            $user->setApe_usuario($props['ape_usuario']);
        }
        if (array_key_exists('fecha_nacimiento', $props)) {
            $user->setFecha_nacimiento(self::crearFecha($props['fecha_nacimiento']));
        }
         if (array_key_exists('sex_usuario', $props)) {
            $user->setSex_usuario($props['sex_usuario']);
        }
         if (array_key_exists('correo_electronico', $props)) {
            $user->setCorreo_electronico($props['correo_electronico']);
        }
        if (array_key_exists('clave', $props)) {
            $user->setClave($props['clave']);
        }
    }

    private function getParametros(Usuario $usuario) {
        $parametros = array(
            ':cod_usuario' => $usuario->getCod_usuario(),
            ':nom_usuario' => $usuario->getNom_usuario(),
            ':ape_usuario' => $usuario->getApe_usuario(),
            ':fecha_nacimiento' =>$usuario->getFecha_nacimiento(),
            ':sex_usuario' => $usuario->getSex_usuario(),
            ':correo_electronico' => $usuario->getCorreo_electronico(),
            ':clave' => $usuario->getClave()
        );
        
        return $parametros;
    }

   /**
 * Description:jjjjjjjjjjjjjjjj getters y setters de la clases usuarios
 *

 */
public function getCod_usuario() {
    return $this->cod_usuario;
}

public function setCod_usuario($cod_usuario) {
    $this->cod_usuario = $cod_usuario;
}

public function getNom_usuario() {
    return $this->nom_usuario;
}

public function setNom_usuario($nom_usuario) {
    $this->nom_usuario = $nom_usuario;
}

public function getApe_usuario() {
    return $this->ape_usuario;
}

public function setApe_usuario($ape_usuario) {
    $this->ape_usuario = $ape_usuario;
}

public function getFecha_nacimiento() {
    return $this->fecha_nacimiento;
}

public function setFecha_nacimiento($fecha_nacimiento) {
    $this->fecha_nacimiento = $fecha_nacimiento;
}

public function getSex_usuario() {
    return $this->sex_usuario;
}

public function setSex_usuario($sex_usuario) {
    $this->sex_usuario = $sex_usuario;
}

public function getCorreo_electronico() {
    return $this->correo_electronico;
}

public function setCorreo_electronico($correo_electronico) {
    $this->correo_electronico = $correo_electronico;
}
public function getClave() {
    return $this->clave;
}

public function setClave($clave) {
    $this->clave = $clave;
}

/**
 * Description: Funciones CRUD
 *
 * @author MIGUEL JOSE PALOMINO
 */

    public function crearUsuarios(Usuario $user) {
        $codigo=$user->getCod_usuario();
        $nombre=$user->getNom_usuario();
        $apellido = $user->getApe_usuario();
        $fecha = $user->getFecha_nacimiento();
        $sexo = $user->getSex_usuario();
        $correo= $user->getCorreo_electronico();
        $clave = $user->getClave();
        
        $sql = "INSERT INTO usuario (cod_usuario, nom_usuario, ape_usuario, fecha_nacimiento, sex_usuario, correo_electronico, clave) VALUES('$codigo','$nombre','$apellido','".$fecha."','$sexo','$correo', SHA('$clave'))";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerUsuarios() {
        $sql = "SELECT cod_usuario, nom_usuario,ape_usuario, fecha_nacimiento,sex_usuario,correo_electronico FROM usuario";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $usuarios = array();
        foreach ($resultado as $fila) {
            $user = new usuario();
            $this->mapearUsuario($user, $fila);
            $usuarios[$user->getCod_usuario()] = $user;
        }
        return $usuarios;
    }
    
     public function leerUsuarioporcodigo($cod_usuario) {
        //TODO: Mejorar esta forma!!!
        $usuarios = $this->leerUsuarios();
        foreach ($usuarios  as $usuario ) {
            if ($usuario ->getCod_usuario() == $cod_usuario)
                return $usuario;
        }
        return null;
    }
    
    
      public function leerUsuarioPorClave($usuario, $clave) {
        //TODO: Hacer las funciones de encriptacion en php 
        //$clave = encriptar_sha($clave)

        $sql = "SELECT * FROM usuario WHERE cod_usuario=? AND clave=SHA(?)";
        $param = array($usuario, $clave);
        $this->__setSql($sql);
        $res = $this->consultar($sql, $param);
        $usuario = NULL;
        foreach ($res as $fila) {
            $usuario = new Usuario();
            $this->mapearUsuario($usuario, $fila);
        }
        return $usuario;
    }


    
    public function actualizarUsuarios(Usuario $user) {
        $nom_usuario= $user->getNom_usuario();
        $ape_usuario = $user->getApe_usuario();
        $fecha_nacimiento= $user->getFecha_nacimiento();
        $sex_usuario = $user->getSex_usuario();
        $correo_electronico = $user->getCorreo_electronico  ();
        $cod_usuario = $user->getCod_usuario();
       
        $sql = "UPDATE usuario SET nom_usuario='$nom_usuario',ape_usuario='$ape_usuario', fecha_nacimiento='$fecha_nacimiento',sex_usuario='$sex_usuario',correo_electronico='$correo_electronico'  WHERE cod_usuario =$cod_usuario ";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
        
    }
   
       public function eliminarusuarios(Usuario $user) {
        $cod_usuario= $user->getCod_usuario();
       $sql = "DELETE from usuario where cod_usuario=$cod_usuario";
        $this->__setSql($sql);
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }
   
    
}

?>
