<?php
session_start();
$host = '127.0.0.1:3306';
$dbname = 'u561882274_adez_bd';
$username = 'u561882274_moriarty';
$password = 'SomosTop20@?';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Proteção contra SQL Injection
    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    // Consulta ao banco de dados
    $sql = "SELECT usuario, senha FROM cliente_blog WHERE usuario = '$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['senha'])) {
            $_SESSION['usuario'] = $user;
            echo "Login bem-sucedido!";
            header("Location: ../pag/blog.php");
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
$conn->close();
?>
