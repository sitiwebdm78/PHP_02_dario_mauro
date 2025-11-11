<?php
/* ESERCITAZIONE NUMERO 5 MODULO 8 AULAB PHP */

/* ESERCIZIO SVOLTO CON IL CICLO "for" */

    $numeri = [
        7, 78, 49, 52, 74, 13, 8, 5, 15, 3, 39
    ];

    $lungvarnumeri = count($numeri);
    $totalepari = 0;
    $contatorepari = 0;
    $contatoredispari = 0;
    $totaledispari = 0;

    for ($i=0; $i < $lungvarnumeri ; $i++) {   
        if ($numeri[$i] % 2 == 0){
            $totalepari += $numeri[$i];
            $contatorepari++;
    }
}
    echo "La media dei numeri pari è: " . $totalepari/$contatorepari . " \n";

/* ESERCIZIO SVOLTO CON IL "foreach" SULLA MEDIA DEI NUMERI DISPARI  */

    foreach ($numeri as $numero) {
        if ($numero % 2 != 0){
            $totaledispari += $numero;
            $contatoredispari++;
        }
    }

     echo "La media dei numeri Dispari è: " . $totaledispari/$contatoredispari;
    
?>