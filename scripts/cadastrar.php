<html>
    <body>
        
    

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
    echo "<script>alert('já existe um usuario com este login, tente outro')
            window.location.href='../cadastro.php'</script>";

}else{
    $sql = "INSERT INTO usuarios values (NULL,'$email','$senha')";
    $query = $banco->query($sql);
    
    if($query){
        Echo "<script>alert('Cadastro realizado com sucesso!')
            window.location.href='../login.php'</script>";
       
    }else{
        echo "Problema na query!";
    }
}


?>

<script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
</script>



</html>