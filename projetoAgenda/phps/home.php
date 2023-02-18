<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <h1> Olá <?php echo $_SESSION['nome'] ?></h1>
    <h2> <?php echo $_SESSION['id'] ?>
    <?php echo $_SESSION['email'] ?>
    <?php echo $_SESSION['senha'] ?>
</h2>
    
</body>
</html>