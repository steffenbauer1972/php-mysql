<?php

    /**
     * Paginatoren stellen Mengen bildschirmseitenweise dar, z.B.
     * - Suchergebnisse,
     * - Bildergalerien,
     * - Gästebucheinträge
     * 
     * Wir wollen die Paginatoren anhand der Tabelle City aus der Datenbank
     * db_world kennenlernen. Die Tabelle City hat etwa 4080 Einträge, die
     * nicht alle gleichzeitig auf eine Bildschirmseite passen und deshalb
     * seitengerecht (inkl. Navigation) aufbereitet werden müssten
     */

    mysql_connect( '10.10.102.145', 'www', 'linux')
        or die( mysql_error() );
        
    mysql_select_db( 'db_world')
        or die( mysql_error() );

    // Abfrage liefert etwa 4080 Datensätze ... viel zu viel ;)
//     $query =    "SELECT 
//                     * 
//                  FROM 
//                     City";
   
//     $result = mysql_query( $query );
    
//     while( $datensatz = mysql_fetch_array($result, MYSQL_ASSOC)) {
//         foreach( $datensatz as $wert )
//             echo $wert . ' ';
//         echo PHP_EOL;
//     }
    
    
    /**
     * Grundlage für bildschirmseitenweise Ausgeben von Daten ist die Limit-Direktive, die mit Offset und Anzahl
     * gefüttert, eine Teilmenge der Gesamtergebnisse liefert.
     * 
     * Über eine geeignete Navigation müsste sichergestellt werden, dass die Anzahl der gleichzeitig darzustellenden
     * Datensätze konfigurierbar ist und durch die Gesamtdatenmenge geblättert werden kann.
     * 
     * << prev >>   zeigt die vorherige Bildschirmseite (falls möglich)   
     * << next >>   zeigt die nächste Bildschirmseite (falls möglich)
     * 
     * +------------------+---+
     * | 10, 20, 50 , 100 | v |     erlaubt die Auswahl der Anzahl
     * +------------------+---+
     * 
     * 
     * Wie können Anfang und Ende seitens des Programms "entdeckt" werden?
     * 
     * Limit 0,  ... wäre der Anfang
     * Limit N,  ... C = Anzahl der Datensätze, z.B. 4096 
     *               P = Anzahl der Bildschirmdatensätze, z.B. 10
     *               
     *               wenn C/P * P + P < C, dann können wir noch weiterblättern
     *               
     *               4096 / 10 = 409    (int-Arithemtik)
     *               409  * 10 = 4090   -----------------------> wenn wir auf Seite 409 sind, dann sind wir auf der letzten Seite
     *               4090 + 10 > 4096   (wir können also nicht weiterblättern)  
     *               
     *               
     *               4096 / 25 = 163
     *               163  * 25 = 4075   -----------------------> wenn wir auf Seite 163 sind, dann sind wir auf der letzten Seite
     *               4075 + 25 > 4096   (wir können also nicht weiterblättern)
     * 
     */    
        
        
    // hole die Nummer der darzustellenden Bildschirmseite aus der URL oder verwende den Standardwert 0    
    $offset = (isset($_GET['offset'])) ? $_GET['offset'] : 0;

    // hole die Anzahl der gleichzeitig darzustellenden Datensätze aus der URL oder verwende Standardwert 10
    $anzahl = (isset($_GET['anzahl'])) ? $_GET['anzahl'] : 10 ; 
    
    
    
    // eine Bildschirmseite zurück?
    if( $offset > 0 )
        $prev = $offset - 1;    // wir können noch zurück blättern
    else
        $prev = 0;              // wir sind auf der ersten Bildschirmseite
    
    // eine Bildschirmseite weiter?
    $query = "SELECT 
                count(*) 
              FROM 
                City";
    
    $result = mysql_query( $query );
    // list weist Arrayausdrücke skalaren Variablen einer Liste zu
    list( $count ) = mysql_fetch_array( $result );
        
    // wenn es noch eine weitere Bildschirmseite gibt ... 
    // (maximale Bildschirmseite > aktuelle Bildschirmseite)
    if( floor($count / $anzahl)  > $offset )
        $next = $offset + 1;
    else
        $next = $offset;
    
    
?>
    <a href="seite-01.php?offset=<?php echo $prev;?>&anzahl=<?php echo $anzahl; ?>"> zurück </a> 
    &middot;
    <a href="seite-01.php?offset=<?php echo $next;?>&anzahl=<?php echo $anzahl; ?>"> weiter </a>
    <br />
    <br />
    <!-- variable Anzahl der Datensätze -->
    <a href="seite-01.php?offset=0&anzahl=10"> 10 </a>
    &middot;
    <a href="seite-01.php?offset=0&anzahl=25"> 25 </a>
    &middot;
    <a href="seite-01.php?offset=0&anzahl=50"> 50 </a>
    <br />
    <br />
    
<?php 
    // Abfrage für den Paginator
    $query =    "SELECT 
                    * 
                 FROM 
                    City
                 LIMIT ". $offset*$anzahl .",". $anzahl ;
    
    $result = mysql_query( $query );
    
    while( $datensatz = mysql_fetch_array($result, MYSQL_ASSOC)) {
        foreach( $datensatz as $wert )
            echo $wert . ' ';
        echo '<br />' . PHP_EOL;
    }
    
    
    
    
    
    