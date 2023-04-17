<?php
    session_start();
    require_once("conexao.php");
    if(!empty($_SESSION['mensagem'])){
        echo $_SESSION['mensagem'];
        unset ($_SESSION['mensagem']);
    }
    if(!empty($_SESSION['login']) and !empty($_SESSION['id'])){
        $login=$_SESSION['login'];
        $id=$_SESSION['id'];
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Casa.me</title>
<link rel="stylesheet" href="stylelogin.css"/>
</head>
<body>
<div class="container">
<div class="main">
<form class="form" method="POST" action="processalogin.php">
<h2>Logue-se</h2>
<label>Login :</label>
<input type="text" name="login" placeholder="Digite o seu usuário"><br><br>
<label>Senha :</label>
<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
<input type="submit" value="enviar" id="enviar" name="enviar"><br>
<button><a href="cadastro.php">Cadastre-se</a></button>
<button><a href="esquecisenha.php">Esqueceu sua Senha?</a></button></div>
</form>
</div>
</body>
</html>