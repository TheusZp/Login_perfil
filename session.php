<?php
    //chama o arquivo que conecta o sql
    include './db/conexaosql.php'; 

    // session_start inicia a sessão
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    

    
    $tabela = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='".$_POST["login"]."' and SENHA='".$_POST["senha"]."'");
    

    $qtde_linhas = mysqli_num_rows($tabela);
    mysqli_free_result($tabela);
    mysqli_close($conexao);

    
    if ($qtde_linhas>0){
        //Armazena duas informações no sessão do usuário: slogin e senha
        $_SESSION['user'] = $login;
        $_SESSION['senha'] = $senha;
        
        //Usa a função header() para fazer o redirecionamento para a página principal do site.
        header("Location: profile.php");
    }
    else {
        unset ($_SESSION['user']);
        unset ($_SESSION['senha']);
        //Caso login dê errado, devolve o usuário para a página de login
        header("Location: index.php?erro=1");
    }
       


?>