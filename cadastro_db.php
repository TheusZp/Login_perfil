<?php

    include './db/conexaosql.php'; 
    //dados do formulario
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $confirmacao_senha=$_POST['confirmacao_senha'];
    $apelido=$_POST['apelido'];      
    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $idade=$_POST['idade'];

    //Verificação se os campos obrigatórios não estão vazios
    if($nome == null || $sobrenome == null || $email == null || $senha == null ||$confirmacao_senha == null){
        header("Location: cadastro.php?erro=3");
    } else if($senha !=  $confirmacao_senha){
        //Verifica se as duas senha batem
        header("Location: cadastro.php?erro=4");
    }else{

        $sql = "INSERT INTO usuario
        (nome, sobrenome, senha, email, endereco, bairro, cidade, estado, idade, apelido) 
        VALUES 
        ('$nome', '$sobrenome', '$senha', '$email', '$endereco', '$bairro', '$cidade', '$estado', '$idade', '$apelido')";
        $tabela = mysqli_query($conexao,$sql) or die ("Erro de conexão com localhost");
    
        mysqli_close($conexao);
        
        header ("Location: index.php?sucesso=1");
    }


?>