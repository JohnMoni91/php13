<?php 
/* Escreva um script PHP que use switch para classificar uma nota 
(A, B, C, D, E, F) e exiba a descrição correspondente.*/

$nota = 'A';


switch ($nota) {
    case 'A':
        echo "Você tirou A!";
        break;


    case 'B':
        echo "Você tirou B!";
        break;


    case 'C':
        echo "Você tirou C!";
        break;
       
    case 'D':
        echo "Você tirou D!";
        break;
    
    case 'E':
        echo "Você tirou E!";
        break;
        
    case 'F':
        echo "Você tirou F!";
        break;
           
    default:
        echo "Nota inválida :<";
        break;
        
    }
?>
