<?php

class Cliente{
    public $Id;
    public $NombreApellido;
    public $NumeroDocumento;
    

    public function MostrarDatos(){

        echo 'Nombre y Apellido: ' . $this->NombreApellido . '<br>'; 
        echo 'Numero de documento: '.$this->NumeroDocumento. '<br>';

    }




}
