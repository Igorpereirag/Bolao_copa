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
    <title>Bolão do Pombo</title>
</head>

<body>
    <section class="imgBGLogin">
        <div>
            <img src="assets/bg.png" id="imgBGLogin">
        </div>
    </section>
    <section class="idForm">
        <form method="POST" action="scripts/autenticar.php" >
            <h1>BOLÃO DO POMBO</h1>
            <div class="container">
                <label for="emailInput"><b>USUÁRIO</b></label>
                <input type="email" placeholder="Digite seu email" id="emailInput" name="email">

                <label for="passwordInput"><b>SENHA</b></label>
                <input type="password" placeholder="Digite sua senha" id="passwordInput" name="senha">

                <button id="loginBtn" type="submit">ENTRAR</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Lembrar-me
                    <span class="psw"><a href="#">Esqueceu a senha?</a></span>
                </label>
                <div class="row">
                   
                        <button class="socialBnt"><a href="cadastro.php" class="cadastro">Criar nova conta </a></button>
                    
                    
                       
                   
                </div>
            </div>
           
        </form>

    </section>
   

</body>
<footer>
    <div>Desenvolvido por Igor Pereira, <a href="samara.dev.br">Samara Fadigas</a> e Vitor Tanan</div>
</footer>

</html>