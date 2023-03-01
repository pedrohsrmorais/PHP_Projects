<?php
session_start();
require_once('../../db/connect.php');
include('../../htmls/Head.html');
$Email = $_SESSION['email'];
$sql = "SELECT * FROM contatos WHERE usuario = '$Email' ";

$result = mysqli_query($con, $sql);


?>

<body>
    <header class="head">
        <h1> Agenda </h1>
        <nav class="navbar">

            
    </header>
    <div class="container">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td><a class="buttoncs1" href="../pages_contact/page_C_contact.php">Criar contato</a></td>
                <td><a class= "buttoncs1" href="../../mainpage.php">Sair</a></td>
                
            
        </nav>

            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>

                    <td> <?php echo $row['nome'] ?></td>
                    <td> <?php echo $row['contato'] ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <a class="buttoncss2" href="../pages_contact/page_U_contact.php?nome=<?php echo $row['nome'] ?>&contato=<?php echo $row['contato'] ?>&email=<?php echo $row['email'] ?>&id=<?php echo $row['id'] ?>">editar</a> </td>
                    <td> <a class="buttoncss2" href="../../process/process_contact/process_D_contact.php?nome=<?php echo $row['nome'] ?>&contato=<?php echo $row['contato'] ?>&email=<?php echo $row['email'] ?>">excluir</a> </td>


                </tr>
            <?php } ?>


        </table>
    </div>





    </h2>

</body>

</html>