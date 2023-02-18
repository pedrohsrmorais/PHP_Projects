<?php
require_once('connect.php');

session_start();

if(isset($_POST['buttonl'])){
    $Email = mysqli_real_escape_string($con,$_POST["email"]);
    $Senha = mysqli_real_escape_string($con,$_POST["senha"]);

    $sql= "SELECT * FROM users WHERE email = '$Email' AND senha = '$Senha'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($row['email']) and isset($row['senha'])){
        echo 'usuario e senha encontrados';
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['senha'] = $row['senha'];
        header("Location: home.php");

    }else{
        echo 'usuario e senha NÃO encontrados';
    }

}



?>