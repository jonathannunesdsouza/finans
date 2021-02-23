<?php 

    require './bibliotecas/PHPMailer/Exception.php';
    require './bibliotecas/PHPMailer/OAuth.php';
    require './bibliotecas/PHPMailer/PHPMailer.php';
    require './bibliotecas/PHPMailer/POP3.php';
    require './bibliotecas/PHPMailer/SMTP.php';

    class Mensagem {
        private $destinatario = 'jonathannunes.souza98@gmail.com';
        private $assunto = null;
        private $mensagem = null;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function mensagemValida() {
            if (empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }
                return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    if ($mensagem->mensagemValida()) {
        echo 'Mensagem válida';
    } else {
        echo 'Mensagem inválida';
    }

?>