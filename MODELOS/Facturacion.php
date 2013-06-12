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
    private $cod_usuario;
    private $num_habitacion;    
    
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
        if (array_key_exists('cod_usuario', $props)) {
            $user->setCod_usuario($props['cod_usuario']);
        }
        if (array_key_exists('num_habitacion', $props)) {
            $user->setNum_habitacion($props['num_habitacion']);
        }
       
       
    }

      private function getParametros(Facturacion $facturacion) {
        $parametros = array(
            ':numero_checkout' => $facturacion->getNumero_checkout(),
            ':codigo_cliente' => $facturacion->getCodigo_cliente(),
            ':numero_servicio' => $facturacion->getNumero_servicio(),
            ':facturacion_total' => $facturacion->getFacturacion_total(),
             ':cod_usuario' => $facturacion->getCod_usuario(),
             ':num_habitacion' => $facturacion->getNum_habitacion(),
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
    
     protected function consultar($sql = null, $param = null) {
        if ($sql == null)
            $sql = $this->sql;
        $this->sentencia = $this->db->prepare($sql);
        if ($param != null)
            $this->sentencia->execute($param);
        $this->sentencia->execute();
        $resultado = $this->sentencia->fetchAll();
        return $resultado;
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
     public function leerFacturacion2($numero_checkout) {
        $sql = "SELECT F.numero_checkout,F.codigo_cliente,F.numero_servicio,F.facturacion_total,R.num_reserva,R.num_habitacion,R.dias_reserva,R.fecha_inicio,R.fecha_reserva,R.total_pagar,R.fecha_salida,H.num_habitacion,H.tipo,h.precio  FROM facturacion F,reservas R,habitacion H WHERE F.numero_checkout='$numero_checkout' AND R.cod_usuario=F.codigo_cliente AND num.habitacion = R.num_habitacion";
        
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
