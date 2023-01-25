<?php

	require "nusoap.php";
	$client = new nusoap_client("http://localhost/aulasoap/service.php?wsdl", 'wsdl');
	$nomeLivro = $_REQUEST['nomeLivro'];
	$preco = $client->call("preco",array('nome' => "$nomeLivro"));

?>

<html>
	<body>
		<style type="text/css">
			.box{
				padding: 20px;
				background: #FFF;
				box-shadow: 0px 10px #333;
				border: 1px solid #111;
				margin: 0 auto;
				margin-top: 50px;
				text-align: center;
				border-radius: 10px;
				width: 300px;
			}
		</style>
		<div class='box'>
			<h2>Preço do livro <?php echo $nomeLivro.":";?></h2>
			<h1> <?php echo $preco;?></h1>
		</div>
	</body>
</html>