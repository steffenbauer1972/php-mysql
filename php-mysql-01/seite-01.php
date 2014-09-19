<!-- PHP und MySQL -->
<?php

    /**
     * Der Zugriff von PHP aus auf den Datenbankserver gestaltet sich
     * genauso, als würden wir über einen anderen Client mit dem Server arbeiten
     * 
     * (1)  Verbindung aufbauen und anmelden (mit Benutzer+Passwort)
     * 
     * (2)  eine Datenbank als aktive Datenbank festlegen
     * 
     * (3)  Abfragen an den Server senden und empfangene Daten verarbeiten
     * 
     * (4)  Verbindung abbauen
     * 
     */
    
    // Aufbau der Verbindung zum Datenbankserver (mysql_connect)
    //
    // mysql_connect liefert eine Verbindungskennung, falls der Aufbau
    // der Verbindung geklappt hat, sonst false
    //
    // sollte der Verbindungsaufbau fehlschlagen, werden wir das PHP-Skript enden
    // lassen (die, engl. stirb)
    
    $link = mysql_connect( '10.10.102.145', 'www', 'linux' ) 
                or die('Verbindungsaufbau hat nicht funktioniert: ' . mysql_error() );
    

    // eine Datenbank als aktive Datenbank auswählen (mysql_select_db)
    //
    // das Wechseln zur Datenbank kann erfolgreich sein oder fehlschlagen
    // 
    mysql_select_db('db_world')
                or die('Wechsel zu Datenbank nicht möglich: ' . mysql_error() );
     

    // Abfrage vorbereiten, dann an den Server senden (mysql_query), dann die Ergebnisse verarbeiten (mysql_fetch_array) 
    //
    // Abfrage vorbereiten
    
    $query =    "SELECT
                    *
                 FROM
                    City";
    
    // Abfrage an den Server senden
    
    $result = mysql_query( $query );
    
    // die Rückgabewerte von mysql_query können ganz unterschiedlich ausfallen
    //
    //      falls SELECT, SHOW, DESCRIBE, EXPLAIN oder andere Anweisungen gesendet worden sind, die eine 
    //      Ergebnismenge liefern, dann bekommen wir bei Erfolg eine Resourcenkennung geliefert, sonst FALSE
    //
    //      für alle anderen Anweisungen, wie INSERT, UPDATE, DELETE, DROP ..., liefert mysql_query TRUE bei Erfolg, sonst FALSE
    
    // ... in unserem Fall erwarten wir eine Resourcenkennung, über die wir an die gelieferten Daten gelangen
    if( $result ) {
        
        // die Daten befinden sich in der Ergebnismenge und müssen aus der Ergebnismenge datensatzweise
        // ausgelesen werden (mysql_fetch_array)

        // mysql_fetch_array liefert einen Datensatz, falls vorhanden, sonst FALSE
        // der wiederholte Aufruf von mysql_fetch_array liefert nacheinander alle Datensätze der Ergebnismenge 
        
        ?>
        <table border="1" >
        <?php 
            while( $datensatz = mysql_fetch_array( $result, MYSQL_ASSOC ) ) {
        ?>
            <tr>
                <td><?php echo $datensatz['ID']; ?></td>
                <td><?php echo $datensatz['Name']; ?></td>
                <td><?php echo $datensatz['CountryCode']; ?></td>
                <td><?php echo $datensatz['District']; ?></td>
                <td><?php echo $datensatz['Population']; ?></td>
            </tr>
        <?php             
            }
        ?>
        </table>
        <?php 
        
        
        
    }
