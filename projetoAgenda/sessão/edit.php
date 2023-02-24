<?php
session_start();
require_once('../db/connect.php');
$id = $_GET['id'];
$nome = $_GET['nome'];
$ctt = $_GET['contato'];
$email = $_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo02.css">
    <title>Cadastro</title>
</head>
<body>
<div class="login-box">
<form action="process_edit.php?id=<?php echo $id ?>" method="post">
    <h1>Cadastro</h1>
        <h2>
        
            <div class="user-box">
            <input type="text" name="nome" value="<?php echo $nome ?>">
            <label> Nome </label>

            <br>
            
            <div class="user-box">
            <input type="text" name="telefone" value="<?php echo $ctt ?>">
            <label> Telefone </label>

            <br>

            <div class="user-box">
            <input type="text" name="email" value="<?php echo $email ?>">
            <label> Email </label>
            
            
        

        

        
        <input type="submit" class="submit" name="buttonc">
        </h2>
        <br>
        <a href="../sessão/home.php">Cancelar</a>
</div>
</form>
        
</body>
</html>