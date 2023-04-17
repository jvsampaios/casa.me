<?php
//conexão com o banco de dados
include("conexao.php");

//pega a variavel via post
$email=$_POST['email'];
//busca no banco o usuario com o email
$sql=mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
//conta quantos tem
$verifica=mysqli_num_rows($sql);
// caso haja mais de um cadastrado...
if($verifica == 1){
//fazemos um while para coletarmos as outras informações do usuario
//tais como o nome e a senha
while($Row_email = mysqli_fetch_array($sql)){
                $nome = $Row_email['nome'];
                $login = $Row_email['login'];
                $senha = $Row_email['csenha'];
                }

//envia o email para a pessoa juntamente com seu nome e sua senha
$msg="Olá $nome, você solicitou a recuperação de senha para o sistema Casa.Me\n \n";
$msg.="Seu login é: $login . Sua senha é: $senha";

mail($email, "Recuperacao de senha", $msg);

//alerta que o email foi enviado e o redireciona para outra página
echo"<script>alert('Senha enviada por e-mail, verifique sua caixa de mensagens ou sua caixa de spans.'),window.open('index.php','_self')</script>";
}
//caso contrário
else{
//lhe informa que o seu e-mail não está cadastrado no banco de dados
echo"<script>alert('E-mail não cadastrado em nosso sistema, caso não se lembre do email cadastrado, entre em contato conosco.'),window.open('esquecisenha.php','_self')</script>";

}
?>