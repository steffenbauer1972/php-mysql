<?php

    /**
     * Formulardaten auswerten (IV) Dateiuploads 
     */

    /**
     * Uploads gelangen über mehrteilige Nachrichten an den Server und 
     * werden im superglobalen Array $_FILES bereitgestellt.
     * 
     * Das Array $_FILES ist mehrdimensional und enthält
     * 
     *  a) für jeden Upload einen Eintrag ..
     *  b) .. der dann wiederum durch fünf Einträge näher beschrieben wird 
     *  
     * Es genügt also nicht allein das Array $_POST, auch das $_FILES-Array
     * muss ausgewertet werden.
     */
    

    // zunächst wäre wieder zu prüfen, ob das Formular gesendet wurde
    if( isset( $_POST['hochladen']) ) {
        
            
        // dann prüfen wir, ob das Array $_FILES Daten enthält
        if( $_FILES['upload']['error'] == 0 ) {
            
            // error = 0 --> alles i.O.

            $quelle = $_FILES['upload']['tmp_name'];
            // der Dateiname wird um eine Pfadangabe ergänzt
            $ziel   = '../uploads/' . $_FILES['upload']['name'];
            
            // in PHP gibt es zum Verarbeiten der temporären Upload-Dateiten einen
            // Funktionsaufruf move_uploaded_file( $quelle, $ziel )
            
            move_uploaded_file($quelle, $ziel);
        }       
    }    

        







    var_dump( $_POST );
    
    var_dump( $_FILES );
    