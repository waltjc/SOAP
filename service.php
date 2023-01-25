<?php
    require "nusoap.php";
    require "functions.php";

    $server = new nusoap_server();

    $server->configureWSDL("consulta", "urn:consulta");
    $server->register(
        "preco", //nome da função
        array("nome"=>"xsd:string"), //entradas
        array("result"=>"xsd:float") //saídas
    );
    $server->register(
        "teste", //nome da função
        array("numero"=>"xsd:integer"), //entradas
        array("return"=>"xsd:string") //saídas
    );
    $server->service(file_get_contents("php://input"));
?>