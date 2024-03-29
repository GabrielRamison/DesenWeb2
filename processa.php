<?php
    echo ("Esse é o arquivo processa.php<br>");

    $nome= $_GET["nome"];
    $nascimento= $_GET["nasc"];
    $email =$_GET["email"];
    $telefone= $_GET["tel"];
    $sexo= $_GET["sexo"];
    $escola= $_GET["escola"];
    $senha = $_GET["senha"];
    $senha2 = $_GET["senha2"];
    $erros = [];

    
    if(empty($nome)){
        $erros[] =  "Preencha o campo nome!";
    }

    if(empty($nascimento)){
        $erros[] =  "Preencha o campo nascimento!";
    }

    if(empty($email)){
        $erros[] =  "Preencha o campo email!";
    }

    if(empty($telefone)){
        $erros[] =  "Preencha o campo telefone!";
    }

    if(empty($sexo)){
        $erros[] =  "Preencha o campo sexo!";
    }

    if(empty($escola)){
        $erros[] =  "Preencha o campo escola!";
    }

    if(empty($senha)){
        $erros[] =  "Preencha o campo senha!";
    }else{
        if($senha != $senha2){
            $erros[] = "Verifique se as senhas digitadas são iguais";
        }
    }

    if (count($erros) > 0){
       echo ("Houve um erro: verifique as mensagens abaixo");
        foreach($erros as $erro){
            echo("$erro <br>");
            }
     }else{
        // se caiu no else, tudo validou
        echo("Dados recebidos na página:<br>");
        echo("Nome: $nome <br>");
        echo("Nascimento: $nascimento <br>");
        echo("Email: $email <br>");
        echo("Telefone: $telefone <br>");
        echo("Sexo: $sexo <br>");
        echo("Escola: $escola <br>");
        echo("Senha: $senha <br>");
    }
    




   