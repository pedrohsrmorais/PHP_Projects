<?php
session_start();
require_once('../../db/connect.php');
include('../../htmls/Form.html');
$id = $_GET['id'];
$nome = $_GET['nome'];
$ctt = $_GET['contato'];
$email = $_GET['email'];
?>


<body>
    <div class="login-box">
        <form action="../../process/process_contact/process_U_contact.php?id=<?php echo $id ?>" method="post">
            <h1>Editar contato</h1>
            <label> Nome </label>
            <div class="user-box">
                <input type="text" name="nome" value="<?php echo $nome ?>">


                <br>
                <label> Telefone </label>
                <div class="user-box">
                    <input type="text" name="telefone" value="<?php echo $ctt ?>">


                    <br>
                    <label> Email </label>
                    <div class="user-box">
                        <input type="text" name="email" value="<?php echo $email ?>">

                        <br>
                        <input type="submit" class="submit" name="buttonc">
                        <br>
                        <a href="../pages_user/page_home.php">Cancelar</a>
                    </div>
        </form>

</body>

</html>