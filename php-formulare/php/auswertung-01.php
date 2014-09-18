<?php

    include 'formularbibliothek.php';
    
    /**
     * Formulardaten auswerten (II) (Validierung)
     */

    /**
     * die einzelnen Formularelemente qualifiziert untersuchen
     */

    
    // prüfen, ob das Formular gesendet worden ist
    if( isset( $_POST['absenden'] ) ) {
        // Texteingaben könnten als Pflichteingaben vergessen worden sein
        // notwendige Prüfung:
        //      isset - wurde die Information überhaupt übermittelt
        //      empty - wurde etwas in das Textfeld eingetragen
        //                  alternativ Vergleich mit der leeren Zeichenketten
        //      trim  - unnütze Whitespace-Zeichen sind zu entfernen
        //                  ____eingabe____         ( _ => Whitespace (Leerzeichen, Tabulator, ..)
        //                      eingabe
        
        // wir lassen $_POST['benutzer'] validieren
        if( $benutzer = textValidieren( $_POST['benutzer'] ) )
            echo 'Benutzername ist ok' . PHP_EOL;
        else 
            echo 'Fehler: Benutzername nicht eingegeben' . PHP_EOL;
        

        // wir lassen $_POST['passwort'] validieren
        if( $passwort = textValidieren( $_POST['passwort']))
            echo 'Passwort ist ok' . PHP_EOL;
        else
            echo 'Fehler: PW nicht eingegeben' . PHP_EOL;
        
        
        // wir lassen $_POST['kommentar'] validieren
        if( $kommentar = textValidieren( $_POST['kommentar']))
            echo 'Kommentar ist ok' . PHP_EOL;
        else
            echo 'Fehler: Kommentar nicht eingegeben' . PHP_EOL;
        
        
        // Auswahllisten könnten als Pflichteingabe vergessen woden sein
        // notwendige Prüfungen:
        //      auf gültigen Wert - üblicherweise wird die erste Option mit einem "ungültigen" Wert belegt, z.B. 0
        //                          enthält die Auswahl dann diesen Wert, hat der Benutzer die Eingabe vergessen    
        
        // wir lassen $_POST['auswahl'] validieren
        if( $auswahl = auswahlValidieren( $_POST['auswahl'] ))
            echo 'Auswahl ist ok' . PHP_EOL;
        else
            echo 'Fehler: Auswahl nicht eingegeben' . PHP_EOL;       
        
        
        // Radiobuttons können bei umsichtiger Formulargestaltung keine Eingabefehler produzieren, im Sinne
        // von "fehlender Eingabe". 
        // 
        // ggfs. prüft man mit isset, ob ein Radiobutton selektiert worden ist
        
        // wir lassen $_POST['anrede'] prüfen
        if( $anrede = radioCheckboxValidieren( $_POST['anrede'] ))
            echo 'Anrede ist ok' . PHP_EOL;
        else 
            echo 'Fehler: Anrede nicht ausgewählt' . PHP_EOL;
        
        
        // Checkboxen können als Pflichteingabe vergessen worden sein
        // notwendige Prüfungen:
        //      isset   - wurde die Checkbox *nicht* angeklickt, fehlt der Eintrag im $_POST-Feld 
        
        if( $agb = radioCheckboxValidieren( $_POST['agb']))
            echo 'AGB ist ok' . PHP_EOL;
        else
            echo 'Fehler: AGB müssen gelesen und akzeptiert werden' . PHP_EOL;
        
        var_dump( $_POST );
    }
    
    