<?php
include 'config.php';

$product = $_POST['product'];
$address = $_POST['address'];
$payment = $_POST['payment'];
$troco = isset($_POST['troco']) ? $_POST['troco'] : 'Não';

$sql = "INSERT INTO orders (product, address, payment, troco) VALUES ('$product', '$address', '$payment', '$troco')";

if ($conn->query($sql) === TRUE) {
    echo "Pedido recebido!";
} else {
    echo "Erro ao registrar pedido: " . $conn->error;
}

$conn->close();
?>
