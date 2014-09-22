<h2>Gästebuch</h2>
<p>Sie können sich ins Gästebuch <a href="index.php?seite=3">eintragen</a></p>
<?php

    // Verbindung zum Datenbankserver herstellen
    $link = mysql_connect( '10.10.102.145', 'www', 'linux')
        or die( mysql_error() );
    
    // Datenbank auswählen
    mysql_select_db( 'db_guestbook')
        or die( mysql_error() );
    
    // Abfrage zum Eintragen des Datensatzes formulieren
    $query = "SELECT 
                name,
                date_format(datum, '%d.%m.%Y um %H:%i Uhr') as datum,
                kommentar,
                email
             FROM
                eintraege
             ORDER BY
                datum DESC";
    
    $result = mysql_query( $query );
    
    while( $datensatz = mysql_fetch_array( $result, MYSQL_ASSOC)) {
?>
    <div class="gbe-wrapper">
        <div class="gbe-header">
            <strong><?php echo $datensatz['name']; ?></strong> schrieb am <?php echo $datensatz['datum']; ?>
        </div>
        
        <div class="gbe-content">
            <?php echo $datensatz['kommentar']; ?>
        </div>
        
        <div class="gbe-footer">
            Kontakt: <?php echo $datensatz['email']; ?>
        </div>
    </div>
<?php 
    }
    