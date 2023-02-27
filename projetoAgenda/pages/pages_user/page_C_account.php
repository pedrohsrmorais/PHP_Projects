<?php include('../../htmls/Form.html')
?>

<body>
        <div class="login-box">
                <form action="../../process/process_user/process_C_account.php" method="post">
                        <h1>Cadastro</h1>

                        <label> Nome </label>
                        <div class="user-box">
                                <input type="text" name="nome">


                        </div>

                        <label> Email </label>
                        <div class="user-box">
                                <input type="text" name="email">


                        </div>

                        <label> Senha </label>
                        <div class="user-box">
                                <input type="password" name="senha">


                        </div>

                        <label> Confirmar Senha </label>
                        <div class="user-box">
                                <input type="password" name="confirmarsenha">


                        </div>

                        <br>
                        <input type="submit" class="submit" name="buttonc">
                        <br>
                        <a href="../../mainpage.php">Voltar para Homepage</a>
        </div>
        </form>

</body>

</html>