<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/email-config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Apenas aceitar pedidos POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recolher os dados
$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

// Validar os campos
if (
    $nome === '' ||
    $email === '' ||
    $mensagem === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    strlen($nome) > 100 ||
    strlen($email) > 254 ||
    strlen($mensagem) > 5000
) {
    header('Location: index.php?status=erro#contacto');
    exit;
}

$mail = new PHPMailer(true);

try {

    // Configuração SMTP do Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL_UTILIZADOR;
    $mail->Password = EMAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Codificação
    $mail->CharSet = 'UTF-8';

    // Remetente e destinatário
    $mail->setFrom(EMAIL_UTILIZADOR, 'Portfólio - Guilherme Fernandes');
    $mail->addAddress(EMAIL_DESTINO);
    $mail->addReplyTo($email, $nome);

    // Preparar os dados em segurança para HTML
    $nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
    $emailSeguro = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $mensagemSegura = nl2br(
        htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8')
    );

    // Conteúdo do email em HTML
    $mail->isHTML(true);
    $mail->Subject = 'Novo contacto';

    $mail->Body = "
        <h2>Nova mensagem</h2>

        <p><strong>Nome:</strong> {$nomeSeguro}</p>
        <p><strong>Email:</strong> {$emailSeguro}</p>

        <p><strong>Mensagem:</strong></p>
        <p>{$mensagemSegura}</p>
    ";

    // Versão em texto simples
    $mail->AltBody =
        "Nova mensagem\n\n" .
        "Nome: $nome\n" .
        "Email: $email\n\n" .
        "Mensagem:\n$mensagem";

    // Enviar email
    $mail->send();

    header('Location: index.php?status=sucesso#contacto');
    exit;

} catch (Exception $e) {

    error_log('Erro PHPMailer: ' . $mail->ErrorInfo);

    header('Location: index.php?status=erro#contacto');
    exit;
}
