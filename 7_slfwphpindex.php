<?php

    function lungMinpsw($stringa){
        if(strlen($stringa) >= 8){
            return true;
        }
        echo "La password deve avere una lunghezza di almeno 8 caratteri. \n";
        return false;     
    }

    function presenzaMaiuscola($stringa){
        for ($i=0; $i < strlen($stringa); $i++) { // Usiamo il ciclo for, perchè il foreach si usa con gli oggetti tipo gli array.
            if(ctype_upper($stringa[$i])){
                return true;
            }
        }
        echo "La Password deve contenere almeno un lettera Maiuscola! \n";
        return false;
    }

    function presenzaNumero ($stringa){
        for ($i=0; $i < strlen($stringa); $i++) { 
            if(is_numeric($stringa[$i])){
                return true;  
            }      
        }
        echo "La Password deve contenere almeno un numero. \n";
        return false;
    }

    function carattereSpeciale($stringa){
        $specialCharcter = ['|', '£', '$', '%', '&', '/', '(', ')', '=', '?', '!', '^', '@', '-', '*', '#', '<', '>', '_', '.'];
        for ($i=0; $i < strlen($stringa); $i++) { 
            if(in_array($stringa[$i], $specialCharcter)){
                return true;  
            }      
        }
        echo "La password deve contenere almeno un carattere speciale. \n";
        return false;
    }

    function controllopsw($stringa){
        $primareg = lungMinpsw($stringa);
        $secondareg = presenzaNumero($stringa);
        $terzareg = presenzaMaiuscola($stringa);
        $quartareg = carattereSpeciale($stringa);

        if($primareg && $secondareg && $terzareg && $quartareg){
            echo " La password è valida \n";
        }
        return $primareg && $secondareg && $terzareg && $quartareg;
    }
    
    do {
        $password = readline("Inserisci la Password. \n");
    } while (!controllopsw($password));
?>