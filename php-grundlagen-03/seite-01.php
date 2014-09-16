<!-- Kontrollstrukturen -->
<?php

    /**
     * Der Programmfluss läßt sich steuern:
     * 
     *  a)  bedingte Anweisung mit und ohne Alternative
     *  
     *  b)  Mehrfachauswahl
     *  
     *  c)  Schleifen, kopf- und fußgesteuert 
     * 
     *  d)  Unterprogramme (hier in PHP Unterprogramm und Funktion in einem vereint)
     *  
     */

    /**
     * bedingte Anweisung   if( <Bedingung> )
     * 
     */

     // if mit den aussagenlogischen Literalen
     if( true )
         echo 'Ein wahres Wort!' . PHP_EOL;
     
     if( false )
         echo 'Wer das liest ist doof' . PHP_EOL;
     
     // if mit Variablenwerten
     $x = true;
     $y = false;
     $a = 100;
     $b = 0;
     
     if( $x )
         echo 'Noch ein wahres Wort' . PHP_EOL;
     
     if( ! $y )
         echo 'Falsches kann auch wahr sein' . PHP_EOL;
     
     // JAVA würde uns das um die Ohren hauen ...
     // ... aber in PHP ist festgelegt: jeder Wert ungleich 0 ist eine wahre Ausage
     if( $a )
         echo 'Mal schauen, ob a wahr ist ' . PHP_EOL;
     
     if( $b )
         echo 'Kann b so falsch sein?' . PHP_EOL;
     
     
     // ... und zusätzlich gilt das auch für Zeichenketten: jeder Wert ungleich der leeren Zeichenkette ist eine wahre Aussag
     $z = "Hallo Welt!";
     $f = "";
     
     if( $z )
         echo 'Ist z wahr?' . PHP_EOL;
     
     if( $f )
         echo 'Ist f wahr?' . PHP_EOL;
     
     
    /**
     * bedingte Anweisung mit Alternative  if( <Bedingung> ) else 
     * 
     */
     
     if( true )
         echo 'Bald haben wir es geschafft für heute' . PHP_EOL;
     else
         echo 'Rocky Rockmann bleibt länger' . PHP_EOL;
     
     
    /**
     * bedingte Anweisung und Anweisungsblöcke
     */
     
     if( true ) {
         echo 'Wird immer knapper mit dem Feierabend' . PHP_EOL;
         echo '... aber wir wollen länger machen' . PHP_EOL;
     }
     else 
         echo 'Ich glaub nicht, dass man das hier lesen wird' . PHP_EOL;
     
     
     /**
      * Mehrfachauswahl  switch( <Ausdruck> ) .. case 
      * 
      * Bei switch..case prüft der Computer den Wert des Ausdrucks und vergleicht den Wert anschließend mit 
      * Vorgaben, die cases (Fälle) definiert worden sind.
      */
     
     $waschprogramm = "Unterbodenpflege";
     
     
     switch( $waschprogramm ) {
         
         case 'Kochwäsche': 
                echo 'Es wird heiß' . PHP_EOL;
                break;
                
         case 'Kurzprogramm':
                echo 'Bitte warten, geht schnell' . PHP_EOL;
                break;
                
         case 'Buntwäsche':
                echo 'Bitte zusätzlich Farbe auffüllen' . PHP_EOL;
                break;
                
         default:
                echo 'Na so schwer wird die Auswahl aus drei Sachen wohl nicht sein';
                break;
     }
     
     
     
     
     
     
     
     
     
     
     