<?php 
// ================================================================================
/*  library para enviar emails através do PHPMailer
    NOTAS:
    1. O PHPMailer tem que estar na pasta [base]/assets/phpmailer
    2. Definir corretamente as configurações de email
    3. $destinatarios é um array com os contactos de email dos destinatários
    4. O método enviar() retorna TRUE (enviado) ou FALSE (aconteceu um erro no envio)
*/
// ================================================================================
defined('BASEPATH') OR exit('URL inválida.');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Emails
{
    // SERVIDOR ONDE ESTÁ HOSPEDADO
    // -------------------------------------------
    //configurações //ALTERAR
    //public $MAIL_HOST       = 'smtp.hostinger.com.br';
    //public $MAIL_PORT       = 587;
    //public $MAIL_USERNAME   = 'noreply@rockdiet.com.br';  // mudar para rockdiet@lhdev.com.br
    //public $MAIL_PASSWORD   = 'RD@1234senha';             // !rd@1234!emaIL@02!
    //public $MAIL_FROM       = 'noreply@rockdiet.com.br';
    //public $MAIL_REMETENTE  = 'RockDiet App (rockdiet.com.br)';  // um nome 
    // -------------------------------------------
    //configurações //ALTERAR
    public $MAIL_HOST     = 'mail.lhdev.com.br';
    public $MAIL_PORT       = 587;
    public $MAIL_USERNAME = 'holanda@lhdev.com.br';  // mudar para rockdiet@lhdev.com.br
    public $MAIL_PASSWORD = 'ZAxila#01';             // !rd@1234!emaIL@02!20
    public $MAIL_FROM     = 'holanda@lhdev.com.br';
    public $MAIL_REMETENTE= 'Eleitor App (www.lhdev.com.br/sc-eleitor)';  // um nome 
    //
    public $DEBUG_MODE      = 0;  // nao há exibicao de debug - 2 exibe tudo
    public $DESTINATARIO    = '';  // posso colocar aqui um destinatario (1o)
 
    // ============================================================================
    public function enviar($assunto, $mensagem, $destinatarios = [], $bcc = [])
    {
        require_once 'assets/phpmailer/src/Exception.php';
        require_once 'assets/phpmailer/src/PHPMailer.php';
        require_once 'assets/phpmailer/src/SMTP.php';
         
        $mail = new PHPMailer(true);    

        
        // Passing `true` enables exceptions
        $enviada = false;
        try {
            //Configurações do servidor
            $mail->SMTPDebug = $this->DEBUG_MODE;                   // Enable verbose debug output
            $mail->isSMTP();                                        // Set mailer to use SMTP
            $mail->Host = $this->MAIL_HOST;                         // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                 // Enable SMTP authentication
            $mail->Username = $this->MAIL_USERNAME;                 // SMTP username
            $mail->Password = $this->MAIL_PASSWORD;                 // SMTP password
            $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $this->MAIL_PORT;                         // porta TCP
            $mail->CharSet = "UTF-8";

            //Contas
            $mail->setFrom($this->MAIL_FROM, $this->MAIL_REMETENTE);
            //$mail->setFrom($this->MAIL_FROM); ou somente o FROM

            //adiciona o destinatário principal, no caso para enviar uma copia para o remetente
            if($this->DESTINATARIO){
              $mail->addAddress($this->DESTINATARIO); 
            }          
            //adiciona destinatários adicionais, se estiverem indicados
            if($destinatarios){
                foreach ($destinatarios as $destinatario) {
                  // Adicionar contas (de e para)
                  $mail->addAddress($destinatario);   
                } 
            }   
            
            if($bcc){
                foreach ($bcc as $b) {  
                  $mail->addBCC($b);  
                }
            }
                

            //Conteudo
            $mail->isHTML(true);                                    // Definir o formato como HTML
            $mail->Subject = $assunto;
            $mail->Body    = $mensagem;

            //var_dump($mail);
            //exit;

            $enviada = $mail->send();
            
        } catch (Exception $e) {
            $enviada = false;
        }
        return $enviada;
    }
}
