<?php 

    require "bibliotecas/PHPMailer/Exception.php";
    require "bibliotecas/PHPMailer/OAuth.php";
    require "bibliotecas/PHPMailer/PHPMailer.php";
    require "bibliotecas/PHPMailer/POP3.php";
    require "bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Mensagem {
        private $destinatario = 'jonathannunes.souza98@gmail.com';
        private $usuario_newsletter = null;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function mensagemValida() {
            if (empty($this->usuario_newsletter)) {
                return false;
            }
                return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('destinatario', 'jonathannunes.souza98@gmail.com');
    $mensagem->__set('usuario_newsletter', $_POST['usuario_newsletter']);

    if (!$mensagem->mensagemValida()) {
        echo 'Mensagem não é válida';
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jonathannunes.souza98@gmail.com';                     //SMTP username
        $mail->Password   = 'etec1142';                               //SMTP password
        $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('jonathannunes.souza98@gmail.com', 'Finans - Remetente');
        $mail->addAddress('jonathannunes.souza98@gmail.com', 'Finans - Destino');     //Add a recipient
        $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Cadastro de usuario no Newsletter';
        $mail->Body    = 'E-mail informado para cadastro: ' .$_POST['usuario_newsletter'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        header('Location: index.php?newsletter=cadastrado');
    } catch (Exception $e) {
        echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
    }

?>