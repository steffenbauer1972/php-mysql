<?php 
    if($_SESSION['login'] == true):
        
?>
<h2>Adminbereich</h2>
<?php

    $link = mysql_connect( '10.10.102.145', 'www', 'linux' )
        or die( mysql_error());
    
    mysql_select_db( 'db_galerie' )
        or die(mysql_error());


    // Formulardaten verarbeiten, falls notwendig
    if( isset($_POST['loeschen'])) {
        
        // falls Bilder zu löschen sind ...
        if( isset( $_POST['cb'])) {
            
            // ... Bilder aus der DB und von der Festplatte löschen
            $bilder = $_POST['cb'];
            
            foreach( $bilder as $id => $datei ) {
                
                // Bild aus der DB löschen
                $query  =   "DELETE FROM
                                bilder
                             WHERE
                                id=" . $id;
                
                mysql_query( $query );
                
                // Bild von der Festplatte löschen
                unlink( $datei );
            }            
        }
    }
        
    $query =    "SELECT
                    *
                 FROM
                    bilder
                 ORDER BY 
                    datum DESC";
    
    $result = mysql_query( $query );
    
    // für jedes Bild ein Formularelement generieren
?>

    <form action="" method="post">
        
        <!-- dynamisch generiert: Anfang -->
<?php 
        while( $datensatz = mysql_fetch_array( $result, MYSQL_ASSOC)) {
?>        
        <div class="thumbnail">
            <img src="<?php echo $datensatz['name'];?>" width="80" height="80"/>
            
            <input type="checkbox" 
                    name="cb[<?php echo $datensatz['id'];?>]" 
                    id="cb-<?php echo $datensatz['id'];?>" 
                    value="<?php echo $datensatz['name'];?>" />
                     
            <label for="cb-<?php echo $datensatz['id'];?>">löschen</label>
        </div>
<?php 
        }
?>
        <!-- dynamisch generiert: Ende -->
    
        <br />
        <br />
        <input type="submit" name="loeschen" id="loeschen" value="löschen" />
    </form>
<?php 
    else:
?>
    <h2>Anmeldung erforderlich</h2>
<?php 
    endif;
?>

    
    
    