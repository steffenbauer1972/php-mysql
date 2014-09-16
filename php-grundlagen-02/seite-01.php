<!-- Datentypen -->
<?php

	/**
	 * PHP ist eine dynamisch getypte Sprache, d.h. die Variablen und Konstanten
	 * haben keinen fest zugeordneten Datentyp. 
	 * 
	 * Die Datentypen der Variablen werden durch die Wertzuweisung festgelegt.
	 * Eine Variable kann zu jedem Zeitpunkt einen anderen Datentyp besitzen.
	 * 
	 * Analog zu den Hochsprachen können folgende Datentypen verwendet werden:
	 */

	/**
	 * skalarer Typ:	BOOLEAN	(boolesche Variable)
	 */

	$x = true;
	$y = false;
	
	$z = $x AND $y;
	
	// wir geben die Variablenwerte testweise aus:
	var_dump( $x );
	var_dump( $y );
	var_dump( $z );

	/**
	 * skalarer Typ:	INTEGER (ganzzahligen Variablen)
	 */
	 
	// positiv und negativ
	$x = 100;
	$y = -123;
	
	// oktal und hexadezimal
	$oct = 0123;
	$hex = 0x1A;
	
	var_dump( $x );
	var_dump( $y );
	var_dump( $oct );
	var_dump( $hex );
	
	/**
	 * skalarer Typ: 	FLOAT, DOUBLE (Fließkommazahlen)
	 */
	
	$x = 12.34;
	$y = 1.2e3;	
	
	var_dump($x);
	var_dump($y);
	
	$z = 5E-12;
	var_dump($z);
	
	/**
	 * skalarer Typ: 	CHARACTER (Zeichen)
	 */
	
	$x = 'c';
	$y = '!';
	
	var_dump($x);
	var_dump($y);
	
	/**
	 * zusammengesetzter Typ:	STRING (Zeichenkette)
	 */
	
	// Literal
	echo 'Hallo Welt!'; 	// single quoted strings
	echo "Hallo Welt!";		// double quoted strings

	// single quoted vs. double quoted
	$x = 100;
	
	echo 'X hat den Wert: $x';	// single quoted strings substituieren **nicht** den Wert der Variablen
	echo "X hat den Wert: $x";	// double quoted strings substituieren den Wert der Variablen
	
	echo 'Falls mal ein Zeilenumbruch gebraucht wird ';
	echo PHP_EOL;
	echo '...weiter geht es in der nächsten Zeile';
	
	// curly braces innerhalb von Zeichenkettenliteralen
	$beer = 'Heineken';
	
	echo "Er trank einige $beer's";		// gibt aus: Er trank einige Heineken's
	echo "Er trank einige $beers"; 		// das funktioniert leider nicht, da $beers als Variablenname noch nicht existiert
	
	echo "Er trank einige ${beer}s";	// gibt aus: Er trank einige Heinekens
	echo "Er trank einige {$beer}s";	// gibt aus: Er trank einige Heinekens
	
	
	// Verkettung von Zeichenketten
	
	$x = "Hallo ";
	$y = "Welt!";
	
	$z = $x . $y ;	// y an x dranhängen ... verketten -> Hallo Welt!
	
	echo $z;
	
	echo $x . $y;
	
	echo $x . PHP_EOL;
	echo $y . PHP_EOL;
	
	echo 'Hallo ' . "Welt!" . PHP_EOL;
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 
	 