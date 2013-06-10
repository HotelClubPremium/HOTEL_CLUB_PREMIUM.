<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of checkin
 *
 * @author MELLADO
 */
class Checkin extends Modelo{
    private $num_checkin;
    private $cod_usuario;
    private $fecha_llegada;
    private $fecha_reserva; 
    private $fecha_inicio;
    private $fecha_salida;
    
    function __construct() {
        parent::__construct();
        
    }
    
        private function mapearCheckin(Checkin $user, array $props) {
        if (array_key_exists('num_checkin', $props)) {
            $user->setNum_checkin($props['num_checkin']);
        }
            
         if (array_key_exists('cod_usuario', $props)) {
            $user->setCod_usuario($props['cod_usuario']);
        }
        if (array_key_exists('fecha_llegada', $props)) {
           $user->setFecha_llegada(self::crearFecha($props['fecha_llegada']));
        }
        if (array_key_exists('fecha_reserva', $props)) {
           $user->setFecha_reserva(self::crearFecha($props['fecha_reserva']));
        }
        if (array_key_exists('fecha_inicio', $props)) {
           $user->setFecha_inicio(self::crearFecha($props['fecha_inicio']));
        }
        if (array_key_exists('fecha_salida', $props)) {
           $user->setFecha_salida(self::crearFecha($props['fecha_salida']));
        }
       
    }
    
        private function getParametros(Checkin $checkin) {
        $parametros = array(
            ':num_checkin' => $checkin->getNum_checkin(),
            ':cod_usuario' => $checkin->getCod_usuario(),
            ':fecha_llegada' => $checkin->getFecha_llegada(),
            ':fecha_reserva' => $checkin->getFecha_reserva(),
            ':fecha_inicio' => $checkin->getFecha_inicio(), 
            ':fecha_salida' => $checkin->getFecha_salida(), 
          
        );
        return $parametros;
    }
    
    public function getNum_checkin() {
        return $this->num_checkin;
    }

    public function setNum_checkin($num_checkin) {
        $this->num_checkin = $num_checkin;
    }

    public function getCod_usuario() {
        return $this->cod_usuario;
    }

    public function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    public function getFecha_llegada() {
        return $this->fecha_llegada;
    }

    public function setFecha_llegada($fecha_llegada) {
        $this->fecha_llegada = $fecha_llegada;
    }

    public function getFecha_reserva() {
        return $this->fecha_reserva;
    }

    public function setFecha_reserva($fecha_reserva) {
        $this->fecha_reserva = $fecha_reserva;
    }

    public function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    public function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function getFecha_salida() {
        return $this->fecha_salida;
    }

    public function setFecha_salida($fecha_salida) {
        $this->fecha_salida = $fecha_salida;
    }

    
public function crearCheckin(Checkin $user) {
        $num_checkin= $user->getNum_checkin();
        $cod_usuario= $user->getCod_usuario();
        $fecha_llegada= $user->getFecha_llegada();
        $fecha_reserva= $user->getFecha_reserva();
        $fecha_inicio= $user->getFecha_inicio();
        $fecha_salida= $user->getFecha_salida();
        
        
        $sql = "INSERT INTO checkin (num_checkin,cod_usuario,fecha_llegada,fecha_reserva,fecha_inicio,fecha_salida) VALUES ('$num_checkin','$cod_usuario','".$fecha_llegada."','".$fecha_reserva."','".$fecha_inicio."','".$fecha_salida."')";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerCheckin() {
        $sql = "SELECT num_checkin,cod_usuario,fecha_llegada,fecha_reserva,fecha_inicio,fecha_salida FROM checkin";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $checkins = array();
        foreach ($resultado as $fila) {
            $user = new Checkin();
            $this->mapearCheckin($user, $fila);
            $checkins[$user->getNum_checkin()] = $user;
        }
        return $checkins;
    }
    
     
     public function leerCheckinporcodigo($num_checkin) {
        //TODO: Mejorar esta forma!!!
        $checkins= $this->leerCheckin();
        foreach ($checkins as $checkin ) {
            if ($checkin ->getNum_checkin() == $num_checkin)
                return $checkin;
        }
        return null;
    }
     public function leerCheckinporcodigo2($cod_usuario) {
        //TODO: Mejorar esta forma!!!
        $checkins= $this->leerCheckin();
        foreach ($checkins as $checkin ) {
            if ($checkin ->getCod_usuario() == $cod_usuario)
                return $checkin;
        }
        return null;
    }
    
    
   
     public function actualizarCheckin(Checkin $user) {
        $num_checkin= $user->getNum_checkin();
        $cod_usuario= $user->getCod_usuario();
        $fecha_llegada= $user->getFecha_llegada();
        $fecha_reserva= $user->getFecha_reserva();
        $fecha_inicio= $user->getFecha_inicio();
        $fecha_salida= $user->getFecha_salida();
       $sql = "UPDATE checkin SET cod_usuario='$cod_usuario',fecha_llegada='$fecha_llegada',fecha_reserva='$fecha_reserva',fecha_inicio='$fecha_inicio',fecha_salida='$fecha_salida' WHERE num_checkin='$num_checkin'";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
        
    }
   
       public function eliminarCheckin(Checkin $user) {
         $num_checkin= $user->getNum_checkin();
         $sql = "DELETE FROM checkin WHERE num_checkin=$num_checkin";
        $this->__setSql($sql);
        $param = array(':num_checkin' => $user->getNum_checkin());
        $this->ejecutar($param); 
    } 
   
}

    


?>
