<?php

    include 'formularbibliothek.php';
    
    /**
     * Formulardaten auswerten (II) (Validierung)
     */

    /**
     * die einzelnen Formularelemente qualifiziert untersuchen
     */

    // Texteingaben könnten als Pflichteingaben vergessen worden sein
    // notwendige Prüfung:
    //      isset - wurde die Information überhaupt übermittelt
    //      empty - wurde etwas in das Textfeld eingetragen
    //                  alternativ Vergleich mit der leeren Zeichenketten
    //      trim  - unnütze Whitespace-Zeichen sind zu entfernen
    //                  ____eingabe____         ( _ => Whitespace (Leerzeichen, Tabulator, ..)
    //                      eingabe
    
    // prüfen, ob das Formular gesendet worden ist
    if( isset( $_POST['absenden'] ) ) {
        
        // wir lassen $_POST['benutzer'] validieren
        if( $benutzer = textValidieren( $_POST['benutzer'] ) )
            echo 'IceHockey!';
        else 
            echo 'Fehler bei der Eingabe';
    }
    
    