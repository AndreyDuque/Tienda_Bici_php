<?php

//Atributos de la clase Bicicleta
class Bicileta {
    public $marca;
    public $tipoBici;
    public $modelo;
    public $color;
    public $tallaMarco;
    public $numRin;
    public $frenos;
    public $suspencion;
    public $cambios;
    private $serieMarco;
    private $propetario;

    //Evento constructor
    public function __construct($mc, $tiB, $md, $cl, $tl, $numR, $fr, $sp, $cb, $srM)   
    {
        $this->marca = $mc;
        $this->tipoBici = $tiB;
        $this->modelo = $md;
        $this->color = $cl;
        $this->tallaMarco = $tl;
        $this->numRin = $numR;
        $this->frenos = $fr;
        $this->suspencion = $sp;
        $this->cambios = $cb;
        $this->serieMarco = $srM;
        
    }

    //Metodo que permite modificar el nombre del propetario de la bici
        public function setPropietario($p){
            $this->propetario = $p;
    } 

    //Evento que permite visualizar el nombre del propietario de la bici
        public function getpropetario(){
            return $this->propetario;
    }

    //Evento que permite visualizar el numero de serie de la bici    
    public function getserimarco(){
        return $this->serieMarco;
    }    

    // Método que permite determinar el precio de venta del vehículo
		public function precioVenta($precio,$porcentaje){
			$ganancia = $precio*$porcentaje/100;
			$venta = $precio + $ganancia;

			return $venta;
		}
    
    //Evento click    
        public function click(){
            if(isset($_POST["btnCalcular"])):
            endif;    
        }

    
}

?>
