<?php include('../../htmls/Form.html'); ?>

<body>
        <div class="login-box">
                <form action="../../process/process_contact/process_C_contact.php" method="post">
                        <h1>Criar contato</h1>

                        <label> Nome do contato </label>
                        <div class="user-box">
                                <input type="text" name="nome">


                        </div>

                        <label> Telefone </label>
                        <div class="user-box">
                                <input type="text" name="telefone">


                        </div>

                        <label> Email </label>
                        <div class="user-box">
                                <input type="text" name="email">





                                <br>
                                <input type="submit" class="submit" name="buttonc">

                                <br>
                                <a href="../../pages/pages_user/page_home.php">Cancelar</a>
                        </div>
                </form>

</body>

</html>