<?php

require __DIR__ . "/vendor/autoload.php";


use Source\Support\Email;

$email = new Email();

$email->add(
    subject: "testando primeiro email",
    body: "<h1> testando header1 </h1> espero que tudo tenha dado certo",
    recipient_name: "Jóison Oliveira Pereira",
    recipient_email: "joisonsp60@gmail.com"
)->attach(
    filePath: "files/teste.png",
    fileName: "dc"
)->attach(
    filePath: "files/b.jpg",
    fileName: "marvel"
)->send();

if (!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
}
