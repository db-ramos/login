<?php
    session_start(); // inicia a sessão
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    require "conexao.php";
    $sql = "SELECT login FROM autenticacao 
            WHERE login='$login' and senha='$senha'";
    $resultado = $mysqli->query($sql) or die("Erro na consulta:".$sql);
    
    if($resultado->num_rows == 1){
        $_SESSION['logado']=true; // cria a permissão de acesso
        header("Location: inicio.php");
    }else{
        header("Location: login.php?erro=1");    
    }
?>