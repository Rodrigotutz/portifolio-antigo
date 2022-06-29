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

$email->add(
    $assunto,
    $mensagem
)->send();

header("location: /?sucesso=mensagem");
die;
