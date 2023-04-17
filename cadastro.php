<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>

	<link rel="stylesheet" href="stylecad.css"/>
	<title>Cadastrar Usuário</title>
	</head>
	<body>

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>


<div class="container">
<div class="main">
	<form class ="form" method="POST" action="processa.php"  onsubmit="return valida(); return false;">
	 <h2>Cadastre-se</h2>   
	 <label>Nome:</label>
	    <input type="text" name="nome" placeHolder="Digite seu nome"><br><br>
		<label>Login: </label>
		<input type="text" name="login" pattern="[a-zA-Z0-9]+" placeholder="Digite o seu usuário"><br><br>
			
		<label>E-mail: </label>
		<input type="email" name="email"  placeholder="Digite o seu e-mail"><br><br>
			
		<label>Senha: </label>
		<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
		<label>Confirme sua senha:</label>
		<input type="password" name="csenha" placeHolder="Confirme a sua senha"><br><br>
		<input type="submit" value="Cadastrar">
		<a href="index.php">Faça Login</a>

		</form>
		</div>
	</body>
</html>

