<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\vendor\PHPmailer\PHPmailer\src\Exception.php';
require 'C:\xampp\htdocs\vendor\PHPmailer\PHPmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\vendor\PHPmailer\PHPmailer\src\SMTP.php';

$mensagemStatus = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email_destinatario = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem_corpo = $_POST['mensagem'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'seu_email@gmail.com';
        $mail->Password = 'sua_senha';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('seu_email@gmail.com', $nome);
        $mail->addAddress($email_destinatario);

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body = nl2br($mensagem_corpo);
        $mail->AltBody = $mensagem_corpo;

        $mail->send();
        $mensagemStatus = 'Mensagem enviada com sucesso!';
    } catch (Exception $e) {
        $mensagemStatus = "A mensagem não pôde ser enviada. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>

    <?php if (!empty($mensagemStatus)): ?>
        <p><?php echo $mensagemStatus; ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail Destinatário:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="assunto">Assunto:</label>
        <input type="text" id="assunto" name="assunto" required><br><br>
        
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="5" cols="40" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>