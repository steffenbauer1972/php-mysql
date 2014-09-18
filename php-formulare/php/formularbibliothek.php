<?php

    /**
     * Funktion prüft einen Parameter, ob dieser einen nicht-leeren Wert
     * nach Trimmen enthält.
     * 
     * Es wird "false" zurückgegeben, falls die Prüfung fehlschlägt. Ansonsten
     * liefert die Funktion die "bereinigte" Zeichenkette
     */

    function textValidieren( $eingabe ) {
        
        // wenn die leere Zeichenkette geprüft wird, dann ist sofort die Prüfung zu Ende
        if( empty( $eingabe ) )
            return false;
        
        $eingabe = trim( $eingabe );
        
        // wenn nach dem Trimmen nichts überbleibt, dann ist auch Ende
        if( empty( $eingabe ) )
            return false;
        
        // und im Erfolgsfall liefern wir den bereinigten Wert 
        return $eingabe;       
    }