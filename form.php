<?php
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["phone"];
$store = $_POST["store"]

if($name=="" or $email=="" or $tel=="" or $store==""){
    echo "Заполните все поля";
}

else{
 
    $to = "mail@mail.ru";    
    $subject = "Письмо с обратной связи";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: <test@mail.ru>\r\n";

    
    $message .= "Имя пользователя: ".$name."\n";
    $message .= "Почта: ".$email."\n";
    $message .= "Телефон: ".$tel."\n";
    $message .= "Название товара:".$store."/n";

  
    $send = mail($to, $subject, $message, $headers);


    if ($send == "true")
    {
        echo "<p style='color: green;'>Ваше сообщение отправлено. Мы ответим вам в ближайшее время.\r\n</p>";
    }
  
    else
    {
        echo "<p style='color: red;'>Не удалось отправить, попробуйте снова!</p>";
    }
}
?>