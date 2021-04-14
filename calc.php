<?php

$num1 = $_POST['primeiroNumero'];
$num2 = $_POST['segundoNumero'];
$opt = $_POST['selection'];


if($num1 >= 0 && $num2 >= 0){
    function somar($num1, $num2){
        return $num1+$num2;
    }
    function subtrair($num1, $num2){
        if($num1>=$num2){
            return $num1-$num2;
        }else{
            echo "O minuendo<b> (primeiro numero)</b> deve ser maior ou igual que subtraendo <b>(segundo numero)</b>.<br>";
        }
    }
    function multiplicar($num1, $num2){
        return $num1*$num2;
    }
    function dividir($num1, $num2){
        if($num1 == 0 || $num2 ==0){
            echo "Não é possivel dividir por 0 <br>";
        }else{
            return $num1/$num2;
        }   
    }

    switch($opt){
        case 'somar':
            echo "Valor da soma é: ".somar($num1, $num2);
        break;    
        case 'subtrair':
            echo "Valor da subtração é: ".subtrair($num1, $num2);
        break;
        case 'multiplicar':
            echo "Valor da multiplicação é: ".multiplicar($num1, $num2);
        break;
        case 'dividir': 
            echo "Valor da divisão é: ".dividir($num1, $num2);
        break;
    }

    }else{
        echo "Por favor, utilize números positivos.";
    }



?>