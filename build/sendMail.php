<?php
if((isset($_POST['text'])&&$_POST['text']!="")&&(isset($_POST['contact'])&&$_POST['contact']!="")){
    $to = 'kaoru-san@yandex.ru';
    $subject = 'Обратный звонок';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Почта: '.$_POST['contact'].'</p>
                        <p>Сообщение: '.$_POST['text'].'</p>
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <example@example.com>\r\n";

    mail($to, $subject, $message, $headers);
}