<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //$arg1 = 54;
        //$arg2 = 22;
        //$op = "+";

        function Adicao($arg1, $arg2){
            $res = $arg1 + $arg2;
            return $res;
        }
        $valor = Adicao(120, 100);
        echo $valor;
        echo "<br>";
        
        function Subtracao($arg1, $arg2){
            $res = $arg1 - $arg2;
            return $res;
        }
        $valor = Subtracao(120, 70);
        echo $valor;
        echo "<br>";
        
        function Multiplicacao($arg1, $arg2){
            $res = $arg1 * $arg2;
            return $res;
        }
        $valor = Multiplicacao(120, 3);
        echo $valor;
        echo "<br>";
        
        function Divisao($arg1, $arg2){
            $res = $arg1 / $arg2;
            return $res;
        }
        $valor = Divisao(120, 2);
        echo $valor;
        echo "<br>";
        
       
        /*if("+" == $op){
           $res = Adicao($arg1, $arg2);
            echo $res;
        }
        if("-" == $op){
           $res = Subtracao($arg1, $arg2);
            echo $res;
        }
        if("*" == $op){
           $res = Multiplicacao($arg1, $arg2);
            echo $res;
        }
        if("/" == $op){
           $res = Divisao($arg1, $arg2);
            echo $res;
        }*/
    ?>
</body>
</html>