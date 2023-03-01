<?php
require_once('../../db/connect.php');

$_nome = $_GET['nome'];
$sqld = "DELETE FROM contatos WHERE nome = '$_nome'";
mysqli_query($con,$sqld);
header("Location: ../../pages/pages_user/page_home.php");


?>