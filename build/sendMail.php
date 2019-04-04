<?php
if((isset($_POST['message'])&&$_POST['message']!="")&&(isset($_POST['contact'])&&$_POST['contact']!="")){
    $to = '<fedorova@ps-pr.ru>, <pr@ps-pr.ru>';
    $subject = 'С сайта Pink Sweater';
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                    <body>
                        <p>Контакт отправителя: '.$_POST['contact'].'</p>
                        <p>Сообщение: '.$_POST['message'].'</p>
                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Robot <fedorova@ps-pr.ru>\r\n";

    mail($to, $subject, $message, $headers);
}