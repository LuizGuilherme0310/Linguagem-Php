<?php
echo "<h2> Dados recebidos no Back-end </h2>";

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

echo "Nome: $nome <br><br>";
echo "Email: $email";
?>