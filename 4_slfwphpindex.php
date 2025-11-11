<?php

/* ESERCIZIO PHP NUMERO 4 DEL MODULO 8 AULAB PHP */

    $users = [
    ['nome' => 'Davide', 'cognome' => 'Cariola', 'genere' => 'NB'],
    ['nome' => 'Fabrizio', 'cognome' => 'Fedeli', 'genere' => 'M'],
    ['nome' => 'Lucia', 'cognome' => 'Verdi', 'genere' => 'F'],
    ['nome' => 'Christian', 'cognome' => 'Pasini', 'genere' => 'M'],
    ['nome' => 'Daniela', 'cognome' => 'Havana', 'genere' => 'F'],

    ];

    /* UTILIZZO DEL foreach PER CICLARE CIASCUN ELEMENTO DELL'ARRAY AL FINE DI STAMPARE A VIDEO LA FRASE FORNITA DALLA TRACCIA DELL'ESERCITAZIONE  */

    foreach($users as $user){
        if ($user['genere'] == 'M'){
            echo "Buongiorno Sig. " . $user['nome'] . " " . $user['cognome'] . " \n";
        
        }elseif($user['genere'] == 'F'){
            echo "Buongiorno Sig.ra " . $user['nome'] . " " . $user['cognome'] . " \n";
        }else{
            echo "Buongiorno " . $user['nome'] . " " . $user['cognome'] . " \n";
        }
    }
?>