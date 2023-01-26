<?php
require "nusoap.php";

$clientcalc = new nusoap_client("http://www.dneonline.com/calculator.asmx?WSDL", 'wsdl');

$a = 19283;
$b = 993;

$resultado = $clientcalc->call("Add", array("intA" => "$a", "intB" => "$b"));

?>

<div class='caixa'>
	<h2>Calculo de Soma</h2>
	<?php echo "<h1>".$resultado["AddResult"]."</h1>"; ?>
 
</div>