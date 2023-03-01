<?php include('../../htmls/Form.html')
?>

<body>
        <div class="login-box">
                <form action="../../process/process_user/process_login.php" method="post">
                        <h1>Login</h1>
                        <label> Email </label>
                        <div class="user-box">
                                <input type="text" name="email">


                        </div>
                        <br>

                        <label> Senha </label>
                        <div class="user-box">
                                <input type="password" name="senha">


                        </div>

                        <br>
                        <input type="submit" class="submit" name="buttonl">
                        </h2>
                        <br> <br>
                        <a href="../../mainpage.php">Voltar para Homepage</a>
        </div>
        </form>

</body>

</html>