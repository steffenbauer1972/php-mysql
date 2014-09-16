<!--  Datentypen -->
<?php

    /**
     * neben den skalaren Datentypen, die jeweils nur zum Speichern 
     * eines Wertes verwendet werden können, existieren zusammengesetzte 
     * Datentypen (Vektoren (aus der Mathematik)), die zu jedem Zeitpunkt mehr
     * als einen Wert speichern können.
     */

    /**
     * zusammengesetzter Datentyp:		ARRAY (Datenfeld)
     * 
     * Ein Array speichert zu jedem Zeitpunkt mehr als einen Wert. 
     * Die Anzahl der Werte muss in anderen Sprachen vorab festgelegt werden.
     * In PHP darf ein Array zur Laufzeit des Programms jedoch beliebig 
     * wachsen oder schrumpfen.
     * 
     * Die Anzahl der Elemente, die ein Array speichern kann, wird durch
     * die Dimension des Array angegeben.
     * 
     * Bei der Verwendung von Arrays (Lesen, Schreiben) muss der Name des Arrays
     * *und* die Position des Werts innerhalb des Arrays angegben werden
     * 
     * 			+---+---+---+---+---+---+---+---+---+---+
     * 	feld	|   |   |   |   |   |   |   |   |   |   |
     * 			+---+---+---+---+---+---+---+---+---+---+
     * 			  0   1   2   3   4   5   6   7   8   9
     * 	
     *  feld = Name des Arrays
     *  0..9 = Positionen innerhalb des Arrays
     *  
     *   feld[ 0 ]	.. Syntax, um auf ein Element eines Arrays zuzugreifen
     *   
     *   
     *   Bsp.:	$feld[2] = 'X';
     *
     *	 			+---+---+---+---+---+---+---+---+---+---+
     *	 	feld	|   |   | X |   |   |   |   |   |   |   |
     * 				+---+---+---+---+---+---+---+---+---+---+
     * 				  0   1   2   3   4   5   6   7   8   9
     * 
     *   Bsp.:	$feld[9] = 100;
     *   
     *   			+---+---+---+---+---+---+---+---+---+---+
     *	 	feld	|   |   | X |   |   |   |   |   |   |100|
     * 				+---+---+---+---+---+---+---+---+---+---+
     * 				  0   1   2   3   4   5   6   7   8   9
     * 
     *   Bsp.: 	$x = -15;
     *   		$feld[6] = $x;
     *   
     *   			+---+---+---+---+---+---+---+---+---+---+
     *	 	feld	|   |   | X |   |   |   |-15|   |   |100|
     * 				+---+---+---+---+---+---+---+---+---+---+
     * 				  0   1   2   3   4   5   6   7   8   9
     *   
     *   Bsp.:	$a = $feld[7];
     *   
     */


    /**
     * es gibt mehrere Möglichkeiten, die Arrays im PHP-Skript zu definieren
     * 
     * (1)  mit Hilfe der Funktion array( <Parameterliste> )
     * 
     */

    $feldAnton = array();                               // ohne Parameter -> leeres Feld
    $feldBerta = array( 10, -20, 30, -100, 0, 50 );     // mit Parameter, alle Parameter sind vom gleichen Typ
    $feldDelta = array( 'Hallo', 10, "Welt!", "Dessau", -100);  // mit Parameter, die Parameter haben unterschiedliche Typen (mixed)

    
    var_dump( $feldAnton );
    var_dump( $feldBerta );
    var_dump( $feldDelta );

    /**
     * es gibt mehrere Möglichkeiten, die Arrays im PHP-Skript zu definieren
     * 
     * (2)  mit Hilfe der Indexschreibweise
     * 
     */
    
    // hinter dem Namen des Arrays werden die eckigen Klammern notiert und anschließend wird das Element
    // des Feldes mit einem Wert initialisiert
    $feld[1] = "Hallo";
    $feld[] = 100;
    $feld[] = "-100";
    $feld[] = "Welt!";
    $feld[10] = "Erweiterung";
    $feld[] = "und nun?"; 

    var_dump( $feld );


    /**
     * testweises Ausgeben einzelner Feldelemente
     */

    echo "Index 0: " . $feld[0] . PHP_EOL;
    
    echo "Geht das?" . $feld[-1] . PHP_EOL;

    echo "Oder geht das?" . $feld[100] . PHP_EOL;


    /**
     * Eine weitere Möglichkeit, Arrays zu verwenden, also auf deren Elemente zuzugreifen, ist
     * die Verwendung von Assoziationen statt Indizes.
     * 
     * Assoziationen = Zeichenketten benennen das Feldelement
     * 
     * 
     * feld     +---+
     *          |   | statt 0 werden die Elemente benannt: 'eins'
     *          +---+
     *          |   | statt 1 werden die Elemente benannt: 'hallo'
     *          +---+
     *          |   | statt 2 werden die Elemente benannt: 'dessau'
     *          +---+
     *          |   | statt 3 werden die Elemente benannt: 'magdeburg'
     *          +---+ 
     *          |   | statt 4 werden die Elemente benannt: 'goerzke'
     *          +---+
     *          |   | statt 5 werden die Elemente benannt: 'welt'
     *          +---+
     *          |   | statt 6 werden die Elemente benannt: 'einwohnerzahl'
     *          +---+
     *          |   | statt 7 werden die Elemente benannt: 'name'
     *          +---+
     *          |   | statt 8 werden die Elemente benannt: 'ps4'
     *          +---+ 
     *          |   | statt 9 werden die Elemente benannt: 'bauer'
     *          +---+
     */

    /**
     * assoziative Arrays
     *  
     * (1)  mit Hilfe der Funktion array( <Parameterliste> )
     * 
     */
    
    $assocFeld = array( 'eins' => 'wert im ersten Element',  'hallo' => 'wert im zweiten Element', 'dessau' => 200 );
    
    var_dump( $assocFeld );
	
    
    /**
     * assoziative Arrays
     *  
     * (2)  mit Hilfe der "Index"schreibweise
     * 
     */
    
    $assocArray[ 'einwohnerzahl' ] = 10000;
    $assocArray[ 'countrycode' ] = 'DEU';
    $assocArray[ 'district' ] = 'Sachsen-Anhalt';
    
    var_dump( $assocArray );
    
    
    /**
     *  mehrdimensionale Arrays ( Matrix, Matrize) bestehen aus mindestens zwei Dimensionen. 
     *  
     *                A   B   C   D   E   F   G   H   I
     *              +---+---+---+---+---+---+---+---+---+
     *  matrix    0 |   | x |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            1 |   | x |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            2 |   | x |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            3 |   | x |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            4 |   |   |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            5 |   |   |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            6 |   | x | x | x |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            7 |   |   |   |   |   |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            8 |   |   |   |   | x |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *            9 |   |   |   |   | x |   |   |   |   |
     *              +---+---+---+---+---+---+---+---+---+
     *  
     *  Der Zugriff auf die Elemente der Matrix erfolgt durch Angabe zweier Indizes/Assoziationen.
     *  
     *      $matrix['A'][0] = .... ;
     */
    
    /**
     * assoziative Arrays
     *  
     * (1)  mit Hilfe der Funktion array( <Parameterliste> )
     * 
     */
    
    $matrix =   array( 
                        'A' => array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ),
                        'B' => array( 'x', 'x', 'x', 'x', 0, 0, 'x', 0, 0, 0),
                        'C' => array( 0, 0, 0, 0, 0, 0, 'x', 0, 0, 0)
                );
    
    var_dump( $matrix );
    
    $matrix['A'][0] = 'x';
        
    var_dump( $matrix );
    
    
    