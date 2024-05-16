<?php

namespace Source\Controllers;

use Rodrigotutz\Controller;
use Source\Helpers\Email;

class Home extends Controller {

    public function __construct($router) {
        parent::__construct($router, dirname(__DIR__, 2). "/views");
    }

    public function home(): void {
        $this->view->addData([
            'title' => 'Página Inicial'
        ]);
        echo $this->view->render('home');
    }

    public function send($data): void {

        $name = filter_var($data['nome'], FILTER_DEFAULT);
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        $message = filter_var($data['mensagem'], FILTER_DEFAULT);
        $phone = filter_var($data['telefone'], FILTER_DEFAULT);

        if(!$name || !$email || !$message || !$phone) {
            $this->router->redirect("home.home", [
                'error' => 'invalid-fields'
            ]);
        }
        
        
        /*
        $assunto = "Mensagem site Rodrigo Antunes";
        define("Mensagem_contato", [
            "nome" => $data["nome"],
            "email" => $data["email"],
            "telefone" => $data["telefone"],
            "mensagem" => $data["mensagem"],
        ]);

        $message = 
        "<body style='width: 100%;'>
            <div style='font-family: sans-serif; text-align:center;border-radius:25px; padding: 25px;color: #000;' >".
                "<h1>$assunto</h1>".
                "Meu nome é: ". "<strong style='#000; font-weight:bold;'>" .Mensagem_contato["nome"]."</strong>,"."<br>". 
                "Meu email é: ". "<spam style='#000; font-weight:bold;'>". Mensagem_contato["email"]."</spam>," ."<br>" .
                "Meu telefone de contato é: " . "<strong style='#000; font-weight:bold;'>" .Mensagem_contato["telefone"]. "</strong>," . "<br>" . 
                "Essa é a minha mensagem: " . "<strong style='#000; font-weight:bold;'>" .Mensagem_contato["mensagem"]. "</strong> <br><br><br>".
                "<a href='http://rodrigotutz.rf.gd/' style='color: #fff; text-decoration: none; background-color: #000;padding: 10px; border-radius: 7px'>Voltar ao site</a>
                <footer style='text-align:center; margin-top: 0.8rem; font-family: sans-serif; font-weight: bold'>".
                    "<small> Desenvolvido por &copy; Rodrigo TUTZ</small> <br> 
                </footer>
            </div>
        </body>"; 
        */

        $mail = new Email(getenv("MAIL_HOST"), getenv("MAIL_PORT"), getenv("MAIL_SECURITY"), getenv("MAIL_USER"), getenv("MAIL_PASSWORD"));
        $mail->add("E-mail portifólio", "<h1>Nome: $name <br>Email: $email <br> Telefone: $phone <br> Mensagem: $message</h1>", getenv("MAIL_NAME"), getenv("MAIL_FROM")); 
        if(!$mail->send()) {
            $this->router->redirect('home.home', ['error' => 'not-allowed']);
        }
        
        $this->router->redirect('home.home', ['sucesso' => "mensagem"]);
    }
}