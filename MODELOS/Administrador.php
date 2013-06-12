<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author MELLADO
 */
class Administrador extends Modelo{
    
    
    private $cod_usuario;
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
    public function getCod_usuario() {
        return $this->cod_usuario;
    }

    public function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

        
    
    //put your code here
    
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
}

?>
