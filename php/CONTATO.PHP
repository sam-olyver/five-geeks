<html lang="pt-br">
  <head>
    <title>Five Geeks Design</title>
  
	<link rel="shortcut icon" href="../img/icone.png" > 
    <style type="text/css">
    	
		body{
			background-image: url('../img/imagensgeeks2.png'); 
		}
		
		.mensagem{
			background-color: #fff;
			color: #000;
			font-size: 24px;
			margin: 0 auto;
			width: 40%;
			height: 300px;
			margin-top: 150px;
			border: 10px solid #ddba14;
			text-align: center;
			font-family: 'Century Gothic', sans-serif;

		}
		.mensagem p{
			margin-top: 130px;
		}
    </style>
    </head>
    <body class="fundo-mensagem">
    	<div id="mensagem">
<?php $email_destino="fivegeeksdesign@outlook.com";


/*if ((isset($_POST['nome'])) && (isset($_POST['empresa'])) && (isset($_POST['email'])) && (isset($_POST['estado'])) && (isset($_POST['cidade'])) && (isset($_POST['servicos'])) && (isset($_POST['mensagem']))){
$nome=$_POST['nome'];$empresa=$_POST['empresa'];$email=$_POST['email'];$estado=$_POST['estado'];$cidade=$_POST['cidade'];$servicos=$_POST['servicos'];$mensagem=$_POST['mensagem'];
}

$conteudo="nome do usuario:$nome\n";$conteudo.= "empresa:$empresa\n";
$conteudo.= "email:$email\n";$conteudo.= "estado:$estado\n";
$conteudo.="cidade:$cidade\n";$conteudo.="servicos:$servicos";
$conteudo.= "mensagem:$mensagem\n";
//mail($email_destino,$conteudo);
//para este comando (mail) funcionar precisa de um provedor de email só funciona hospedado*/
	echo "
	<div class='mensagem'> 
		<p>Sua Mensagem foi Enviada com Sucesso!</p>
	</div>";

	header("Refresh: 3, ../index.html")
?>
		</div>
	</body>
</html>