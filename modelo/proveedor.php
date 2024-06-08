<?php

class Proveedor{

    public $Id;
    public $NombreApellido;
    public $NumeroDocumento;
    public $producto;

    public function MostrarDatos(){

        echo 'Id del proveedor: '.$this->Id . '<br>';
        echo 'Nombre y apellido del proveedor: '. $this->NombreApellido . '<br>';
        echo 'Numero documento del proveedor: '.$this->NumeroDocumento . '<br>';

        echo '<br>';

        echo 'Id producto: '.$this->Producto->Id . '<br>';
        echo 'Codigo producto: '.$this->Producto->Codigo . '<br>';
        echo 'Descripcion producto: '.$this->Producto->Descripcion . '<br>';
        

        echo '<br>';

        echo 'Id marca: '.$this->Producto->Marca->Id . '<br>';
        echo 'Descripcion marca: '.$this->Producto->Marca->Descripcion . '<br>';
        echo 'Codigo de marca: '.$this->Producto->Marca->Codigo . '<br>';










        
    
    }
}