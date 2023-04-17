<?php
    session_start();
    $login=$_SESSION['nome'];
?>
<html>

<head>
    <div class = 'container'>
    <div class="main">
	<link rel="stylesheet" href="stylefinal.css"/>
	
<body>
<h2>
    <?php echo "<p>Bem-vindo $login, desfrute agora dos nossos serviços.</p>";?>
</h2>
<a href="index.php">Sair</a>
</body>
</div>
</html>