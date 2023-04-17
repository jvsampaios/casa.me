<?php
session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$csenha = filter_input(INPUT_POST, 'csenha', FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
$query_select = "SELECT login FROM usuarios";
$select = mysqli_query($conn,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login']; 
    
  if($login == "" || $login == null || $nome == "" || $nome == null || $email == "" || $email == null || $senha == "" || $senha == null || $csenha == "" || $csenha == null){
    echo"<script language='javascript' type='text/javascript'>alert('TODOS os campos devem ser preenchidos');window.location.href='cadastro.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
        die();
 
      }else{
$result_usuario = "INSERT INTO usuarios (nome, login, email, senha, csenha, created) VALUES ('$nome', '$login', '$email', '$senha', '$csenha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}
}
}
