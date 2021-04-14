<?php
    include('conectar.php');

    $sql = "DELETE FROM pedido";

    if ($conn->query($sql) === TRUE) {
    echo "Pedidos deletados com sucesso.";
    header('location: funcionarios.html');
    } else {
    echo "Erro ao deletar dados: " . $conn->error;
    }

$conn->close();
?>