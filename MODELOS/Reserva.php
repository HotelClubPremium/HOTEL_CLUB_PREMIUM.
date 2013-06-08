<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class Reserva  extends Modelo {
    
    /**
     *
     * @var Declaracion de variables de la clase reservas
     *  Num_reserva : indica el numero de la reserva que le corresponde al cliente
        Cod_usuario: Cedula del usuario que va a pedir la reserva
        Num_habitacion: Numero de habitacion(previamente el cliente debe escoger la habitacion de su gusto )
        Dias_reserva: cuantos dias va a durar el cliente en el hotel
        Fecha_inicio: fecha en que quiere iniciar la reserva
        Fecha_reserva: fecha en que hizo la reserva
        Total_pagar: total a pagar por la reserva

     */
     
    
    private $num_reserva;
    private $cod_usuario;
    private $num_habitacion;
    private $dias_reserva;
    private $fecha_inicio;
    private $fecha_reserva;
    private $total_pagar;
    
    public function __construct() {
        parent::__construct();
    }
    
    private function mapearReservas(Reserva $user, array $props) {
        if (array_key_exists('cod_usuario', $props)) {
            $user->setCod_usuario($props['cod_usuario']);
        }
        if (array_key_exists('num_reserva', $props)) {
            $user->setNum_reserva($props['num_reserva']);
        }
        if (array_key_exists('num_habitacion', $props)) {
            $user->setNum_habitacion($props['num_habitacion']);
        }
        if (array_key_exists('fecha_inicio', $props)) {
            $user->setFecha_inicio(self::crearFecha($props['fecha_inicio']));
        }
          if (array_key_exists('fecha_reserva', $props)) {
            $user->setFecha_reserva(self::crearFecha($props['fecha_reserva']));
        }
        if (array_key_exists('dias_reserva', $props)) {
            $user->setDias_reserva($props['dias_reserva']);
        }
        if (array_key_exists('total_pagar', $props)) {
            $user->setTotal_pagar($props['total_pagar']);
        }
    }
    
    private function getParametros(Reserva $reserva) {
        $parametros = array(
            ':cod_usuario' => $reserva->getCod_usuario(),
            ':num_reserva' => $reserva->getNum_reserva(),
            ':num_habitacion' => $reserva->getNum_habitacion(),
            ':fecha_inicio' => $this->formatearFecha($reserva->getFecha_inicio()),
            ':fecha_reserva' => $this->formatearFecha($reserva->getFecha_reserva()),  
            ':dias_reserva' => $reserva->getDias_reserva(), 
            ':total_pagar' => $reserva->getTotal_pagar() 
        );
        return $parametros;
    }

    public function getNum_reserva() {
        return $this->num_reserva;
    }

    public function setNum_reserva(Declaracion $num_reserva) {
        $this->num_reserva = $num_reserva;
    }

    public function getCod_usuario() {
        return $this->cod_usuario;
    }

    public function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    public function getNum_habitacion() {
        return $this->num_habitacion;
    }

    public function setNum_habitacion($num_habitacion) {
        $this->num_habitacion = $num_habitacion;
    }

    public function getDias_reserva() {
        return $this->dias_reserva;
    }

    public function setDias_reserva($dias_reserva) {
        $this->dias_reserva = $dias_reserva;
    }

    public function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    public function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function getFecha_reserva() {
        return $this->fecha_reserva;
    }

    public function setFecha_reserva($fecha_reserva) {
        $this->fecha_reserva = $fecha_reserva;
    }

    public function getTotal_pagar() {
        return $this->total_pagar;
    }

    public function setTotal_pagar($total_pagar) {
        $this->total_pagar = $total_pagar;
    }

    
   public function crearReservas(Reserva $user) {
        $sql = "INSERT INTO reserva (num_reserva,cod_usuario,num_habitacion,dias_reserva,fecha_inicio,fecha_reserva,total_pagar) VALUES (:num_reserva,:cod_usuario,:num_habitacion,:dias_reserva,:fecha_reserva,:total_pagar)";
        $this->__setSql($sql);
        $this->prepararSentencia($sql);
        $this->sentencia->bindParam(":num_reserva", $user->getNum_reserva(),PDO::PARAM_STR);
        $this->sentencia->bindParam(":cod_usuario", $user->getCod_usuario(),PDO::PARAM_STR);
        $this->sentencia->bindParam(":num_habitacion", $user->getNum_habitacion(),PDO::PARAM_STR);
        $this->sentencia->bindParam(":dias_reserva", $user->getDias_reserva(),PDO::PARAM_INT);
        $this->sentencia->bindParam(":fecha_inicio", $this->formatearFecha($user->getFecha_inicio()),PDO::PARAM_STR);
        $this->sentencia->bindParam(":fecha_reserva", $this->formatearFecha($user->getFecha_reserva()),PDO::PARAM_STR);
        $this->sentencia->bindParam(":total_pagar", $user->getTotal_pagar(),PDO::PARAM_STR);
                $this->ejecutarSentencia();
    }

    public function leerReservas() {
        
        $sql = "SELECT num_reserva,cod_usuario,num_habitacion,dias_reserva,fecha_inicio,fecha_reserva,total_pagar FROM test.reserva";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $reservas = array();
        foreach ($resultado as $fila) {
            $user = new Reserva();
            $this->mapearReservas($user, $fila);
            $reservas[$user->getNum_reserva()] = $user;
        }
        return $reservas;
    }
    
      public function leerReservaporcodigo($num_reserva) {
        //TODO: Mejorar esta forma!!!
        $reservas = $this->leerReservas();
        foreach ($reservas as $reserva) {
            if ($reserva->getNum_reserva() == $num_reserva)
                return $reserva;
        }
        return null;
    }

    
    
      public function actualizarReservas(Reserva $user) {
          
         $sql = "UPDATE test.reserva SET num_reserva=:num_reserva,cod_usuario=:cod_usuario,num_habitacion=:num_habitacion,dias_reserva=:dias_reserva,fecha_inicio=:fecha_inicio,fecha_reserva=:fecha_reserva,total_pagar=:total_pagar WHERE num_reserva=:num_reserva";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
            }
    
   
       public function eliminarReservas(Reserva $user) {
        $num_reserva = $user->getNum_reserva();
        $sql = "DELETE FROM test.reserva where num_reserva=$num_reserva";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }
}




?>
