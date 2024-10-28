<?php

    /* FUNÇÃO MAIL() E SEUS PARÂMETROS
        mail(to, subject, message, headers, parameters);
        - to: Endereço de e-mail do destinatário.
        - subject: Assunto do e-mail.
        - message: Corpo da mensagem.
        - headers (opcional): Cabeçalhos adicionais (como From, Reply-To).
        - parameters (opcional): Parâmetros extras, como o caminho do programa que processa o e-mail.
    */

    // Endereço de e-mail do destinatário
    $to = "onivaldoflores@gmail.com";

    // Assunto do e-mail
    $subject = "Teste de E-mail";

    // Corpo da mensagem
    $message = "Olá! Este é um e-mail de teste enviado usando a função mail() no PHP.";

    // Cabeçalhos adicionais
    $headers = "From: remetente@example.com\r\n" .
            "Reply-To: responder@example.com\r\n" .
            "X-Mailer: PHP/" . phpversion();

    // Enviando o e-mail
    if(mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }

?>