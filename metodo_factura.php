<?php
require_once 'Factura.php';
$factura1= new Factura(0.50,3);
$factura1->DatosProducto('Angelica','Rellenitas');
$factura1->Imprimiendo_Factura();
?>