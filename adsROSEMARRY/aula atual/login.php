<?php

require_once("banco.php");

if(isset($_POST['enviar'])){
   $nome = $_POST['nome'];
   $senha = base64_encode(trim($_POST['senha']));

   $query = "SELECT * FROM usuarios WHERE NOME = '$nome' AND SENHA = '$senha'"; 
   $puxa = $mysqli->query($query);

   if($puxa->num_rows == 1){

        setcookie("Logado","Sim",time() + 120);
        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header("location:end.php");
   }else{
    echo "dados errados";
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Login de Usuario</title>
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