<?php

    /**
     * Übung: Paginator und die Tabelle db_world.Country
     * 
     */
    mysql_connect( '10.10.102.145', 'www', 'linux')
        or die( mysql_error() );
        
    mysql_select_db( 'db_world')
        or die( mysql_error() );

        
    
    // hole die Nummer der darzustellenden Bildschirmseite aus der URL oder verwende den Standardwert 0    
    $offset = (isset($_GET['offset'])) ? $_GET['offset'] : 0;

    // hole die Anzahl der gleichzeitig darzustellenden Datensätze aus der URL oder verwende Standardwert 10
    $anzahl = (isset($_GET['anzahl'])) ? $_GET['anzahl'] : 10 ; 

    
    
    // eine Bildschirmseite zurück?
    if( $offset > 0 )
        $prev = $offset - 1;    // wir können noch zurück blättern
    else
        $prev = 0;              // wir sind und bleiben auf der ersten Bildschirmseite
    
    
    
    // eine Bildschirmseite weiter?
    $query = "SELECT 
                count(*) 
              FROM 
                Country";
    
    $result = mysql_query( $query );
    
    // list weist Arrayausdrücke skalaren Variablen einer Liste zu
    // s.a. http://de1.php.net/manual/de/function.list.php
    list( $count ) = mysql_fetch_array( $result );
        
    // wenn es noch eine weitere Bildschirmseite gibt ... 
    // (maximale Bildschirmseite > aktuelle Bildschirmseite)
    if( floor($count / $anzahl)  > $offset )
        $next = $offset + 1;
    else
        $next = $offset;
    
    
?>
    <a href="seite-02.php?offset=<?php echo $prev;?>&anzahl=<?php echo $anzahl; ?>"> zurück </a> 
    &middot;
    <a href="seite-02.php?offset=<?php echo $next;?>&anzahl=<?php echo $anzahl; ?>"> weiter </a>
    <br />
    <br />
    <!-- variable Anzahl der Datensätze -->
    <a href="seite-02.php?offset=0&anzahl=10"> 10 </a>
    &middot;
    <a href="seite-02.php?offset=0&anzahl=25"> 25 </a>
    &middot;
    <a href="seite-02.php?offset=0&anzahl=50"> 50 </a>
    <br />
    <br />
    
<?php 
    // Abfrage für den Paginator
    $query =    "SELECT 
                    name, 
                    continent, 
                    population 
                 FROM 
                    Country
                 LIMIT ". $offset*$anzahl .",". $anzahl ;
    
    $result = mysql_query( $query );

?>
    <table width="400">
<?php  
    while( $datensatz = mysql_fetch_array($result, MYSQL_ASSOC)) {
?>
        <tr>
<?php 
        foreach( $datensatz as $wert )
            echo '<td>' . $wert . '</td>';
?>
        </tr>
<?php     
    }
?>
    </table>
    