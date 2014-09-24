<h2>An-/Abmelden</h2>
<?php

    /**
     * Für das Anmelden muss der Benutzer 
     * 
     *  a)  sich identifizieren
     *  b)  beweisen, dass er tatsächlich der angegebene Benutzer ist
     *      
     *  Die eingegeben Anmeldedaten (credentials) werden gegen
     *  eine Datenbasis validiert. Bei erfolgreicher Anmeldung wird 
     *  dies in der Sitzung vermerkt. 
     *  
     *  Bei erfolgloser Anmeldung wird die Anmeldung wiederholt.
     */
     
    if( isset( $_POST['anmelden'])) {
        
        $link = mysql_connect( '10.10.102.145', 'www', 'linux')
            or die( mysql_error() );
        
        mysql_select_db( 'db_credentials' )
            or die( mysql_error() );
            
        $email = $_POST['email'];
        $pass  = md5( $_POST['pass'] );
        
        $query = "SELECT 
                    *
                  FROM
                    accounts
                  WHERE 
                        email='".$email."'
                    AND
                        pass='".$pass."'";
        
        $result = mysql_query( $query);
        
        // falls genau ein Datensatz abgefragt werden konnte ...
        if( mysql_num_rows( $result ) == 1 ) {
            
            // ... sind wir "drin"
            
            // ... und wir speichern die erfolgreiche Anmeldung und 
            // den Benutzernamen (hier Email) in der Sitzung
            $_SESSION['login'] = true;
            $_SESSION['user'] = $email;
            
        }
        else {
            
            // ... sonst sind wir "draußen"
            echo "Prüfen Sie die Anmeldedaten";
        }
    }

    // falls sich jemand abmelden will...
    if( isset( $_POST['abmelden'])) {
        
        // .. löschen wir die Sitzungsdaten
        $_SESSION = array();
    }
    
    // das Anmeldeformular anzeigen, falls der Benutzer noch nicht 
    // angemeldet ist 
    if( $_SESSION['login'] != true) {    
?>

    <form action="" method="post">
        
        <label for="email">E-Mail:</label>
        <br />
        <input type="text" name="email" id="email" />
        <br />
        <br />

        <label for="pass">Passwort:</label>
        <br />
        <input type="password" name="pass" id="pass" />
        <br />
        <br />

        <input type="submit" name="anmelden" id="anmelden" value="anmelden" />
    </form>
<?php 
    }
    else {
?>
    <form action="" method="post">
    
        <button name="abmelden" id="abmelden">
            <h2>Abmelden</h2>
        </button>
    </form>
<?php 
    }
?>     