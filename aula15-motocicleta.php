<?php

//vincular os arq
include("aula15-veiculo.php");
//include_once("aula15-veiculo.php"); - nao é taao fatal dramatico
//require("aula15-veiculo.php"); - se acontecer algum erro ele trava o servidor
//require_once("aula15-veiculo.php"); - se acontecer algum erro ele trava o servidor

//objeto/instancia
$moto = new Veiculo();
echo "Código: " . $moto->id = 2;
echo "<br>";
echo "Fabricante: " . $moto->fabricante= "Yamaha";
echo "<br>";
echo "Modelo: " . $moto->modelo= "MT600";
echo "<br>";
echo "Tipo: " . $moto->tipo= "Moto";
echo "<br>";
echo "Ano de fabricação: " . $moto->ano_fab= "2021";
echo "<br>";
echo "Ano do modelo: " . $moto->ano_mod= "2022";
echo "<br>";
echo "Cor: " . $moto->cor= "Verde";
echo "<br>";
echo "Combustível: " . $moto->combustivel= "Flex";
echo "<br>";
$moto->Destino("Sorocaba", "Santos");
$moto->Consumo();
//mostrar o valor na tela
//echo "<br>" .  $moto->id;
?>
