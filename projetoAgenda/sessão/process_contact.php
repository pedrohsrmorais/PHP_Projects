<?php
require_once('../db/connect.php');
session_start();
$User = $_SESSION['email'];

if(isset($_POST['buttonc'])){
    $Nome = mysqli_real_escape_string($con,$_POST["nome"]);
    $Telefone = mysqli_real_escape_string($con,$_POST["telefone"]);
    $Email = mysqli_real_escape_string($con,$_POST["email"]);


    $sql="insert into contatos (usuario,nome,email,contato) values ('$User','$Nome', '$Email','$Telefone')";
    $result = mysqli_query($con,$sql);

    header("Location: home.php");

}


?>