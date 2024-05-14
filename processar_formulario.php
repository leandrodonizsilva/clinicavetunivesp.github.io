<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$nomeCliente = $_POST['nomeCliente'];
$endereco = $_POST['endereco'];
$nomeAnimal = $_POST['nomeAnimal'];
$raca = $_POST['raca'];
$idAnimal = $_POST['idAnimal'];

$sql = "INSERT INTO clientes (nome_cliente, endereco, nome_animal, raca, id_animal)
        VALUES ('$nomeCliente', '$endereco', '$nomeAnimal', '$raca', '$idAnimal')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

$conn->close();
?>
