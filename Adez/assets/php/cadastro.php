<?php

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, "tel", FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

$host = '127.0.0.1:3306';
$dbname = 'u561882274_adez_bd';
$username = 'u561882274_moriarty';
$password = 'SomosTop20@?';

$conn = new mysqli($host, $username, $password, $dbname);
$hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO cliente_blog (nome, email, telefone, usuario, senha) VALUES (?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}

$stmt->bind_param("sssss", $nome, $email, $telefone, $usuario, $hash);

if ($stmt->execute()) {
    
    header("Location: /assets/pag/login.html");
} else {
    
    die("Erro ao inserir dados: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>
