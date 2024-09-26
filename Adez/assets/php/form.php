<?php

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING);
$nome_empresa = filter_input(INPUT_POST, "empresa", FILTER_SANITIZE_STRING);
$faturamento = filter_input(INPUT_POST, "faturamento", FILTER_SANITIZE_STRING);

$host = '127.0.0.1:3306';
$dbname = 'u561882274_adez_bd';
$username = 'u561882274_moriarty';
$password = 'SomosTop20@?';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($faturamento === '30 Mil' ) {
    header("Location: ../pag/sintomuito.html");
    exit();
}

$stmt = $conn->prepare("INSERT INTO cliente (nome, email, telefone, empresa, faturamento) VALUES (?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}

$stmt->bind_param("sssss", $nome, $email, $telefone, $nome_empresa, $faturamento);

if ($stmt->execute()) {
    
    header("Location: ../pag/agradecimento.html");
} else {
    
    die("Erro ao inserir dados: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>
