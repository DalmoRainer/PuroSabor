<?php
include('conectar.php');

$mesa = $_POST['mesa'];
$campo1 = $_POST['campo1'];
$campo2 = $_POST['campo2'];
$campo3 = $_POST['campo3'];
$campo4 = $_POST['campo4'];
$campo5 = $_POST['campo5'];
$campo6 = $_POST['campo6'];

$sql = "INSERT INTO pedido (mesa, entrada, qentrada, principal, qprincipal, sobremesa, qsobremesa)
VALUES ('$mesa', '$campo1', '$campo2', '$campo3', '$campo4', '$campo5', '$campo6')";

if ($conn->query($sql) === TRUE) {
  echo ("<script>
            alert('Pedido realizado com sucesso');
            window.location.href='cardapio.html';
        </script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>