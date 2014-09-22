<?php

    // wurde das Formular gesendet?
    if( isset( $_POST['eintragen'])) {
        
        // Verbindung zum Datenbankserver herstellen
        $link = mysql_connect( '10.10.102.145','www','linux')
            or die(mysql_error());
        
        // Datenbank auswählen
        mysql_select_db('db_world')
            or die(mysql_error());
            

        // Daten mit mysql_real_escape_string ggfs. maskieren, um SQL-Injection vorzubeugen
        $name           = mysql_real_escape_string( $_POST['name']);
        $countrycode    = mysql_real_escape_string( $_POST['countrycode']);
        $district       = mysql_real_escape_string( $_POST['district']);
        $population     = mysql_real_escape_string( $_POST['population']);
        
        // Abfrage formulieren
        $query =    "INSERT INTO
                        City
                    VALUES
                    (
                        0, 
                        '" . $name . "',
                        '" . $countrycode . "',
                        '" . $district . "', 
                         " . $population . ")";
        
        echo $query . PHP_EOL;
        
        
        // ... und an den Server senden
        $result = mysql_query( $query );
        
        if( $result == true )
            echo 'Hat alles geklappt' . PHP_EOL;
        else
            echo 'Fehler: ' . mysql_error();
    
    }