<html lang="pt-br">
  <head>
    <title>Five Geeks Design</title>
  
	<link rel="shortcut icon" href="../img/icone.png" type="image/x-icon"> 
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    </head>
    <body class="fundo-mensagem">
    	<div id="mensagem">
<?php $email_destino="fivegeeksdesign@outlook.com";


if ((isset($_POST['nome'])) && (isset($_POST['empresa'])) && (isset($_POST['email'])) && (isset($_POST['estado'])) && (isset($_POST['cidade'])) && (isset($_POST['servicos'])) && (isset($_POST['mensagem']))){
$nome=$_POST['nome'];$empresa=$_POST['empresa'];$email=$_POST['email'];$estado=$_POST['estado'];$cidade=$_POST['cidade'];$servicos=$_POST['servicos'];$mensagem=$_POST['mensagem'];
}

$conteudo="nome do usuario:$nome\n";$conteudo.= "empresa:$empresa\n";
$conteudo.= "email:$email\n";$conteudo.= "estado:$estado\n";
$conteudo.="cidade:$cidade\n";$conteudo.="servicos:$servicos";
$conteudo.= "mensagem:$mensagem\n";
//mail($email_destino,$conteudo);
//para este comando (mail) funcionar precisa de um provedor de email só funciona hospedado
echo"<br/><br/><br/><br/><center><h3>Sua Mensagem foi Enviada com Sucesso</h3></center>";

?>
		</div>
	</body>
</html>