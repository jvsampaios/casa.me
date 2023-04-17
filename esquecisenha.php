<html>

<title> | Recuperar Senha</title>

<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image: url("http://hdimages.org/wp-content/uploads/2016/11/wedding-images-HD1.jpg");
    }
</style>
<body>
   
<legend align="center">Bem Vindo Usuario</legend>

<h2  align="center">Aqui você pode fazer a recuperação da sua senha</h2>

<p align="center">Antes de tudo pedimos que nos informe sua senha, para que possamos procurar sua senha de acesso em nossa base de dados</p>

<form name="form1" method="post" action="recupera_senha.php">
<font face=Tahoma size=2 color=black><br>
<div align="center"><b></b> 
 <input class=""name="email" type="text1" id="email" placeholder="Lembrar sua senha?" size="40" autofocus required />
<input name="recupera" type="hidden" id="recupera" value="recupera" />
<input type="submit" name="Submit" value="Ir">
<a href="index.php">Voltar</a>
</p>
</form>

<footer>
	<p>Caso você tenha cadastro e o sistema indica que você não tem um email cadastrado</p>
	    <h4>Procure o Desenvolvedor ou o responsável pelo site.</h4>
</footer>

</body>
</html>