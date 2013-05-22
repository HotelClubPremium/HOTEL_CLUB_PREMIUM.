<?php

/**
     * @author  MIGUEL JOSE PALOMINO CERPA
     *
     * @var declaracion de variables  para la tarjeta_registro.
     * $codigo-cliente;     ----> se refiere al codigo de identidicacion del cliente
       $numero_servicio;    ----> se refiere al numero co el cual se identifica el servicio
       $total;    ----> se refiere al valor por disponer del servicio
       $fecha_servicio;---> se refiere a la fecha en la que fue adquirido el servicio
       
     */


class Tarjeta_registro extends Modelo {
    //put your code here
    private $num_CheckIn;
    private $codigo_cliente;
    private $numero_servicio;
    private $total;
    private $fecha_servicio; 
    
    function __construct() {
        parent::__construct();
        
    }
    
        private function mapearTarjeta_registro(Tarjeta_registro $user, array $props) {
        if (array_key_exists('num_CheckIn', $props)) {
            $user->setNum_CheckIn($props['num_CheckIn']);
        }
            
         if (array_key_exists('codigo_cliente', $props)) {
            $user->setCodigo_cliente($props['codigo_cliente']);
        }
        if (array_key_exists('numero_servicio', $props)) {
            $user->setNumero_servicio($props['numero_servicio']);
        }
        if (array_key_exists('total', $props)) {
            $user->setTotal($props['total']);
        }
        if (array_key_exists('fecha_servicio', $props)) {
           $user->setFecha_servicio(self::crearFecha($props['fecha_servicio']));
        }
       
    }
    
        private function getParametros(Tarjeta_registro $tarjeta_registro) {
        $parametros = array(
            ':num_CheckIn' => $tarjeta_registro->getNum_CheckIn(),
            ':codigo_cliente' => $tarjeta_registro->getCodigo_cliente(),
            ':numero_servicio' => $tarjeta_registro->getNumero_servicio(),
            ':total' => $tarjeta_registro->getTotal(),
            ':fecha_servicio' => $tarjeta_registro->getFecha_servicio(), 
        );
        return $parametros;
    }
    
    public function getNum_CheckIn() {
        return $this->num_CheckIn;
    }

    public function setNum_CheckIn($num_CheckIn) {
        $this->num_CheckIn = $num_CheckIn;
    }

        public function getCodigo_cliente() {
        return $this->codigo_cliente;
    }

    public function setCodigo_cliente($codigo_cliente) {
        $this->codigo_cliente = $codigo_cliente;
    }

    public function getNumero_servicio() {
        return $this->numero_servicio;
    }

    public function setNumero_servicio($numero_servicio) {
        $this->numero_servicio = $numero_servicio;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getFecha_servicio() {
        return $this->fecha_servicio;
    }

    public function setFecha_servicio($fecha_servicio) {
        $this->fecha_servicio = $fecha_servicio;
    }

 public function crearTarjeta_registro(Tarjeta_registro $user) {
        $num_CheckIn= $user->getNum_CheckIn();
        $codigo_cliente= $user->getCodigo_cliente();
        $numero_servicio= $user->getNumero_servicio();
        $total= $user->getTotal();
        $fecha_servicio= $user->getFecha_servicio();
        
        $sql = "INSERT INTO tarjeta_registro (num_CheckIn,codigo_cliente,numero_servicio,total,fecha_servicio) VALUES ('$num_CheckIn','$codigo_cliente','$numero_servicio','$total','".$fecha_servicio."')";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerTarjeta_registro() {
        $sql = "SELECT num_CheckIn,codigo_cliente,numero_servicio,total,fecha_servicio FROM tarjeta_registro";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $tarjeta_registros = array();
        foreach ($resultado as $fila) {
            $user = new Tarjeta_registro();
            $this->mapearTarjeta_registro($user, $fila);
            $tarjeta_registros[$user->getNum_CheckIn()] = $user;
        }
        return $tarjeta_registros;
    }
    
     
     public function leerTarjeta_registroporcodigo($num_CheckIn) {
        //TODO: Mejorar esta forma!!!
        $tarjeta_registros= $this->leerTarjeta_registro();
        foreach ($tarjeta_registros as $tarjeta_registro ) {
            if ($tarjeta_registro ->getNum_CheckIn() == $num_CheckIn)
                return $tarjeta_registro;
        }
        return null;
    }

   
     public function actualizarTarjeta_registro(Tarjeta_registro $user) {
        $num_CheckIn= $user->getNum_CheckIn();
        $codigo_cliente = $user->getCodigo_cliente();
        $numero_servicio= $user->getNumero_servicio();
        $total = $user->getTotal();
        $fecha_servicio = $user->getFecha_servicio ();
 
       $sql = "UPDATE tarjeta_registro SET codigo_cliente='$codigo_cliente',numero_servicio='$numero_servicio',total='$total',fecha_servicio='$fecha_servicio' WHERE num_CheckIn='$num_CheckIn'";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
        
    }
   
       public function eliminartarjeta_registro(Tarjeta_registro $user) {
         $num_CheckIn= $user->getNum_CheckIn();
         $sql = "DELETE FROM tarjeta_registro WHERE num_CheckIn=$num_CheckIn";
        $this->__setSql($sql);
        $param = array(':num_CheckIn' => $user->getNum_CheckIn());
        $this->ejecutar($param); 
    } 
   
}

?>
