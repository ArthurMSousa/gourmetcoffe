<?php
$servername = "localhost"; // Alterar para o host do servidor
$username = "root";
$password = "";
$dbname = "gourmet_coffee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>
