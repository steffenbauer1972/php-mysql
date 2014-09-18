<?php

    function mehrfachAuswahlValidieren( $eingabe ) {
        
        // falls nichts ausgewählt wurde, sind wir direkt fertig
        if( !isset( $eingabe ) )
            return false;
        
        // falls etwas ausgewählt wurde, müsste das ein Array sein
        if( !is_array( $eingabe ) )
            return false;
        
        // ansonsten ist alles ok
        return $eingabe;
    }
    
    
    function mehrfachCheckboxValidieren( $eingabe ) {
        
        // falls nichts ausgewählt wurde, sind wir direkt fertig
        if( !isset( $eingabe ) )
            return false;
        
        // falls etwas ausgewählt wurde, müsste das ein Array sein
        if( !is_array( $eingabe ) )
            return false;
        
        // ansonsten ist alles ok
        return $eingabe;
    }
    
    