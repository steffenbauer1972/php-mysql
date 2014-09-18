<!-- Kontrollstrukturen -->
<?php

    /**
     * Unterprogramme und Funktionen
     * 
     * Die Unterprogramme und Funktionen werden einheitlich mit dem Schlüsselwort function definiert.
     * Die Unterscheidung zwischen Unterprogramm und Funktion erfolgt dann einzig durch Nicht-Verwendung/Verwendung
     * der return-Anweisung. 
     * 
     * Wie auch in JAVA müssen Unterprogramme und Funktionen dann aufgerufen werden.
     * 
     */
     
    // Unterprogramm
    function rechtsUm() {

        echo "linksUm();" . PHP_EOL;
        echo "linksUm();" . PHP_EOL;
        echo "linksUm();" . PHP_EOL;
    }
    
    // Funktion
    function rechtsFrei() {

        if( true )
            return true;
        else
            return false;
    }
    
    
    // hier erfolgt der Aufruf der Prozedur
    rechtsUm();
    
    // hier erfolgt der Aufruf der Funktion
    if( rechtsFrei() )
        echo "Rechts ist wohl frei ...";
     