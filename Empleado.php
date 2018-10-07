<?php
/**
 * PROBLEMA 01:
 * Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
 * Definir un método inicializarlo para que lleguen como dato el nombre y sueldo.
 * Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos).
 */
class Empleado{
    //Propiedades de la Clase Empleado
    public $nombre;
    public $sueldo;
    public $condicion;
    //Creando metodos 
    //Asignando Datos del Empleado
    public function setNombre($p_nombre)
    {
        $this->nombre = $p_nombre;
    }
    public function setSueldo($p_sueldo)
    {
        $this->sueldo = $p_sueldo; 
    }
    
    public function impuesto()
    {
        if(($this->sueldo)>=3000){
            $this->condicion = "Paga impuesto";
        }else{
            $this->condicion = "No paga impuesto";
        }
    }
    //Funcion imprimir
    public function imprimir()
    {
        echo "Empleado: " . $this->nombre . "<br>";
        echo "Sueldo :" . $this->sueldo . "<br>";
        echo "Impuesto: " . $this->condicion;
    }
}
