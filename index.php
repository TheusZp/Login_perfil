

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="./styles/cadastro.css">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="./styles/main.css">

    <script type="text/javascript" src="./scripts/buttons.js"></script>
    <script type="text/javascript" src="./scripts/validarCadastro.js"></script>

    
</head>
<body>
    <header>
        <div class="top">
            
            <a href="./index.php">Login</a>
            <a href="./cadastro.php">Cadastro</a>
           
            
            
        </div>
        
        
    </header>
    <main>
        <section class="login active" id="login" >
            <h2>Fazer login</h2>
            
            <form action="session.php" method="POST">
                <label for="login" class="sr-only">Usuário</label>
                <input type="text" id="login" name="login" placeholder="Usuário">
              
                <label for="password" class="sr-only">Senha</label>
                <input type="password" id="password" name="senha" placeholder="Senha" >
               
                <a href="#">Esqueci minha senha</a>
                <button type="submit">Login</button>
                
            </form>

        </section>


        
    </main>
    <?php

    //Verificação de erros
    //Erro 1, login ou senha errada
    //Erro 2, Pagina necessita do login para ser acessada

    if ((isset($_GET["erro"]))&&$_GET["erro"]==1){
        ?>
        <script>
        alert("Usuário e (ou) senha incorretos");
        </script>
        <?php
    }

    if ((isset($_GET["erro"]))&&$_GET["erro"]==2){
        ?>
        <script>
        alert("Você precisa fazer login para acessar esta pagina!");
        </script>
        <?php
    }

    //Alerta caso o cadastro tenha sido realizado
    if ((isset($_GET["sucesso"]))&&$_GET["sucesso"]==1){
        ?>
        <script>
        alert("Cadastro realizado com secesso!");
        </script>
        <?php
    }
    ?>
</body>
</html>