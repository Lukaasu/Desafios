<?php

$altura = 1.70;
$peso = 70;

$altura =  ($altura * $altura);

$imc = ($peso/$altura);

if($imc <=18.5){
    echo "Sua massa corporal é " . "$imc" . " Você está abaixo do peso";
}elseif

    ($imc < 25){
        echo "Sua massa corporal é " . "$imc" . " Você está no peso ideal";
    }

else{

    echo "Você está acima do peso";
}




?>