<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Questionário Enviado!</title>
		<link rel="icon" type="image/png" href="imagens/logo-titulo.png">
		<style>
			body {
				background-color: #004d40;
			}
			img {
				position:absolute;
				top:40%;
				left:40%;
				top: 25px;
			}
			h1 {
				font-family: Verdana;
				font-size: 16pt;
				color: white;
				margin-top: 100px;
				text-align: center;
			}
			.volta {
				text-align: center;
				display: block;
				font-family: Verdana;
				font-size: 12pt;
				font-weight: bold;
				color: #bdbdbd;
				text-decoration: none;
			}
			.volta:hover {
				color: #64dd17;
			}
		</style>
	</head>
	<body>	
		<a href="index.html"><img src="imagens/logo-consult.png" title="Consult - Soluções em um click!"/></a>
		<h1 class="fundadores">Informações envidas com sucesso! Obrigado por nos ajudar a melhorar a Connsult.</h1>
		<a class="volta" href="index.html">Voltar para início</a>
		<br/>
	 <?php
	 	$profissao = $_POST['profissao'];
	 	$radioopcao = $_POST['radioopcao'];
	 	$justificativa = $_POST['justificativa'];
	 	$radionumero = $_POST['radionota'];
	 	$melhorar = $_POST['melhorar'];

	 	$servidor = "localhost";
	 	$usuario = "connsult";
	 	$senha = "";
	 	$banco = "dados";
		
	 	$conexao = mysqli_connect($servidor, $usuario, $senha);
		$db = mysqli_select_db($conexao, $banco);
		if (!$conexao) {
	 	 	die("Não foi possível conectar ao banco de dados");
	 	 	exit();
		}
		if(!$db){
            die("Não foi possível selecionar o banco de dados".mysqli_error($db));
  		}

		$sql = mysqli_query($conexao,"INSERT INTO dados (profissao,usaria,justifica,nota,melhorar) VALUES ('$profissao','$radioopcao','$justificativa','$radionota','$melhorar')");
	        if($sql === FALSE){
			die("Não foi possivel inserir as informacoes".mysqli_error($conexao));
		}
		echo "Suas informações foram envidas com sucesso, obrigado por nos ajudar a melhorá a Connsult.";
	?>
	<br/>
	
	
</body>
</html>