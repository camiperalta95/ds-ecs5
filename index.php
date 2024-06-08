<?php

require_once 'modelo/cliente.php';
require_once 'modelo/marca.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$c= New Cliente();
$c-> Id= '2';
$c-> NombreApellido= 'Sofia Lopez';
$c-> NumeroDocumento= '416462132';


$m= New Marca();
$m-> Id= '3';
$m-> Descripcion= 'nacional';
$m-> Codigo= '216';


$p= new Producto ();
$p->Id=125;
$p->Codigo=5555;
$p->Descripcion='gaseosas';
$p->Marca=$m;


$pro= New Proveedor();
$pro-> Id= '4';
$pro-> NombreApellido= 'pepsi';
$pro-> NumeroDocumento= '4169466';
$pro-> Producto=$p;

$c-> MostrarDatos();
$pro-> MostrarDatos();












