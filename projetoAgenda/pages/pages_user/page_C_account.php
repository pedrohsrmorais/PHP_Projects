<?php include('../../htmls/head.html')
?>

</head>
<body>
<div class="login-box">
<form action="../../process/process_user/process_C_account.php" method="post">
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
        <a href="../../mainpage.php">Voltar para Homepage</a>
</div>
</form>
        
</body>
</html>