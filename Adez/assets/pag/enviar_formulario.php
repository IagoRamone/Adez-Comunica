<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Content-Type: text/plain; charset=utf-8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $area = $_POST["area-interesse"];
    $mensagem = $_POST["mensagem"];

    $to = "iagoramoneadez@gmail.com"; 
    $subject = "Trabalhe Conosco - Novo Candidato";

    $body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nÁrea: $area\n\nMensagem:\n$mensagem";

    $boundary = md5(time());

    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";


    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $message .= "$body\r\n";

    if (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['curriculo']['tmp_name'];
        $file_name = $_FILES['curriculo']['name'];
        $file_size = $_FILES['curriculo']['size'];
        $file_type = $_FILES['curriculo']['type'];

        $handle = fopen($file_tmp, "r");
        $content = fread($handle, $file_size);
        fclose($handle);
        $encoded_content = chunk_split(base64_encode($content));

        $message .= "--$boundary\r\n";
        $message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $message .= "$encoded_content\r\n";
    }

    $message .= "--$boundary--";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
