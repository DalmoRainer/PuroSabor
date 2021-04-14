<?php
$servername = "localhost";
$username = "id15005083_rainer";
$password = "*Xx?TDOFN3o?<_!a";
$dbname = "id15005083_purosabor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso!";
?>