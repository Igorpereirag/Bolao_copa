<?php
include "config.php";
session_start();
     
$user = $_SESSION['email'];

if(isset($_POST['submit'])){

//echo json_encode($_POST);
date_default_timezone_set('America/Sao_Paulo');
$login = $user;
$data = date("Y-m-d H:i:s");
$rodada = $_POST['rodada'];

if(!empty($_POST['jogo1']) && !empty($_POST['timea1'] && !empty($_POST['timeb1'] ) )) { 
$jogo1 = $_POST['jogo1'];
$timea1 = $_POST['timea1'];
$timeb1 = $_POST['timeb1'];
}else{
    echo "deu merda";
}
//Dados do Primeiro Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo1','$timea1','$timeb1','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo2']) && !empty($_POST['timea2'] && !empty($_POST['timeb2'] ) )) { 
    $jogo2 = $_POST['jogo2'];
    $timea2 = $_POST['timea2'];
    $timeb2 = $_POST['timeb2']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo2','$timea2','$timeb2','$login','$data')";
$query=$banco->query($sql);
    

if(!empty($_POST['jogo3']) && !empty($_POST['timea3'] && !empty($_POST['timeb3'] ) )) { 
    $jogo2 = $_POST['jogo3'];
    $timea2 = $_POST['timea3'];
    $timeb2 = $_POST['timeb3']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo3','$timea3','$timeb3','$login','$data')";
$query=$banco->query($sql);
    
if(!empty($_POST['jogo4']) && !empty($_POST['timea4'] && !empty($_POST['timeb4'] ) )) { 
    $jogo2 = $_POST['jogo4'];
    $timea2 = $_POST['timea4'];
    $timeb2 = $_POST['timeb4']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo4','$timea4','$timeb4','$login','$data')";
$query=$banco->query($sql);
    
if(!empty($_POST['jogo5']) && !empty($_POST['timea5'] && !empty($_POST['timeb5'] ) )) { 
    $jogo2 = $_POST['jogo5'];
    $timea2 = $_POST['timea5'];
    $timeb2 = $_POST['timeb5']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo5','$timea5','$timeb5','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo6']) && !empty($_POST['timea6'] && !empty($_POST['timeb6'] ) )) { 
    $jogo2 = $_POST['jogo6'];
    $timea2 = $_POST['timea6'];
    $timeb2 = $_POST['timeb6']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo6','$timea6','$timeb6','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo7']) && !empty($_POST['timea7'] && !empty($_POST['timeb7'] ) )) { 
    $jogo2 = $_POST['jogo7'];
    $timea2 = $_POST['timea7'];
    $timeb2 = $_POST['timeb7']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo7','$timea7','$timeb7','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo8']) && !empty($_POST['timea8'] && !empty($_POST['timeb8'] ) )) { 
    $jogo2 = $_POST['jogo8'];
    $timea2 = $_POST['timea8'];
    $timeb2 = $_POST['timeb8']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo8','$timea8','$timeb8','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo9']) && !empty($_POST['timea9'] && !empty($_POST['timeb9'] ) )) { 
    $jogo2 = $_POST['jogo9'];
    $timea2 = $_POST['timea9'];
    $timeb2 = $_POST['timeb9']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo9','$timea9','$timeb9','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo10']) && !empty($_POST['timea10'] && !empty($_POST['timeb10'] ) )) { 
    $jogo2 = $_POST['jogo10'];
    $timea2 = $_POST['timea10'];
    $timeb2 = $_POST['timeb10']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo10','$timea10','$timeb10','$login','$data')";
$query=$banco->query($sql);
if(!empty($_POST['jogo11']) && !empty($_POST['timea11'] && !empty($_POST['timeb11'] ) )) { 
    $jogo2 = $_POST['jogo11'];
    $timea2 = $_POST['timea11'];
    $timeb2 = $_POST['timeb11']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo11','$timea11','$timeb11','$login','$data')";
$query=$banco->query($sql);
if(!empty($_POST['jogo12']) && !empty($_POST['timea12'] && !empty($_POST['timeb12'] ) )) { 
    $jogo2 = $_POST['jogo12'];
    $timea2 = $_POST['timea12'];
    $timeb2 = $_POST['timeb12']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo12','$timea12','$timeb12','$login','$data')";
$query=$banco->query($sql);
if(!empty($_POST['jogo13']) && !empty($_POST['timea13'] && !empty($_POST['timeb13'] ) )) { 
    $jogo2 = $_POST['jogo13'];
    $timea2 = $_POST['timea13'];
    $timeb2 = $_POST['timeb13']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo13','$timea13','$timeb13','$login','$data')";
$query=$banco->query($sql);
if(!empty($_POST['jogo14']) && !empty($_POST['timea14'] && !empty($_POST['timeb14'] ) )) { 
    $jogo2 = $_POST['jogo14'];
    $timea2 = $_POST['timea14'];
    $timeb2 = $_POST['timeb14']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo14','$timea14','$timeb14','$login','$data')";
$query=$banco->query($sql);
if(!empty($_POST['jogo15']) && !empty($_POST['timea15'] && !empty($_POST['timeb15'] ) )) { 
    $jogo2 = $_POST['jogo15'];
    $timea2 = $_POST['timea15'];
    $timeb2 = $_POST['timeb15']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo15','$timea15','$timeb15','$login','$data')";
$query=$banco->query($sql);

if(!empty($_POST['jogo16']) && !empty($_POST['timea16'] && !empty($_POST['timeb16'] ) )) { 
    $jogo2 = $_POST['jogo16'];
    $timea2 = $_POST['timea16'];
    $timeb2 = $_POST['timeb16']; 
    }
//Dados do Segundo Jogo
$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2, login,data) VALUES ('$jogo16','$timea16','$timeb16','$login','$data')";
$query=$banco->query($sql);
    
    
}else{
    Echo "<script>alert('palpites feitos com sucesso!')
        window.location.href='../home.php'</script>";
}
    

    
    
    

?>

