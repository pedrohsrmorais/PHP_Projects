<?php
session_start();
require_once('../../db/connect.php');
include('../../htmls/headForm.html');
$id = $_GET['id'];
$nome = $_GET['nome'];
$ctt = $_GET['contato'];
$email = $_GET['email'];
?>


<body>
<div class="login-box">
<form action="../../process/process_contact/process_U_contact.php?id=<?php echo $id ?>" method="post">
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
        <a href="../pages_user/page_home.php">Cancelar</a>
</div>
</form>
        
</body>
</html>