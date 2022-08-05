<?php
    include("Pessoa.php");
    
    //objeto/instância = reutilização das informações
    //quando criar um novo objeto ($pes01), vai cadastrar as info
    $pes01 = new Pessoa(001, "harry", "12.121.213-1", "122.345.678.22", "Masculino", "01/02/1994", "harry@gmail.com", "11998765432", "Branco", "Cantor");

    //exibir os valores
    echo "Código: " . $pes01->id . "<br>";
    echo "Nome: " . $pes01->nome . "<br>";
    echo "RG: " . $pes01->rg . "<br>";
    echo "CPF: " . $pes01->cpf . "<br>";
    echo "Sexo: " . $pes01->sexo . "<br>";
    echo "Data Nascimento: " . $pes01->dataNasc . "<br>";
    echo "Email: " . $pes01->email . "<br>";
    echo "Celular: " . $pes01->celular . "<br>"; 
    echo "Etnia: " . $pes01->etnia . "<br>";
    echo "Ocupação: " . $pes01->ocupacao . "<br>";
?>
