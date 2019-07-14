<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>processando ...</title>
</head>
<body>
 	<?php
 		$empresa = $_POST['empresa'];
 		$nome = $_POST['nome'];
 		$telefone = $_POST['telefone'];
 		$email = $_POST['email'];
 		$assunto = $_POST['assunto'];
 		$mensagem =$_POST['mensagem'];
 	?>

 	<?php
 	$to = "agenciadf745@gmail.com";
 	$subject = "$assunto";
 	$message = "<strong>empresa: $empresa</strong><br>   <strong>Nome: $nome</strong><br> <strong>telefone: $telefone</strong><br>  <strong>Email: $email</strong><br> <strong>Assunto: $assunto</strong><br>   <strong>Mensagem: $mensagem</strong><br>    ";
 	$header = "MIME-VERSION 1.0\N";
 	$header = "Content-type: text/html; charset-iso-8859-1\n";
 	$header = "From: Email\n";
 	mail($to, $subject, $message, $header);

 	echo "Mensagem enviada com sucesso! em breve nossa equipe entrará em contato.";
 	print '<script>location.href= "index.html";</script>';
 	?>
</body>
</html>