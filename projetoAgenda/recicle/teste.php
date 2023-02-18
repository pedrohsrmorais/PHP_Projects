<?php
require_once('connect.php');

$Email = "Pedro";
$Senha = "Senha";


$sql= "SELECT * FROM users WHERE email = '$Email' AND senha = '$Senha'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

echo $row['email'];
echo $row['senha'];



?>