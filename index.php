<?php

require __DIR__ . '/lib_ext/autoload.php'; //CAMINHO ABSOLUTO

use Notification\Email;

$novoEmail = new Email;

$novoEmail->sendMail("Assunto de Teste", "<p>Este é um e-mail de <b>teste</b></p>", "hilton.bacelar@webconverti.com.br", "Hilton Bacelar","hilton.bacelar@webconverti.com.br", "Hilton");
var_dump($novoEmail);

