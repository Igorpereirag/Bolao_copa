<?php
    session_start();
    include_once('scripts/config.php');
   
    $user = $_SESSION['email'];
    
    if($user == ""){
        Echo "<script>alert('voce não pode acessar essa pagina sem fazer o login!')
        window.location.href='login.php'</script>";
    }
    
?>



<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bolão do Pombo - Meus Palpites</title>
</head>
<section id='navbar'>
    <nav class='navbar navbar-expand-lg justify-content-end' id='nav'>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id='menu-icon'
            alt="toggle-button">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class='nav-item'>
                    <a class="nav-link active" aria-current="page" href="meuspalpites.php">PALPITES</a>
                </li>
                <li class='nav-item'>
                    <a class="nav-link" href="ranking.php">MEUS RESULTADOS</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href="resultados.php">RESULTADOS DOS JOGOS</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href="regulamento.php">REGULAMENTO</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href="login.php" id="logoutBtn">SAIR</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<body>
    <section class="imgBGLogin">
        <div>
            <img src="assets/bg.png" id="imgBGLogin">
        </div>
    </section>

  <section class="idForm">
        <form class="palpites" method="Post" action="scripts/palpite.php">
            <h1>Faça seus palpites: <?php
   echo $user;
?>    </h1>
            <div class="containerPalpites">
            <div class="container">
      <table class="table">
        <thead>
            <tr>
                <th  style="text-align:center;vertical-align:middle">Time A</th>
                <th style="text-align:center;vertical-align:middle">Resultado</th>
                <th style="text-align:center;vertical-align:middle">x</th>
                <th style="text-align:center;vertical-align:middle">Time B</th>
                <th style="text-align:center;vertical-align:middle">Resultado</th>
            </tr>
        </thead>
        
            <tbody>
                <?php
                include "scripts/config.php";
                $sql = "SELECT * FROM dados_jogos WHERE rodada = '1 RODADA' AND status_jogo = 'ABERTO'";
                $query = $banco->query($sql);
                $a = 1;
                while ($dados = $query->fetch_array()){
                ?>
                <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['id']; ?>">
                <tr>
                    <td style="text-align:center;vertical-align:middle">
                        <?php echo $dados['timea']; ?>
                        <img src="_images/<?php echo $dados['timea']; ?>.png">
                    </td>
                    <td style="text-align:center;vertical-align:middle">
                        <input type="text" id="campopalpite" name="timea<?php echo $a; ?>" maxlength="2" required>
                    </td>
                    <td style="text-align:center;vertical-align:middle"> x </td>
                    <td style="text-align:center;vertical-align:middle">
                        <?php echo $dados['timeb']; ?>
                        <img src="_images/<?php echo $dados['timeb']; ?>.png">
                    </td>
                    <td style="text-align:center;vertical-align:middle">
                        <input type="text" id="campopalpite"  name="timeb<?php echo $a; ?>" maxlength="2" required>
                    </td>
                </tr>
                <tr  style="text-align:center;vertical-align:middle">
                    <td colspan="5">
                        <?php echo $dados['data']; ?><br>
                        <?php echo $dados['local']. ' '; ?>
                        <?php echo $dados['horario']. ' '; ?>
                        <?php echo $dados['tipo']. ' '; ?>
                    </td>
                </tr>
                <?php $a++;} ?>
                
            </tbody>
            <tr>
                <td>
                <button id="submitBtn" type="submit">SUBMETER PALPITES</button>
                    
            </tr>
            
        </form>                    
      </table>  
      
      
    </div>
 </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



   </div>
</body>
<footer>
    <div>Desenvolvido por Igor Pereira, <a href="samara.dev.br">Samara Fadigas</a> e Vitor Tanan</div>
</footer>

</html>