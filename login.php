<?php
session_start();
$servername = "localhost";
$username = "id15005083_rainer";
$password = "*Xx?TDOFN3o?<_!a";
$dbname = "id15005083_purosabor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: funcionarios.html');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select * from cadastrar where usuario ='{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: listar.php');
    exit();
}else{
    header('Location: funcionarios.html');
    exit();
}
    
?>