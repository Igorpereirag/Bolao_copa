<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'jogo';

$banco = new mysqli($servidor,$usuario,$senha,$banco);

if($banco->connect_errno){
echo " erro";

}

?>