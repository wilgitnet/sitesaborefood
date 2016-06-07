<?php
header('Content-Type: text/html; charset=utf-8');

$nome=$_POST['name'];
$email=$_POST['mail'];
$telefone=$_POST['phone'];
$assunto=$_POST['subject'];
$mensagem=$_POST['message'];
?>
<?php

$to = "allandssilva@gmail.com";
$subject = "$subject";
$message = "<strong>Nome:</strong> $name<br /><br />
            <strong>Email:</strong> $email<br /><br />
            <strong>Telefone:</strong> $telefone<br /><br />
            <strong>Assunto:</strong> $subject<br /><br />
            <strong>Mensagem:</strong> $message<br /><br />";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .="From: $email\n";
mail($to, $subject, $message, $header);

header('Location: http://192.185.223.160/~sabore/contact2.html');

?>