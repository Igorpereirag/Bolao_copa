<?php

session_start();
     
$user = $_SESSION['email'];
include "config.php";
//echo json_encode($_POST);
date_default_timezone_set('America/Sao_Paulo');
$login = $user;
$data = date("Y-m-d H:i:s");
$rodada = $_POST['rodada'];
include "config.php";
Echo $user;
Echo $rodada;


if(!empty($_POST['jogo1']) && !empty($_POST['timea1'] && !empty($_POST['timeb1'] ) )) { 
$jogo1 = $_POST['jogo1'];
$timea1 = $_POST['timea1'];
$timeb1 = $_POST['timeb1'];
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo1','$timea1','$timeb1','$login','$data')";
$query=$banco->query($sql);


}
//Dados do Primeiro Jogo





if(!empty($_POST['jogo2']) && !empty($_POST['timea2'] && !empty($_POST['timeb2'] ) )) { 
    $jogo2 = $_POST['jogo2'];
    $timea2 = $_POST['timea2'];
    $timeb2 = $_POST['timeb2'];
    
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo2','$timea2','$timeb2','$login','$data')";
$query=$banco->query($sql);
    }
//Dados do Segundo Jogo



?>

