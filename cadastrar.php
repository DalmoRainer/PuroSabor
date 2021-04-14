<?php

include('conectar.php');
//Variaveis que irao armazenar os dados digitados no HTML
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastrar (usuario, email, senha)
VALUES ('$usuario', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo ("<script>
            alert('Cadastro realizado com sucesso');
            window.location.href='funcionarios.html';
        </script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>