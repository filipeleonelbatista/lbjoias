<?php

if (isset($_POST['enviar'])){

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];



$to = 'filipe.x2016@gmail.com' ;
$subject = 'Contato feito pelo site - ' . $nome;

$msg = '<img src="http://lbjoias.com/logo.png" width="300"><br><br><p><strong>Nome : </strong>' . $nome . '<br><strong>Email :</strong>' . $email . '<br> <br>' . $mensagem . '<strong><br><br>LB Joias e Semijóias</strong><br><small>(051) 3484-1941</small><br><small>Rua Gilberto Lessa, 37 </small><br><small>Gravataí-RS </small><br><small><a href="http://lbjoias.com">lbjoias.com</a></small><br></p>';

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
	echo "\n<h1>Sucesso! </h1><br>";
	$to = $email ;
$subject = 'Sua Mensagem foi enviada com sucesso';

$msg = '<img src="http://lbjoias.com/logo.png" width="300"><br><br><p>Sua mensagem foi enviada com sucesso. Aguarde o retorno ou entre em contato pelo<br> telefone abaixo.<br<br><h1>Sua Mensagem </h1></p><br><br><p><strong>Nome : </strong>' . $nome . '<br><strong>Email :</strong>' . $email . '<br> <br>' . $mensagem . '<strong><br><br>LB Joias e Semijóias</strong><br><small>(051) 3484-1941</small><br><small>Rua Gilberto Lessa, 37 </small><br><small>Gravataí-RS </small><br><small><a href="http://lbjoias.com">lbjoias.com</a></small><br></p>';

$headers = "Content-Type: text/html; charset=UTF-8\n";
$headers .= "From: LB Joias Contato<contato@lbjoias.com>\n";
$headers .= "X-Sender: <contato@lbjoias.com>\n";
$headers .= "X-Mailer: PHP v" . phpversion() . "\n";
$headers .= "X-IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$headers .= "Return-Path: <contato@lbjoias.com.br>\n";
$headers .= "MIME-Version: 1.0\n";

$envio = mail($to, $subject, $msg, $headers);

echo  "<script>confirm('Email enviado com Sucesso!);</script>";

header('Location: contato.html');

}
else
{
echo  "<script>confirm('Email enviado com Sucesso!);</script>";
header('Location: contato.html');


}

}