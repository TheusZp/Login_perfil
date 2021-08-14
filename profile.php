<?php
    include './db/conexaosql.php'; 
    

    session_start();
    //Verificar se existe uma sessão
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){

        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header("Location: index.php?erro=2");
        
    }
    $email = $_SESSION['user'];

    $sql = "SELECT * FROM usuario WHERE email= '".$email."'";
    $tabela = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_array($tabela);

        $nome=$linha['nome'];        
        $sobrenome=$linha['sobrenome'];
        $apelido=$linha['apelido'];        
        $endereco=$linha['endereco'];
        $bairro=$linha['bairro'];
        $cidade=$linha['cidade'];
        $estado=$linha['estado'];
        $idade=$linha['idade'];  
                
               
        mysqli_close($conexao);    
        
        
    
            
            

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">   


    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/profile.css">
</head>
<body>
    <header>
        <div class="top">
            <span>Olá, <?php echo $nome?></span>
            <a href="./finish_session.php">Sair</a>
            
            
        </div>
    </header>

    <main>
        <section>
        
           <h2>Informações</h2>
            <div class="info">
                <div class="info1">
                    <p>Nome: <?php echo $nome ?></p>
                    <p>Apelido: <?php echo $apelido ?></p>
                    <p>Email: <?php echo $email?></p>
                </div>
                <div class="info2">
                    <p>Sobrenome: <?php echo $sobrenome ?></p>
                    <p>Idade: <?php echo $idade ?></p>
                </div>
                <div class="info3">
                    <p>Endereço: <?php echo $endereco?></p>
                    <p>Cidade: <?php echo $cidade?></p>
                    
                </div>
                <div class="info4">
                    <p>Bairro: <?php echo $bairro?></p>
                    <p>Estado: <?php echo $estado?></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>