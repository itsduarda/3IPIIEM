<?php
include("aula15-veiculo.php");

$aviao = new Veiculo();
echo "Código: " . $aviao->id = 3;
echo "<br>";
echo "Fabricante: " . $aviao->fabricante= "EADS Airbus";
echo "<br>";
echo "Modelo: " . $aviao->modelo= "Airbus A380";
echo "<br>";
echo "Tipo: " . $aviao->tipo= "Avião";
echo "<br>";
echo "Ano de fabricação: " . $aviao->ano_fab= "2018";
echo "<br>";
echo "Ano do modelo: " . $aviao->ano_mod= "2020";
echo "<br>";
echo "Cor: " . $aviao->cor= "Branco";
echo "<br>";
echo "Combustível: " . $aviao->combustivel= "Querosene de aviação";
echo "<br>";
$aviao->Destino("Londres", "São Paulo");
$aviao->Consumo();
?>