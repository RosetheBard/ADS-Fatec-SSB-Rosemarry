<?php

define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rsemarry");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);


if (isset($_COOKIE['logado'])){
    session_start();
}
?>