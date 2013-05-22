<?php

/**
     * @author MELLADO
     *
     * @var declaracion de variables  para la clase facturacion.
     * 
       $numero_checkout     ---->se refiere al numero con el cual se identifica esta facturacion
       $codigo-cliente;     ----> se refiere al codigo de identidicacion del cliente
       $numero_servicio;    ----> se refiere al numero con el cual se identifica el servicio
       $facturacion_total;    ----> se refiere al valor a cancelar por el cliente por todos los servicios del cual el
                                    cliente hizo a su disposicion en el hotel
      
       
     */
class Facturacion   extends Modelo{
    //put your code here
     private $numero_checkout;
    private $codigo_cliente;
    private $numero_servicio;
    private $facturacion_total;
    
    
    function __construct() {
         parent::__construct();
        
    }
    
    
      private function mapearfacturacion(Facturacion $user, array $props) {
        if (array_key_exists('numero_checkout', $props)) {
            $user->setNumero_checkout($props['numero_checkout']);
        }
        if (array_key_exists('codigo_cliente', $props)) {
            $user->setCodigo_cliente($props['codigo_cliente']);
        }
        if (array_key_exists('numero_servicio', $props)) {
            $user->setNumero_servicio($props['numero_servicio']);
        }
        if (array_key_exists('facturacion_total', $props)) {
            $user->setFacturacion_total($props['facturacion_total']);
        }
       
       
    }

      private function getParametros(Facturacion $facturacion) {
        $parametros = array(
            ':numero_checkout' => $facturacion->getNumero_checkout(),
            ':codigo_cliente' => $facturacion->getCodigo_cliente(),
            ':numero_servicio' => $facturacion->getNumero_servicio(),
            ':facturacion_total' => $facturacion->getFacturacion_total(),
              );
        return $parametros;
    }
    public function getNumero_checkout() {
        return $this->numero_checkout;
    }

    public function setNumero_checkout($numero_checkout) {
        $this->numero_checkout = $numero_checkout;
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

    public function getFacturacion_total() {
        return $this->facturacion_total;
    }

    public function setFacturacion_total($facturacion_total) {
        $this->facturacion_total = $facturacion_total;
    }

   public function crearFacturacion(Facturacion $user) {
        $numero_checkout= $user->getNumero_checkout();
        $codigo_cliente= $user->getCodigo_cliente();
        $numero_servicio= $user->getNumero_servicio();
        $facturacion_total= $user->getFacturacion_total();
        
        $sql = "INSERT INTO facturacion (numero_checkout,codigo_cliente,numero_servicio,facturacion_total) VALUES ('$numero_checkout','$codigo_cliente','$numero_servicio','$facturacion_total')";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));
    }

    public function leerFacturacion() {
        $sql = "SELECT numero_checkout,codigo_cliente,numero_servicio,facturacion_total FROM facturacion";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $facturaciones = array();
        foreach ($resultado as $fila) {
            $user = new Facturacion();
            $this->mapearfacturacion($user, $fila);
            $facturaciones[$user->getNumero_checkout()] = $user;
        }
        return $facturaciones;
    }
    
    
      public function leerFacturacionporcodigo($numero_checkout) {
        //TODO: Mejorar esta forma!!!
        $facturaciones = $this->leerFacturacion();
        foreach ($facturaciones  as $facturacion) {
            if ($facturacion->getNumero_checkout() == $numero_checkout)
                return $facturacion;
        }
        return null;
    }
      
    

    
    
      public function actualizarFacturacion(Facturacion $user) {
        $numero_checkout= $user->getNumero_checkout();
        $codigo_cliente = $user->getCodigo_cliente();
        $numero_servicio = $user->getNumero_servicio();
        $facturacion_total = $user->getFacturacion_total();
      
       
          $sql = "UPDATE facturacion SET numero_checkout='$numero_checkout',codigo_cliente='$codigo_cliente',numero_servicio='$numero_servicio',facturacion_total='$facturacion_total' WHERE numero_checkout='$numero_checkout'";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($user));   
    }
   
   
      public function eliminarFacturacion(Facturacion $user) {
        $numero_checkout = $user->getNumero_checkout();
         $sql = "DELETE FROM facturacion WHERE numero_checkout=$numero_checkout";
        $this->__setSql($sql);
        $param = array(':numero_checkout' => $user->getNumero_checkout());
        $this->ejecutar($param); 
        
           
    }
    
    
}

?>
