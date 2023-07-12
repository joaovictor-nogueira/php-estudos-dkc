<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Email
    {

        function __construct()
        {
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.example.com';                     //Set HOST DO SERVIDOR (NO PAINEL DE CONTROLE GERALMENTE)
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'onevictornogueira@gmail.com';                     //SMTP username   // SEU EMAIL
                $mail->Password   = 'secret';                               //SMTP password  // SUA SENHA
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('fonevictornogueira@gmail.com', 'João');
                $mail->addAddress('jvdoratioto@gmail.com', 'pout');     //Add a recipient
                //$mail->addAddress('ellen@example.com');               //Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Assunto Emila';
                $mail->Body    = 'Corpo do meu e-email</b>';
                $mail->AltBody = 'Texto caso o navegador n tenha suporte para html';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
?>