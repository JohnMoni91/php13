<?php 
/*Escreva um script PHP que use switch para exibir
o nome do dia da semana com base em um número (1 para domingo, 2 para segunda-feira, etc.).*/

$dias=7;


switch ($dias) {
    case 1:
        echo "Domingo";
        break;


    case 2:
        echo "Segunda";
        break;


    case 3:
        echo "Terça";
        break;
       
    case 4:
        echo "Quarta";
        break;
    
    case 5:
        echo "Quinta";
        break;
        
    case 6:
        echo "Sexta";
        break;
           
    case 7:
        echo "Sabado";
        break;


    default:
        echo "Numero invalido :<";
        break;
        
}
?>