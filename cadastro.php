<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./styles/cadastro.css">
    <link rel="stylesheet" href="./styles/main.css">

</head>

<body>
    <header>
        <div class="top">

            <a href="./index.php">Login</a>
            <a href="./cadastro.html">Cadastro</a>
        </div>


    </header>
    <main>

        <section class="cadastro">
            <h2>Cadastro</h2>

            <form action="cadastro_db.php" method="POST">
                <div class="info">
                    <div class="info1">
                        <input type="text" placeholder="Nome*" name="nome">
                        <input type="text" placeholder="Apelido" name="apelido">
                        <input type="text" placeholder="Email*" name="email">
                    </div>
                    <div class="info2">
                        <input type="text" placeholder="Sobrenome*" name="sobrenome">
                        <input type="text" placeholder="Idade" name="idade">
                    </div>

                    <div class="info3">
                        <input type="text" placeholder="Endereco" name="endereco">
                        <input type="text" placeholder="Cidade" name="cidade">

                    </div>
                    <div class="info4">
                        <input type="text" placeholder="Bairro" name="bairro">
                        <input type="text" placeholder="Estado" name="estado">
                    </div>
                </div>
                <hr>
                <div class="pass">
                    <input type="password" placeholder="Senha*" name="senha">
                    <input type="password" placeholder="Confirmar senha*" name="confirmacao_senha">
                </div>

                <button type="submit">Enviar</button>
                <span>*Campo obrigatório</span>
            </form>




        </section>
    </main>

    <?php

    //Verificação de erros
    //Erro 3, Campo obrigatório não preenchido
    //Erro 4, Senhas não batem

    if ((isset($_GET["erro"])) && $_GET["erro"] == 3) {
    ?>
        <script>
            alert("Ops! Você não preencheu um campo obrigatório!");
        </script>
    <?php
    }

    if ((isset($_GET["erro"])) && $_GET["erro"] == 4) {
    ?>
        <script>
            alert("Ops! As senha não são iguais!");
        </script>
    <?php
    }
    ?>
</body>

</html>