<?php

 /**
     *
     * @var declaracion de variables  para la clase servicios.
     * $cod_servicio;     ----> se refiere al codigo de identidicacion del servicio
       $nombre;    ----> se refiere al nombre del servicio
       $precio;    ----> se refiere al precio por disponer de este servicio
       $horario_disponible;---> se refiere al horario de disponibilidad del servicio
       
     */
class Servicio  extends Modelo{
    
    private $cod_servicio;
    private $nombre;
    private $precio;
    private $horario_disponible;
    
    
    function __construct() {
        parent::__construct();
        
    }
    
      private function mapeaServicios(Servicio $user, array $props) {
        if (array_key_exists('cod_servicio', $props)) {
            $user->setCod_servicio($props['cod_servicio']);
        }
        if (array_key_exists('nombre', $props)) {
            $user->setNombre($props['nombre']);
        }
        if (array_key_exists('precio', $props)) {
            $user->setPrecio($props['precio']);
        }
        if (array_key_exists('horario_disponible', $props)) {
            $user->setHorario_disponible($props['horario_disponible']);
        }
       
    }

      private function getParametros(Servicio $servicios) {
        $parametros = array(
            ':cod_servicio' => $servicios->getCod_servicio(),
            ':nombre' => $servicios->getNombre(),
            ':precio' => $servicios->getPrecio(),
            ':horario_disponible' => $servicios->getHorario_disponible(), 
            
        );
        return $parametros;
    }
    
    
    public function getCod_servicio() {
        return $this->cod_servicio;
    }

    public function setCod_servicio($cod_servicio) {
        $this->cod_servicio = $cod_servicio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getHorario_disponible() {
        return $this->horario_disponible;
    }

    public function setHorario_disponible($horario_disponible) {
        $this->horario_disponible = $horario_disponible;
    }

         public function crearServicios(Servicio $user) {
        $sql = "INSERT INTO test.servicios (cod_servicio,nombre,precio,horario_disponible) VALUES (?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerServicios() {
        $sql = "SELECT cod_servicio,nombre,precio,horario_disponible FROM test.servicios";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $servicios = array();
        foreach ($resultado as $fila) {
            $user = new Servicio();
            $this->mapearServicios($user, $fila);
            $servicios[$user->getCod_servicio()] = $user;
        }
        return $servicios;
    }
    
      public function leerServiciosporcodigo($cod_servicio) {
        //TODO: Mejorar esta forma!!!
        $servicios = $this->leerServicios();
        foreach ($servicios as $servicio) {
            if ($servicio->getCod_servicio() == $cod_servicio)
                return $servicio;
        }
        return null;
    }

   
     public function actualizarServicios(Servicio $user) {
        $cod_servicio= $user->getCod_servicio();
        $nombre = $user->getNombre();
        $precio = $user->getPrecio();
          $horario_disponible = $user->getHorario_disponible();
       
     $sql = "UPDATE test.servicios SET cod_servicio=$cod_servicio,nombre=$nombre,precio='$precio',horario_disponible='$horario_disponible' WHERE cod_servicio=$cod_servicio";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
        
    }
    
   
       public function eliminarservicios(Servicio $user) {
        $cod_servicio = $user->getCod_servicio();
        $sql = "DELETE test.servicios where cod_servicio=$cod_servicio";
        $this->__setSql($sql);
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }
    
    
    
    
    
    
    
    
  
}

?>
