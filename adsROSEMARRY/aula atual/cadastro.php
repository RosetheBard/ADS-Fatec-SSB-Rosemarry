<?php

require_once("banco.php");

if(isset($_POST['enviar'])){
    if(
        !empty($_POST['nome']) &&
        !empty($_POST['senha'])
    ){
        $nome = trim($_POST['nome']);
        $senha = base64_encode(trim($_POST['senha']));
        $insere = "INSERT INTO usuarios(NOME,SENHA) VALUES('$nome','$senha')";

        if($mysqli->query($insere)){
            echo "funcionou aeeeeeeeee!!!!!!";
            header('location: login.php');
            exit;
        }else{
            echo "deu certo não pai";
        }
    }else{
        echo "preencha tudo vagabundo!";
    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <header class="cabecalho ">
        <img src="img/lua.png" class="i-sm" alt="logo, em forma de lua na cor preta com brilho" class="i-sm">
        <a href="index.php" class="mn-head">Voltar</a>
    </header>
    <main class="corpo">
        <form action="" method="POST">
            <fieldset>
                <legend>Informações de login</legend>
            Nome: <input required="required" type="text" name="nome" placeholder="Antedeguemon">
            <br>
            Senha: <input required="required" type="password" name="senha" placeholder="Senha123*">
            </fieldset>
            <br>
            <input type="submit" value="cadastrar" name="enviar">
        </form>
    </main>
    <footer class="pe">

    </footer>
</body>

</html>