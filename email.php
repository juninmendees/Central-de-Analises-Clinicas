<?php
if (!empty ($_POST['nome']) && !empty($_POST['assunto']) && !empty ($_POST['mensagem']))
{
// Variaveis originadas no email_form.php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$mensagem = wordwrap ($mensagem,70);
$mensagem = "$nome Escreveu:\n\n$mensagem";

	if(mail('juniormendesjp@gmail.com',$assunto,$mensagem,"from: $email"))
	{
	echo '<script type="text/javascript"> 
	alert("Email enviado com sucesso");
	</script>';
	}

	else
	{
	echo '<script type="text/javascript"> 
	alert("Ocorreu um erro durante o envio");
	</script>';

	}
}


?>
<meta http-equiv="refresh" content="3; url=index.html">