<?php

$paraules = array("nena", "norma", "mona", "menjar"); 

if(contenenMateixCaracter($paraules, "z")){
    echo 'Totes les paraules contenen el mateix caràcter.';
}else{
    echo 'No totes les paraules contenen el mateix caràcter.'; 
}

function contenenMateixCaracter($paraules, $caracter){
    foreach($paraules as $paraula){
        if(strpos($paraula, $caracter)===false){
            return false;
        }
    }
    return true; 
}

?>