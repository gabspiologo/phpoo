<?php
class Fruta {
    //nome dos atributos 
    public $nome;
    public $cor;

//metodos

/*this = este/atrbui;
new = cria obj;
-> = acessa um metodo;
function= criar metodo.*/

function __construct($nome, $cor)
{
    $this->nome = $nome;
    $this->cor = $cor;
}
function set_name($nome){
    $this->nome = $nome;
}
function set_cor($cor){
    $this->cor = $cor;
}
function get_name(){
    return $this->nome;
}
function get_cor(){
    return $this->cor;
}
}

//A palavra new cria um obj do tipo Fruta
$uva = new Fruta("uva_ifsp", "verde");
//atribuindo um nome para o meu obj atraves do metodo set_name
//$uva-> set_name("uva_ifsp");
echo $uva->nome;
echo "</br>".$uva->get_name();
//$uva->set_cor("verde");
echo "</br>".$uva ->cor;

?>