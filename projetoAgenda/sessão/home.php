<?php
session_start();
require_once('../db/connect.php');
$Email = $_SESSION['email'];
$sql= "SELECT * FROM contatos WHERE usuario = '$Email' ";
$result = mysqli_query($con,$sql);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="../css/estilo01.css">
</head>
<body>
<header class="head">
       <h1> Agenda </h1>
        <nav class="navbar">
            <a href="#">Criar contato</a>
            <a href="#" rel="import">Excluir contato</a>
            <a href="../htmls/mainpage.html">Sair</a>
        </nav>
    </header>
    <div class="responsive-table">
    <table class="table">
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
            </tr>
            <?php while( $row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td> <?php echo $row['nome'] ?></td>
                <td> <?php echo $row['contato'] ?></td>
                <td> <?php echo $row['email']?></td>
                
            </tr>
          <?php } ?>
           
           
    </table>
    </div>
    
    
    
    
    
</h2>
    
</body>
</html>