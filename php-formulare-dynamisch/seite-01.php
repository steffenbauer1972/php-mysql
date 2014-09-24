<?php

    /**
     * Dynamische Formulare werden durch PHP generiert. Meist 
     * steckt eine Datenbasis dahinter, z.B. eine Datenbank. 
     * 
     * Denkbares Szenario: Ein Formular zum Löschen von Datenbankeinträgen
     * 
     * 
     * ToDo:    (1)     wir holen die Daten vom Datenbankserver
     *          (2)     wir lassen für jeden Datensatz ein Formularelement generieren,
     *                  über das einzelne oder mehrere Datensätze ausgewählt werden können
     *                  ( formulare + multiple elemente )
     *          (3)     wird lassen die Daten vom Datenbankserver löschen                  
     */

    $link = mysql_connect( '10.10.102.145', 'www', 'linux' )
        or die( mysql_error());
    
    mysql_select_db( 'db_world' )
        or die( mysql_error());
        
    // (1) wir holen die Daten vom Datenbankserver
    $query =    "SELECT
                    *
                 FROM
                    City";
    
    $result = mysql_query($query);
    
    
    // (2) wir lassen für jeden Datensatz ein Formularelement generieren, hier eine Checkbox
?>

    <form action="auswertung.php" method="post" >
    
        <!-- dynamisch generierte Checkboxen ... -->
<?php 
        while( $datensatz = mysql_fetch_array($result, MYSQL_ASSOC)) {
?>        
        <input type="checkbox" 
                name="chkbox[<?php echo $datensatz['ID']; ?>]" 
                id="chkbox-<?php echo $datensatz['ID']; ?>" 
                value="<?php echo $datensatz['ID']; ?>">
                
        <label for="chkbox-<?php echo $datensatz['ID']; ?>"> 
            <?php echo $datensatz['Name'] . ' ' . $datensatz['CountryCode'] . ' ' . $datensatz['Population']; ?> 
        </label>
        <br />
        
<?php 
        }
?>
        <!-- dynamisch generiert: Ende  -->
        
        
        <br />
        <br />
        <input type="submit" value="löschen" id="loeschen" name="loeschen" />
    
    </form>


    
    
    
    
    
    
    