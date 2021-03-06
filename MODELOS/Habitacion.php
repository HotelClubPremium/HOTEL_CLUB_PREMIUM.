<?php
 /**
     *
     * @var declaracion de variables  para la clase habitacion.
     * $num_habitacion;     ----> se refiere al codigo de identidicacion de la habitacion
       $tipo;    ----> se refiere al tipo de la habitacion
       $precio;    ----> se refiere al precio por disponer de ese tipo de habitacion
       $disponibilidad;---> se refiere si la habitacion esta disponible o no
       ,,,,,,,,,
     */
class Habitacion  extends Modelo {
    //put your code here
    
    private $num_habitacion;
    private $tipo;
    private $precio;
    private $disponibilidad;
   
    function __construct() {
         parent::__construct();
        
    }
    
    
     private function mapearHabitacion(Habitacion $user, array $props) {
        if (array_key_exists('num_habitacion', $props)) {
            $user->setNum_habitacion($props['num_habitacion']);
        }
        if (array_key_exists('tipo', $props)) {
            $user->setTipo($props['tipo']);
        }
        if (array_key_exists('precio', $props)) {
            $user->setPrecio($props['precio']);
        }
        if (array_key_exists('disponibilidad', $props)) {
            $user->setDisponibilidad($props['disponibilidad']);
          }
       
    }

      private function getParametros(Habitacion $habitacion) {
        $parametros = array(
            ':num_habitacion' => $habitacion->getNum_habitacion(),
            ':tipo' => $habitacion->getTipo(),
            ':precio' => $habitacion->getPrecio(),
            ':disponibilidad' => $habitacion->getDisponibilidad(),
            
            
        );
        return $parametros;
    }
    
   

        public function getNum_habitacion() {
        return $this->num_habitacion;
    }

    public function setNum_habitacion($num_habitacion) {
        $this->num_habitacion = $num_habitacion;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    public function setDisponibilidad($disponibilidad) {
        $this->disponibilidad = $disponibilidad;
    }

    
   public function crearHabitacion(Habitacion $user) {
       
        $num_habitacion= $user->getNum_habitacion();
        $tipo= $user->getTipo();
        $precio= $user->getPrecio();
        $disponibilidad= $user->getDisponibilidad();
       
        $sql = "INSERT INTO habitacion (num_habitacion,tipo,precio,disponibilidad,) VALUES ('$num_habitacion','$tipo','$precio','$disponibilidad')";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerHabitacion() {
        $sql = "SELECT num_habitacion,tipo,precio,disponibilidad FROM habitacion";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $habitaciones = array();
        foreach ($resultado as $fila) {
            $user = new habitacion();
            $this->mapearHabitacion($user, $fila);
            $habitaciones [$user->getNum_habitacion()] = $user;
        }
        return $habitaciones ;
    }
    
       public function leerHabitacionporcodigo($num_habitacion) {
        //TODO: Mejorar esta forma!!!
        $habitaciones = $this->leerHabitacion();
        foreach ($habitaciones   as $habitacion) {
            if ($habitacion->getNum_habitacion() == $num_habitacion)
                return $habitacion;
        }
        return null;
    }

   
      public function actualizarHabitacion(habitacion $user) {
        $num_habitacion= $user->getNum_habitacion();
        $tipo= $user->getTipo();
        $precio= $user->getPrecio();
        $disponibilidad= $user->getDisponibilidad();
        
       
        $sql = "UPDATE habitacion SET num_habitacion=$num_habitacion,tipo='$tipo',precio='$precio',disponibilidad='$disponibilidad' WHERE num_habitacion=$num_habitacion";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }
   
       public function eliminarhabitacion(habitacion $user) {
     /*   $num_habitacion= $user->getNum_habitacion();
       $sql = "DELETE habitacion WHERE num_habitacion='$num_habitacion'";
        $this->__setSql($sql);
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));*/
        $num_habitacion= $user->getNum_habitacion();  
        $sql = "DELETE FROM habitacion WHERE num_habitacion= $num_habitacion";
        $this->__setSql($sql);
        $param = array(':num_habitacion' => $user->getNum_habitacion());
        $this->ejecutar($param); 
           
           
    }
    
    
    
}

?>
