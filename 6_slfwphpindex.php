<?php

/* ESERCITAZIONE SELFWORK NUMERO 6 MODULO 8 PHP - AULAB */
/* Traccia: Stampare un elenco di numeri fino a 100. Se i numeri sono multipli di 3 Sostituire il numero con la scritta: PHP, se sono multipli di 5 stampare: Javascript, se il numero e sia multiplo di 3 che di cinque e quindi multiplo di 15 stampare la parola accademy. */

for ($i=1; $i <= 100; $i++) {
    switch ($i) {
          case $i % 15 == 0:
            echo "Hackademy \n";
            break;
        case $i % 3 == 0:
            echo "PHP \n";
            break;
        case $i % 5 == 0:
            echo "Javascript \n";
            break;
        default:
            echo "$i \n";        
            break;
    }  
}

?>