<?php
/**
 * Creamos la clase factura
 * Constantes IMPUESTO
 * Atributos Importe Base, fecha, impuestos, Importe bruto, estado (pagada o pendiente)
 * Métodos: imprime
 */
class Factura{
    //Atributos
    public $cliente;
    public $producto;
    public $precio_unitario;
    public $cantidad;
   
    const IVA=0.18;
    public $importe_base;
    public $fecha;
    public $impuesto;
    public $importe_bruto;
    public $estado;

//Funciones
public function DatosProducto($p_cliente,$p_producto)
{
  $this->cliente = $p_cliente;
   $this->producto = $p_producto;
   setlocale(LC_ALL,"es_ES.UTF-8");  //Para que soporte el formato de fecha en español
   date_default_timezone_set ('America/Lima'); //Definir la zona horaria en Lima
   $this->fecha = strftime("%A, %d de %B de %Y %H:%M");  //Formato de fecha
}
public function __construct($p_precio,$p_cantidad)
{
  $this->precio_unitario=$p_precio;
  $this->cantidad = $p_cantidad;
  $this->importe_base = ($this->cantidad)  * ($this->precio_unitario);
  $this->impuesto = (self::IVA) * ($this->importe_base);
  $this->importe_bruto = ($this->importe_base) + ($this->impuesto);
}

function Imprimiendo_Factura()
{
//this para hacer referencia a la misma clase
print("<h3>Impresion de una Factura</h3>");
echo "Fecha :" . $this->fecha;
print("<br>");
echo "Cliente :" . $this->cliente;
print("<br>");
echo "Producto : " . $this->producto;
print("<br>");
echo "Precio Unitario: " . $this->precio_unitario;
print("<br>");
echo" Cantidad de productos: " . $this->cantidad;
print("<br>");
echo "Importe Base : " . $this->importe_base;
print("<br>");
echo "Impuesto : " . $this->impuesto;
print("<br>");
echo "Importe Bruto :" . $this->importe_bruto;
print("<br>");
}
}
?>