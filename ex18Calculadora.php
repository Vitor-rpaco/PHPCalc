<?php

//Verifica se o método é POST e coleta as variáveis do FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacao = $_POST["op"];
    $numero1val = 0;
    $numero2val = 0;
    
    //Faz verificação de que variável recebida é numérica
    if ($numero1 != "" and is_numeric($numero1)) {
        $numero1val = 1;
    }
    if ($numero2 != "" and is_numeric($numero2)) {
        $numero2val = 1;
    }
    if($operacao == "quadrado"){
        $numero2val = 1;
    }
}

//************************CÁLCULOS***************************

function soma($a, $b){
    return $a + $b;
}

function multi($a, $b){
    return $a * $b;
}

function sub($a, $b){
    return $a - $b;
}

function div($a, $b){
    return $a / $b;
}

function quadrado($a){
    return ($a * $a);
}

function raizQuadrada($a){
    return sqrt($a);
}

function potencia($a, $b){

    return pow($a, $b);
}

function porcent($a, $b){

    return (($a * $b)/100);
}

function rest($a, $b){

    return ($a % $b);
}
//***********************************************************

//Faz operação selecionada SE valores do FORM forem numéricos
if($numero1val == 1 and $numero2val == 1){

    switch($operacao){
        case "soma":
            $result = soma($numero1, $numero2);
            echo "$numero1 + $numero2 = $result";
            break;

        case "multi":
            $result = multi($numero1, $numero2);
            echo "$numero1 * $numero2 = $result";
            break;

        case "sub":
            $result = sub($numero1, $numero2);
            echo "$numero1 - $numero2 = $result";
            break;

        case "div":
            $result = div($numero1, $numero2);
            echo "$numero1 / $numero2 = $result";
            break;

        case "quadrado":
            $result = quadrado($numero1);
            echo "$numero1 ^ 2 = $result";
            break;

        case "raiz":
            $result = raizQuadrada($numero1);
            echo "raiz de $numero1 = $result";
            break;

        case "potenciacao":
            $result = potencia($numero1, $numero2);
            echo "$numero1 ^ $numero2 = $result";
            break;

        case "porcent":
            $result = porcent($numero1, $numero2);
            echo "$numero2% de $numero1 = $result";
            break;

        case "resto":
            $result = rest($numero1, $numero2);
            echo "$numero1 / $numero2 tem resto = $result";
            break;

        default:
            echo "Opa, inválido";
            break;
    }   
}

?>
<!--******************************************************-->
<html>
    <body>
        <button onclick="redirect()">Retornar</button>
    </body>
    <script>
        function redirect(){
            location.assign("/PHPCalc/form.html");
        }
    </script>
</html>