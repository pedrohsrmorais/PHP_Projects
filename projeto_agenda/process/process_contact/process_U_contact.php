<?php
require_once('../../db/connect.php');
session_start();
$User = $_SESSION['email'];
$id = $_GET['id'];


if(isset($_POST['buttonc'])){
    $Nome = mysqli_real_escape_string($con,$_POST["nome"]);
    $Telefone = mysqli_real_escape_string($con,$_POST["telefone"]);
    $Email = mysqli_real_escape_string($con,$_POST["email"]);


    $sql="UPDATE contatos SET 
    nome = '$Nome',
    email = '$Email',
    contato = '$Telefone' 
    WHERE id = '$id' ";


    $result = mysqli_query($con,$sql);

    header("Location: ../../pages/pages_user/page_home.php");

}

?>