<?php

/**
 * Description of reservas_servicios
 *
 * @author MIGUEL JOSE PALOMINO CERPA
 */

/**
     *
     * @var declaracion de variables  para a clase reservas_servicios.
     * $numero_reserva;     ----> se refiere al codigo de identidicacion de la reserva
       $numero_servicio;    ----> se refiere al numero co el cual se identifica el servicio
       $numero_tarjeta;    ----> se refiere al codigo que identifica a la tarjeta del cliente
     */

class Reservas_servicios  extends Modelo{
    //put your code here
    
    private $numero_reserva;
    private $numero_servicio;
    private $numero_tarjeta;
    
    
    function __construct() {
         parent::__construct();
    }
    
      private function mapearReservas_servicios(Reservas_servicios $user, array $props) {
        if (array_key_exists('numero_reserva', $props)) {
            $user->setNumero_reserva($props['numero_reserva']);
        }
        if (array_key_exists('numero_servicio', $props)) {
            $user->setNumero_servicio($props['numero_servicio']);
        }
        if (array_key_exists('numero_tarjeta', $props)) {
            $user->setNumero_tarjeta($props['numero_tarjeta']);
        }
         
    }
    
    
      private function getParametros(Reservas_servicios $reservas_servicios) {
        $parametros = array(
            ':numero_reserva' => $reservas_servicios->getNumero_reserva(),
            ':numero_servicio' => $reservas_servicios->getNumero_servicio(),
            ':numero_tarjeta' => $reservas_servicios->getNumero_tarjeta(),
            
            
        );
        return $parametros;
    }
    
    public function getNumero_reserva() {
        return $this->numero_reserva;
    }

    public function setNumero_reserva($numero_reserva) {
        $this->numero_reserva = $numero_reserva;
    }

    public function getNumero_servicio() {
        return $this->numero_servicio;
    }

    public function setNumero_servicio($numero_servicio) {
        $this->numero_servicio = $numero_servicio;
    }

    public function getNumero_tarjeta() {
        return $this->numero_tarjeta;
    }

    public function setNumero_tarjeta($numero_tarjeta) {
        $this->numero_tarjeta = $numero_tarjeta;
    }

     public function crearReservas_servicios(Reservas_servicios $user) {
        $sql = "INSERT INTO test.reservas_servicios (numero_reserva,numero_servicio,numero_tarjeta) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerReservas_servicios() {
        $sql = "SELECT numero_reserva,numero_servicio,numero_tarjeta FROM test.reservas_servicios";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $usuarios = array();
        foreach ($resultado as $fila) {
            $user = new Reservas_servicios();
            $this->mapearReservas_servicios($user, $fila);
            $usuarios[$user->getReservas_servicios()] = $user;
        }
        return $usuarios;
    }
      
      public function leerReservas_serviciosporcodigo($num_reserva) {
        //TODO: Mejorar esta forma!!!
        $reservas_servicios = $this->leerReservas_servicios();
        foreach ($reservas_servicios as $reservas_servicio) {
            if ($reservas_servicio->getNumero_reserva() == $num_reserva)
                return $reservas_servicio;
        }
        return null;
    }

  
    public function actualizarReservas_servicios(Reservas_servicios $user) {
        $numero_reserva= $user->getNumero_reserva();
        $numero_servicio = $user->getNumero_servicio();
        $numero_tarjeta = $user->getNumero_tarjeta();
     
   $sql = "UPDATE test.reservas_servicios SET numero_reserva=$numero_reserva,numero_servicio='$numero_servicio',numero_tarjeta= '$numero_tarjeta'WHERE numero_reserva=$numero_reserva";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }
    
   
       public function eliminarReservas_servicios(Reservas_servicios $user) {
        $numero_reserva = $user->getNumero_reserva();
             $sql = "DELETE test.reservas_servicios where numero_reserva=$numero_reserva";

        $this->__setSql($sql);
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    
    
    
    

    
    
    
}

?>
