<h2>Administration Gästebuch</h2>
<?php

    /**
     * Verwaltung der Einträge/Löschen unliebsamer Einträge aus dem Gästebuch
     * 
     */

    $link = mysql_connect ( '10.10.102.145', 'www', 'linux' )
        or die( mysql_error());
    
    mysql_select_db( 'db_guestbook' )
        or die( mysql_error());

    // Formulardaten verarbeiten, falls die gepostet worden sind
    if( isset($_POST['loeschen'])) {
        
        // Einträge löschen, falls welche angeklickt worden sind
        if( isset( $_POST['cb'] )) {
            
            $eintraege = $_POST['cb'];
            
            foreach( $eintraege as $id ) {
                
                $query =    "DELETE FROM 
                                eintraege 
                             WHERE
                                id=" . $id;
                
                mysql_query( $query );
            }
        }        
    }
    
    $query = "SELECT 
                *
             FROM 
                eintraege
             ORDER BY
                datum DESC";
   
    $result = mysql_query( $query );
    // für jeden einzelnen Eintrag ein Formularelement generieren lassen, hier wieder eine Checkbox
?>

    <form action="" method="post">
        
        <!-- dynamisch generiert: Anfang -->
<?php 
        while( $datensatz = mysql_fetch_array( $result, MYSQL_ASSOC)) {
?>        
        
        <input type="checkbox" 
            name="cb[<?php echo $datensatz['id']; ?>]" 
            id="cb-<?php echo $datensatz['id']; ?>" 
            value="<?php echo $datensatz['id']; ?>" />
            
        <label for="cb-<?php echo $datensatz['id']; ?>">
            <?php echo $datensatz['datum'] . ' : ' . $datensatz['kommentar']; ?></label>
        <br />
<?php 
        }
?>        
        <!-- dynamisch generiert: Ende -->
        
        <br />
        <br />
        <input type="submit" value="löschen" id="loeschen" name="loeschen" />
        
    </form>
   
