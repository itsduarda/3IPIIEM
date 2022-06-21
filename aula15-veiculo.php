<?php
class Veiculo{
    //visibilidade pode ser:
        //public
        //private
        //protected
    public $id;
    public $fabricante;
    public $modelo;
    public $tipo;
    public $ano_fab;
    public $ano_mod;
    public $cor;
    public $combustivel;

    //iremos add métodos (função)

    public function Destino ($partida, $chegada){
        echo "Destino: " . $chegada . "/ Origem: " . $partida;
    }

    public function Consumo(){
        echo "<br> Gasto por km: ";
    }
} //fim de classe

//iremos criar um objeto/instancia de uma classe(base)

/*$obj01 = new Veiculo();
//algumas linguagens usa ponto(.) p ter acesso aos campos/atributos e metodos, porem o PHP USA UMA SETA(->)
//acessar o campo $id
echo "Código: " . $obj01->id= 001;
echo "<br>";
echo "Fabricante: " . $obj01->fabricante= "Yamaha";
echo "<br>";
echo "Modelo: " . $obj01->modelo= "MT600";
echo "<br>";
echo "Tipo: " . $obj01->tipo= "Moto";
echo "<br>";
echo "Ano de fabricação: " . $obj01->ano_fab= "2021";
echo "<br>";
echo "Ano do modelo: " . $obj01->ano_mod= "2022";
echo "<br>";
echo "Cor: " . $obj01->cor= "Verde";
echo "<br>";
echo "Combustível: " . $obj01->combustivel= "Flex";
echo "<br>";
$obj01->Destino("Sorocaba", "Santos");
$obj01->Consumo();
//mostrar o valor na tela
//echo "<br>" .  $obj01->id;*/
?>