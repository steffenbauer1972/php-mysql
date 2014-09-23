<h2>Galerie-Upload</h2>

<?php 
    
    include 'php/formularbibliothek.php';
    
    // prüfen, ob das Formular abgesendet wurde
    if( isset( $_POST['hochladen'])) {
        
        // wir validieren die Texteingaben
        $beschreibung = textValidieren( $_POST['beschreibung']);
        $ort = textValidieren( $_POST['ort']);
        
        // wir verarbeiten das hochgeladene Bild
        // falls das Hochladen des Bilds funktioniert hat
        if( $_FILES['datei']['error'] == 0) {

            $quelle = $_FILES['datei']['tmp_name'];
            
            // mögliches Problem - Doppelungen von Dateinamen möglich
            // Ansatz: Dateinamen durch Verwendung der MD5-Prüfsumme eindeutig machen
            $md5checksum = md5_file( $_FILES['datei']['tmp_name']);
            $ziel   = 'upload/' . $md5checksum . '_' . $_FILES['datei']['name'];

            // prüfen, ob das Bild bereits hochgeladen worden ist ...
            // falls ja, müsste der M5-Hashwert bereits in der Datenbank erfasst sein
            $link = mysql_connect( '10.10.102.145', 'www', 'linux')
                or die( mysql_error() );

            mysql_select_db( 'db_galerie' )
                or die( mysql_error() );
                
            $query =    "SELECT
                            *
                         FROM 
                            bilder
                         WHERE
                            md5checksum = '". $md5checksum ."'";
            
            $result = mysql_query( $query );
            
            // kein Datensatz mit dem Hashwert gefunden?
            if( mysql_num_rows( $result ) == 0) {
                // .. dann weiter machen

                // verschieben der Datei
                move_uploaded_file($quelle, $ziel);
                
                // neuen Datensatz in die Datenbank eintragen
                $query =    "INSERT INTO
                                bilder
                             VALUES
                             (
                                0,
                                '" . mysql_real_escape_string( $ziel ) ."',
                                '" . mysql_real_escape_string( $beschreibung ) . "',
                                now(),
                                '" . mysql_real_escape_string($ort) . "',
                                '" . $md5checksum ."',
                                '" . $_SERVER['REMOTE_ADDR'] . "'
                             )";
                
                mysql_query( $query );
                
            }            
        }
    }
    
?>

<form action="" method="post" enctype="multipart/form-data">
    
    <input type="file" name="datei" id="datei" />
    <br />
    <br />

    <label for="beschreibung">Kurzinfo zum Bild:</label>
    <br />
    <textarea name="beschreibung" id="beschreibung" cols="50" rows="5"></textarea>
    <br />
    <br />

    <label for="ort">Ort:</label>
    <br />
    <input type="text" name="ort" id="ort" />
    <br />
    <br />

    <input type="submit" name="hochladen" id="hochladen" value="hochladen" />
</form>
