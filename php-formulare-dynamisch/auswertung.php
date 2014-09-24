<?php

    // (3) wir lassen die Daten vom Datenbankserver löschen
    
    // prüfen, ob das Formular abgesendet wurde
    if( isset($_POST['loeschen'])) {
        
        $link = mysql_connect( '10.10.102.145', 'www', 'linux')
            or die( mysql_error());
        
        mysql_select_db( 'db_world')
            or die( mysql_error());

        if( isset($_POST['chkbox'])) {
            // die zu löschenden Städte "stecken" in den Checkboxen
            $cities =  $_POST['chkbox'];
    
            // für jede angeklickte Checkbox ...
            foreach( $cities as $id ) {
                
                // ... lassen wir den Eintrag aus der Tabelle City löschen
                $query =    "DELETE FROM
                                City
                             WHERE
                                ID=" . $id;
                
                mysql_query( $query );
            }
        }
    }
    
    // zum Schluss leiten wir wieder zurück zur Seite-01
    header('Location: seite-01.php');
    
    
    
    
    
    