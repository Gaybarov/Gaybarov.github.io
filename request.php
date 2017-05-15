<?php    
    $spam = $_POST['spam']; // получим текст из поля спам
    $name = $_POST['name']; // получаем имя из формы
    $email = $_POST['email']; // получаем email из формы
    $message = $_POST['message']; // получаем текст из формы
    // оформление текста, который приходит получателю
    $send = "Name: ".$name." Message: ".$message." Phone: ".$phone." email: ".$email;
     
    // условие проверки, если поле spam пустое, то форма обрабатывается, 
    //иначе выходим (для роботов)
    if (empty($spam)){ 
    $to= "ilya98vk98@mail.ru"; // кому отправляем форму
    $from = "no-replay@mail.com"; // от кого отправлена форма
    $subject = "message for your site"; // тема сообщения
    // заголовки, отвечающие за кодировку и тип письма, оставляем без изменений
    $headers = "From: $from\r\nReplay-To: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
    // функция php для отправки email mail(кому отправляем, тема, текст в сообщении, заголовки)
    mail($to, $subject, $send, $headers);
    } else exit ;
 
    // В элементе $_SERVER['HTTP_REFERER'] приводится адрес страницы, с которой посетитель пришёл на данную страницу
    $redir = $_SERVER['HTTP_REFERER'];
     
    // условия проверки с пересылкой на страницу с формой с добавление GET параметра,
    // который нужен, чтобы по нему, можно было выводить благодарственный текст
    if (strpos($redir, "mail=1") === false) $redir .= "?mail=1#contact";
    // функция перенаправления, в данном случае на страницу с формой
    header("Location: $redir");
?> 