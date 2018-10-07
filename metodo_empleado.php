<?php
require_once 'Empleado.php';
$empleado1 = new Empleado;
$empleado1->setNombre('Angelica');
$empleado1->setSueldo(1000);
$empleado1->impuesto();
$empleado1->imprimir();
