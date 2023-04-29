<?php
    $name = $_POST['name'];
	$phone = $_POST['tel'];
    $email = $_POST['email'];

	$to = "tochki.digital@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Почта: $email /n
	";
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Привет, форма отправлена</p>
