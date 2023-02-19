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
<form action="process.php" method="post">
    <h1>Cadastro</h1>
        <h2>
            <div class="user-box">
            <input type="text" name="nome">
            <label> Nome </label>
        
</div>
        
        
        <div class="user-box">
        <input type="text" name="email">
            <label> Email </label>
        
</div>

        
        <div class="user-box">
        <input type="password" name="senha">
            <label> Senha </label>
        
</div>

        
        <div class="user-box">
        <input type="password" name="confirmarsenha">
            <label> Confirmar Senha </label>
        
</div>

        

        
        <input type="submit" class="submit" name="buttonc">
        </h2>
        <br>
        <a href="../htmls/mainpage.html">Voltar para Homepage</a>
</div>
</form>
        
</body>
</html>