<?php

    /**
     * Formulardaten auswerten (I)
     */


    /**
     * je nach verwendeter Methode landen die Daten im "superglobalen" Array $_POST bzw. $_GET
     */

    // einfache Ausgabe der beiden Arrays
    var_dump( $_POST );
    var_dump( $_GET );
    
    // "komplizierte" Ausgabe der beiden Arrays in foreach-Schleifen
    foreach( $_POST as $feld => $wert )
        echo $feld . " -> " . $wert . PHP_EOL;
    
    foreach( $_GET as $feld => $wert )
        echo $feld . " -> " . $wert . PHP_EOL;
    
    // entscheiden, welches der beiden Arrays ausgewertet werden muss
    
    // Variante 1 - prüfen, ob ein Array nicht leer ist
    
    if( !empty( $_POST ) ) {
        
        foreach( $_POST as $feld => $wert )
            echo $feld . " -> " . $wert . PHP_EOL;
    }
    
    if( !empty( $_GET ) ) {
        
        foreach( $_GET as $feld => $wert )
            echo $feld . " -> " . $wert . PHP_EOL;
    }
    
    // Variante 2 - prüfen, ob die Absendeschaltfläche Bestandteil des Array ist
    
    if( isset( $_POST['absenden'] ) ) {
        
        foreach( $_POST as $feld => $wert )
            echo $feld . " -> " . $wert . PHP_EOL;
      
    }
    
    if( isset( $_GET['absenden'] ) ) {
        
        foreach( $_GET as $feld => $wert )
            echo $feld . " -> " . $wert . PHP_EOL;
      
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        
    