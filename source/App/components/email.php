<?php

require __DIR__ . "/../../../vendor/autoload.php" ;

use Source\Helpers\Email;

if(!isset($_POST["acao"])){
    header("location: /?erro=negado");
}

$email = new Email();
$assunto = "Mensagem site Rodrigo Antunes";

define("Mensagem_contato", [
    "nome" => $_POST["nome"],
    "email" => $_POST["email"],
    "telefone" => $_POST["telefone"],
    "mensagem" => $_POST["mensagem"],
]);

$mensagem = 
"<body style='width: 100%;'>
    <div style='font-family: sans-serif; text-align:center; background: rgba(91, 91, 91, 0.8);border-radius:25px; padding: 25px;color: #fff' >
        <p>Seu email foi enviado com sucesso!!! Retornarei o seu contato o mais breve possível!</p>
        <small style='border-bottom: 1px solid rgba(224, 224, 224, 0.8)'>Olá ".Mensagem_contato["nome"].", essa foi a mensagem que você me enviou:</small>
        <h2>Olá, Rodrigo Antunes</h2><br>".
        "Meu nome é: ". "<strong style='color:rgba(224, 224, 224, 0.8)'>" .Mensagem_contato["nome"]."</strong>,"."<br>". 
        "Meu email é: ". "<spam style='color:rgba(224, 224, 224, 0.8);'>". Mensagem_contato["email"]."</spam>," ."<br>" .
        "Meu telefone de contato é: " . "<strong style='color:rgba(224, 224, 224, 0.8);'>" .Mensagem_contato["telefone"]. "</strong>," . "<br>" . 
        "Essa é a minha mensagem: " . "<strong style='color:rgba(224, 224, 224, 0.8);'>" .Mensagem_contato["mensagem"]. "</strong> <br><br><br>".
        "<a href='http://rodrigotutz.rf.gd/' style='color: #000; text-decoration: none; background-color: #fff;padding: 10px; border-radius: 7px'>Voltar ao site</a>
        <footer style='text-align:center; margin-top: 0.8rem; font-family: sans-serif; font-weight: bold'>".
            "<small> Desenvolvido por &copy; Rodrigo TUTZ</small> <br> 
        </footer>
    </div>
</body>";

echo $mensagem;

$email->add(
    $assunto,
    $mensagem,
    "Rodrigo Antunes",
    "contatorodtutz@gmail.com",
    Mensagem_contato["email"]
)->send();

header("location: /?sucesso=mensagem");
die;
