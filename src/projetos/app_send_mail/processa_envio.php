<?php

#Importação PHPMailer
require "bibliotecas/PHPMailer/Exception.php";
require "bibliotecas/PHPMailer/OAuth.php";
require "bibliotecas/PHPMailer/PHPMailer.php";
require "bibliotecas/PHPMailer/POP3.php";
require "bibliotecas/PHPMailer/SMTP.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    class Mensagem{

        private $para = null;
        private $assunto = null;
        private $mensagem = null;


        public function __get($attr){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }
            return true;
        }

    } // Mensagem

    $mensagem = new Mensagem;

    $mensagem->__set('para',$_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    if(!$mensagem->mensagemValida()){
        echo 'mensgem não é valida';
    }
    $mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'xxxxx';                     // SMTP username
    $mail->Password   = 'xxxxx';                               // SMTP password
    $mail->SMTPSecure =  'tls'; //PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('lugnoriO@gmail.com', 'LucasWEB Remetente');
    $mail->addAddress('lugnoriO@gmail.com', 'LucasWEB DESTINATARIO ');     // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'oi. assunto';
    $mail->Body    = 'Oi. Conteudo do <strong>email</strong>';
    $mail->AltBody = 'Oi. Conteudo do email';

    $mail->send();
    echo 'Message has been sent';
    }catch (Exception $e) {
        echo "Não foi possível enviar este email, por favor, tente novamente mais tarde : {$mail->ErrorInfo}";
    }


?>