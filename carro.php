<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;

//metodos
function __construct($marca, $modelo, $ano){
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
}
function set_marca($marca){
    $this->marca = $marca;
}
function set_modelo($modelo){
    $this->modelo = $modelo;
}
function set_ano($ano){
    $this->ano = $ano;
}
function get_marca(){
    return $this->marca;
}
function get_modelo(){
    return $this->modelo;
}    
function get_ano(){
    return $this->ano;
}    
}
$carro = new Carro("Hyndai", "hb20", "2015");
echo "</br>".$carro->get_marca();
echo "</br>". $carro->get_modelo();
echo "</br>".$carro->get_ano();


?>