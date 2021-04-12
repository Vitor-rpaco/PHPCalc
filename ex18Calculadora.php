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
}

//Faz operação selecionada SE valores do FORM forem numéricos
if($numero1val == 1 and $numero2val == 1){

    switch($operacao){
        case "soma":
            $result = $numero1 + $numero2;
            echo "$numero1 + $numero2 = $result";
            break;

        case "multi":
            $result = $numero1 * $numero2;
            echo "$numero1 * $numero2 = $result";
            break;

        case "sub":
            $result = $numero1 - $numero2;
            echo "$numero1 - $numero2 = $result";
            break;

        case "div":
            $result = $numero1 / $numero2;
            echo "$numero1 / $numero2 = $result";
            break;

        default:
            echo "Opa, inválido";
            break;
    }   
}

?>

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