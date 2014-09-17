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
      * Vorgaben, die in cases (Fälle) definiert worden sind.
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
                echo 'Na so schwer wird die Auswahl aus drei Sachen wohl nicht sein' . PHP_EOL;
                break;
     }
     
     /**
      * Schleifen, kopf- und fußgesteuert   ( while, do..while, for, foreach )
      * 
      *     while( <Bedingung> )
      */
      
      $i = 10;
      
      while( $i > 0 ) {
          
          echo "Der Wert von i ist : " . $i . PHP_EOL;
          $i = $i - 1;          
      }
      
      /**
       *    do .. while( <Bedingung> );
       */
     
      do {
          
          echo "Der Wert von i ist : " . $i . PHP_EOL;
          $i = $i + 1;
          
      } while( $i < 10);
     
     /**
      * for-Schleife gehört zu den kopfgesteuerten Schleifen und wird umgangssprachlich
      * auch als Zählschleife bezeichnet.
      * 
      * Der Schleifenkopf besteht aus dem Schlüsselwort for und insgesamt 3 Ausdrücken, die durch
      * Semikola getrennt in runden Klammern notiert werden.
      * 
      * for( Ausdruck1; Ausdruck2; Ausdruck3 )
      * 
      *     Ausdruck1:  "Initialisierung" der Schleife, wird ausgeführt/berechnet, bevor die Schleife
      *                 das erste Mal durchlaufen wird.
      *                 
      *     Ausdruck2:  "Vergleichsausdruck", solange dieser Ausdruck den Wahrheitswert WAHR (true) liefert
      *                 wird die Schleife erneut durchlaufen. Die Prüfung des Ausdruck wird vor jedem 
      *                 Schleifendurchlauf ausgeführt.
      *                 
      *     Ausdruck3:  "Reinitialisierung", wird ausgeführt, nachdem die Schleife einmal durchlaufen wurde.
      *                 Typischerweise nimmt die Reinitialisierung Einfluss auf die Bedingung, die im 
      *                 Vergleichsausdruck überprüft wird.
      *
      * ++ Vorteil: alle Elemente zur Steuerung der Schleife stehen beieinander im Schleifenkopf
      *  - Nachteil: ein wenig komplexer in der Syntax
      */
     
      // Initialisierung: $i=0
      // Vergleichsausdruck: $i<10
      // Reinitialisierung: $i = $i + 1
      
      for( $i = 0 ; $i<10 ; $i = $i + 1 ) 
          echo "Der Wert von i ist: " . $i . PHP_EOL;
      
      /**
       * vgl. dazu      $i=0;
       *                while( $i<10 ) {
       *                    
       *                    echo " .....";
       *                    $i = $i + 1;
       *                }
       */
      
      
      /**
       * foreach - Schleife ( für jedes, für jede, für jeden)
       * 
       * Die Semantik der foreach-Schleife liegt darin begründet, dass es in der Programmierung
       * Mengen oder Datenstrukturen gibt, die systematisch von Anfang bis Ende durchlaufen werden können.
       * 
       * Eine dieser Strukturen wäre das ARRAY, das Datenfeld ...
       * 
       * 
       *        +---+---+---+---+---+---+---+---+---+---+---+---+
       *        |   |   |   |   |   |   |   |   |   |   |   |   |
       *        +---+---+---+---+---+---+---+---+---+---+---+---+
       *          ^                                           ^
       *          |   ....................................    |
       *          
       * Solche Datenstrukturen werden "iterierbar" genannt. (Iteration = Schleifendurchlauf)
       * 
       * Damit diese Datenstrukturen iterierbar sind/werden, wird intern durch PHP eine Art Zeiger
       * verwaltet, der immer auf das aktuelle Element der iterierbaren Struktur verweist.
       * 
       * Jeder Iterationsschritt bewegt den internen Zeiger ein Element weiter. Ist der Zeiger am Ende
       * angekommen, liefert die nächste Iteration den Wert false. 
       */
      
      $datenfeld = array( "hallo", "welt", "!", "foreach", "ist", "sehr", "mächtig", 100, -10, "Test");
      
      foreach( $datenfeld as $e )
          echo "Wir haben aus der Datenstruktur geholt: " . $e . PHP_EOL;
      
      foreach( $datenfeld as $e )
          echo "Wir haben aus der Datenstruktur geholt: " . $e . PHP_EOL;
      
      // auf Wunsch liefert foreach zusätzlich den Index des Elements
      foreach( $datenfeld as $index => $wert )
          echo "Wertpaar: " . $index . ' -> ' . $wert . PHP_EOL;
      
      // ... das funktioniert auch mit assoziativen Feldern 
      $assocFeld = array( "eins" => "hallo", "huhu" => "du", "hallo" => "welt");
      foreach( $assocFeld as $index => $wert )
          echo "Wertpaar: " . $index . ' -> ' . $wert . PHP_EOL;
      
      
     
     
     
     