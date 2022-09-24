<?php

$subjectPrefix = '[Contato do Site - Diamantino Maduro]';

$name     					    = $_POST['name'];
$email    					    = trim($_POST['email']);
$emaildestinatario 			= 'diamantinomaduroadvogado@gmail.com';
$message   					    = $_POST['message'];

$assunto = 'Contato do Site - Diamantino Maduro';

$mensagemHTML = '<P>Seguem dados do contato:</P>
	<p><b>Nome:</b> '.$name.'
	<p><b>E-Mail:</b> '.$email.'
	<p><b>Mensagem:</b> '.$message.'
	<hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= 'Bcc: suporte@labarba.digital' . "\r\n";
$headers .= "Return-Path: $emaildestinatario \r\n";
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

if($envio)
  echo "<script>alert('Obrigado! Sua mensagem foi enviada com sucesso! Entraremos em contato em breve!'); window.top.location.href = '/';</script>";