<?php

    include 'formularbibliothek.php';

    /**
     * Formulardaten auswerten (III) Mehrfachauswahl
     */

    // prüfen, ob das Formular gesendet worden ist
    
    if( isset( $_POST['absenden'] )  ) {
        
        
        // wir lassen die Mehrfachauswahl validieren
        if( $optionen = mehrfachAuswahlValidieren( $_POST['auswahl']))
            echo 'Sie haben ausgewählt: ' . implode( ', ', $optionen ) . PHP_EOL;
        else 
            echo 'Sie haben leider nichts gewählt!' . PHP_EOL;
        
        
        // wir lassen die Checkboxen validieren (Variante: automatische Indizierung)
        if( $checkboxenVarianteA = mehrfachCheckboxValidieren( $_POST['chkbox']))
            echo 'Sie haben ausgewählt: ' . implode( ', ', $checkboxenVarianteA ) . PHP_EOL;
        else 
            echo 'Sie haben leider nichts ausgewählt' . PHP_EOL;
        
        
        // wir lassen die Checkboxen validieren (Variante: manuelle Indizierung)
        if( $checkboxenVarianteB = mehrfachCheckboxValidieren( $_POST['cb']))
            echo 'Sie haben ausgewählt: ' . implode( ', ', $checkboxenVarianteB ) . PHP_EOL;
        else 
            echo 'Sie haben leider nichts ausgewählt' . PHP_EOL;
        
        
        // Vergleich der beiden Checkboxvarianten bzgl. der Indizierung
        foreach( $checkboxenVarianteA as $index => $wert ) 
            echo "[" . $index . "]: " . $wert . PHP_EOL;
        
        foreach( $checkboxenVarianteB as $index => $wert ) 
            echo "[" . $index . "]: " . $wert . PHP_EOL;
        
    }
        
    
    
    