<?php
class vehiculo {
    public $marca;
    public $tipo;
    public $OnOff="0";
    public $ArrDet="0";
    public $km="0";

    // la funcion es para llamar los atributos y volverlos a llamar en la funcion mostrarInformacion
    public function __construct($marca_, $tipo_,) {
        $this->marca = $marca_;
        $this->tipo = $tipo_;
    }

    public function getmarca(){
        return $this->marca;

    }

    public function setmarca($marca_){
        $this->marca=$marca_;
    }

    public function gettipo(){
        return $this->tipo;
    }

    public function settipo_($tipo_){
        return $this->$tipo_;
    }


    // esta es la funcion "mostrarInformacion" que sirve para mostrar la informacion de los atributos de la clase vehiculo
    public function mostrarInformacion() {
        return "Marca: " . 
        $this->marca . 
        ", Tipo: " . 
        $this->tipo . 
        ", Estado: " . 
        ($this->OnOff == 0 ? "Apagado" : "Encendido");
    }

    // dependiendo de la variable que se encuentre en la variable $OnOff, 
    // se encendera o apagara el vehiculo y mostrara un mensaje de estado
    // pero debe carmbiar el valor de la variable $OnOff para que pueda cambiar el estado del vehiculo
    public function encenderApagar() {
        if ($this->OnOff == 0) {
            $this->OnOff = 1;
            print "El vehiculo esta encendido! \n";
        } else {
            $this->OnOff = 0;
            print "El vehiculo esta apagado \n";
        }
    }
    
    function arranquedelauto() {
        if ($this->OnOff == "0") {
            print "Primero debe encender el auto! \n";
        } else {
            if($this->ArrDet=="0"){
                $this->ArrDet="1";
                print "¡El auto se encuentra en movimiento";
            }else{
                $this->ArrDet="0";
                $this->km="0";
                print "El auto se detuvo! \n";
            }
        }
    }

    function Acelerar (){
        if($this->ArrDet=="1"){
            $this->km++;
            print "¡Ahora vamos a : ".$this->km." km X Hora \n";
        }else{
           print "El auto debe estar en moviento para acelerar \n"; 
        }
    }
    function mostrardatos(){
        print "Datos del auto: \n";
        print "marca: ".$this->marca."\n";
        print "tipo: ".$this->tipo."\n";
    }
}   
