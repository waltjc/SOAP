<?php

require "nusoap.php";

$clientcep = new nusoap_client("https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl", 'wsdl');
$resultadoCep = $clientcep->call("consultaCEP", array("cep" => "56000000"));

?>
<style type="text/css">
	.caixa{
		margin: 0 auto; 
		background: #f2f2f2; 
		padding: 50px; 
		width:  300px;
		min-height: 100px;
		height: auto;
		text-align: center;
		border-radius:  10px;
		box-shadow: 1px 1px 50px #b3b3b3;
		border:  1px solid #FFF;
		margin-top:  50px;
	}
</style>
<div class='caixa'>
	<h2>Busca CEP</h2>
	<?php 
			echo "<hr><h3>CEP ".$resultadoCep["return"]["cep"]."</h3>"; 
			echo "<b>Rua:</b>".$resultadoCep["return"]["end"]; 
			echo "<br><b>Bairro:</b>".$resultadoCep["return"]["bairro"]; 
			echo " <b>Cidade:</b>".$resultadoCep["return"]["cidade"]."/".$resultadoCep["return"]["uf"]; 
			

	?>
 
</div>