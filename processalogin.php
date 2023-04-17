<?php 
session_start();
include_once("conexao.php"); 

if(isset($_POST['enviar'])){
    if(!empty($_POST['login']) || !empty($_POST['senha'])){
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        $comando = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
        $enviar = mysqli_query($conn, $comando);
        $resultado = mysqli_fetch_assoc($enviar);
        if ($resultado){
            $_SESSION['login']=$resultado['login'];
            $_SESSION['nome']=$resultado['nome'];
            header("location:final.php");
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Login ou senha inválidos.');window.location.href='index.php';</script>";
            exit;
        }
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Preencha todos os campos');window.location.href='index.php';</script>";
        } 
    }else{
        header("location:index.php");

    }
?>