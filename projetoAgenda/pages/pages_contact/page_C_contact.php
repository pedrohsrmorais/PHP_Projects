<?php include('../../htmls/headForm.html'); ?>
<body>
<div class="login-box">
<form action="../../process/process_contact/process_C_contact.php" method="post">
    <h1>Cadastro</h1>
        <h2>
            <div class="user-box">
            <input type="text" name="nome">
            <label> Nome do contato </label>
        
</div>
        
        
        <div class="user-box">
        <input type="text" name="telefone">
            <label> Telefone </label>
        
</div>

        
        <div class="user-box">
        <input type="text" name="email">
            <label> Email </label>
        

        

        
        <input type="submit" class="submit" name="buttonc">
        </h2>
        <br>
        <a href="../sessão/home.php">Cancelar</a>
</div>
</form>
        
</body>
</html>