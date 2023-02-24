<?php
require_once('../../db/connect.php');


if(isset($_POST['buttonc'])){
    $Nome = mysqli_real_escape_string($con,$_POST["nome"]);
    $Email = mysqli_real_escape_string($con,$_POST["email"]);
    $Senha = mysqli_real_escape_string($con,$_POST["senha"]);
    $Confirmarsenha = mysqli_real_escape_string($con,$_POST["confirmarsenha"]);


    if (empty($Nome) or empty($Email) or empty($Senha) or empty($Confirmarsenha)){

        echo '<script>alert("Por favor, preencha todos os campos")</script>';
        
    }else{
        if ($Senha != $Confirmarsenha){
            echo '<script>alert("Por favor, confira se suas senhas conferem")</script>';
        }else{

             $sql="insert into users (nome,email,senha) values ('$Nome', '$Email','$Senha')";
             $result = mysqli_query($con,$sql);

             echo '<script>alert("TA TRANKS, ta salvo")</script>';
             
        }
    }
}



?>