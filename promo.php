<?php

if (isset($_POST['inscrever'])){


	$email = $_POST["emailpromo"];

$to = $email;
$subject = 'Ofertas LB Jóias';

$msg = '<img src="http://lbjoias.com/logo.png" width="300"><br><br><p> <img src="http://lbjoias.com/promo.png"> </p<br><br>LB Joias e Semijóias</strong><br><small>(051) 3484-1941</small><br><small>Rua Gilberto Lessa, 37 </small><br><small>Gravataí-RS </small><br><small><a href="http://lbjoias.com">lbjoias.com</a></small><br></p>';

$headers = "Content-Type: text/html; charset=UTF-8\n";
$headers .= "From: LB Joias Contato<contato@lbjoias.com>\n";
$headers .= "X-Sender: <contato@lbjoias.com>\n";
$headers .= "X-Mailer: PHP v" . phpversion() . "\n";
$headers .= "X-IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$headers .= "Return-Path: <contato@lbjoias.com.br>\n";
$headers .= "MIME-Version: 1.0\n";

$envio = mail($to, $subject, $msg, $headers);

if($envio == true)
{

echo  "<script>confirm('Email enviado com Sucesso!);</script>";

header('Location: index.html');

}
else
{
echo  "<script>confirm('Email enviado com Sucesso!);</script>";
header('Location: index.html');


}

}