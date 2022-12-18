<?php

include "config.php";



if(!empty($_POST['email']) && !empty($_POST['senha'] ) ) { 
$email = $_POST['email'];
$senha = $_POST['senha'];
}else{
    echo "DEU MERDA";
    
    
}


echo "$email";



$sql = "SELECT id FROM usuarios WHERE login = '$email'";
$query = $banco->query($sql);
$total = $query->num_rows;



if($total>=1){
    echo "Usuário já cadastrado";
}else{
    $sql = "INSERT INTO usuarios values (NULL,'$email','$senha')";
    $query = $banco->query($sql);
    
    if($query){
        echo "Cadastro realizado com sucesso!";
    }else{
        echo "Problema na query!";
    }
}


?>