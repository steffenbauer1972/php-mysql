<h2>Ins Gästebuch eintragen</h2>

<?php

    include 'php/formularbibliothek.php';
    
    // falls das Formular gesendet wurde 
    if( isset($_POST['eintragen'])) {
        
        // falls die Validierung des Namens fehlschlägt, merken wir uns das 
        if( ($name = textValidieren($_POST['name'] ) ) == false )
            $error['name'] = 'Bitte Eingabe des Namens prüfen';

        // falls die Validierung der Email fehlschlägt, merken wir uns das
        if( ($email = textValidieren($_POST['email']) ) == false )
            $error['email'] = 'Bitte Eingabe der Email-Adresse prüfen';
        
        // falls die Validierung des Kommentars fehlschlägt, merken wir uns das
        if( ($kommentar = textValidieren($_POST['kommentar']) ) == false )
            $error['kommentar'] = 'Bitte Eingabe des Kommentars prüfen';
        
        
        // falls alles fehlerfrei bis hierhin, werden wir den Eintrag in die
        // Datenbank übernehmen
        if( !isset( $error )) {

            // Verbindung zum Datenbankserver herstellen 
            $link = mysql_connect( '10.10.102.145', 'www', 'linux')
                or die( mysql_error() );
            
            // Datenbank auswählen
            mysql_select_db( 'db_guestbook')
                or die( mysql_error() );
                
            // Abfrage zum Eintragen des Datensatzes formulieren
            $query =    "INSERT INTO 
                            eintraege
                         VALUES
                         (
                            0,
                            '" . mysql_real_escape_string($name) . "',
                            '" . mysql_real_escape_string($email) . "',
                            now(),
                            '" . $_SERVER['REMOTE_ADDR'] . "',
                            '" . mysql_real_escape_string($kommentar) . "'                                     
                         )";
            
            if( mysql_query( $query) ) 
                echo "Vielen Dank für Ihren Eintrag";
            else
                echo "Oopsi. Bitte prüfen Sie Ihre Eingaben";
        }
    }
?>

<form action="" method="post">

    <label for="name">Name:</label>
    <br />
    <input type="text" name="name" id="name" maxlength="80" />
    <br />
    <br />
    
    <label for="email">E-Mail:</label>
    <br />
    <input type="text" name="email" id="email" maxlength="120" />
    <br />
    <br />
    
    <label for="kommentar">Kommentar:</label>
    <br />
    <textarea cols="50" rows="5" name="kommentar" id="kommentar"></textarea>
    <br />
    <br />

    <input type="submit" id="eintragen" name="eintragen" value="eintragen" />

</form>
