<?php

//Error
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastrophp";
$conn = new mysqli($servername, $username, $password, $dbname);


// Get the user data from the POST request
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
 


$sql = "insert into users (nome,email,senha) values ('$nome', '$email','$senha')";
$result = mysqli_query($conn, $sql);

// Return a success message
echo 'User created successfully';



?>