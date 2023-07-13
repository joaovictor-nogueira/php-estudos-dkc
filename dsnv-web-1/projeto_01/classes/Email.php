
<?php 
   /*  

    class Email
    {
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


        private $mailer;


        public function __construct($host,$username,$senha,$name)
        {
            require 'vendor/autoload.php';
            $this->mailer = new PHPMailer(true);

                //Server settings
            $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mailer->isSMTP();                                            //Send using SMTP
            $this->mailer->Host       = $host;                     //Set HOST DO SERVIDOR (NO PAINEL DE CONTROLE GERALMENTE)
            $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mailer->Username   = $username;                     //SMTP username   // SEU EMAIL
            $this->mailer->Password   = $senha;                               //SMTP password  // SUA SENHA
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mailer->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
            $this->mailer->setFrom($username, $name);
                //Content
            $this->mailer->isHTML(true);                                  //Set email format to HTML
            $this->mailer->Subject = 'Assunto Email';
            $this->mailer->Body    = 'Corpo do meu e-email</b>';
            $this->mailer->AltBody = 'Texto caso o navegador n tenha suporte para html';

        }
        public function addAdress($email,$nome){
            $this->mailer->addAddress($email,$nome);     //Add a recipient

        }
        
        public function formatarEmail($info){
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }

        public function enviarEmail(){
            if($this->mailer->sendMail()){
                return true;
            }else{
                return false;
            }
        }
    } */
?> 
