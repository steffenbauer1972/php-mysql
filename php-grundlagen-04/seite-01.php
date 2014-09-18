<!-- Operatoren -->
<?php

    /**
     * arithmetische Operatoren
     * 
     * Addition, Subtraktion, Multiplikation, Division, Modulo
     */
     
    $a = 10;
    $b = 20;
    
    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
    
    echo $a % 2;  
    
   /**
    * Zuweisungsoperatoren
    * 
    */

    $x = "Hallo Welt!";     // klassische Wertzuweisung
    
    $x += $a;       // Zusammensetzung aus Wertzuweisung und Addition $x = $x + $a
    $x -= $a;       // Zusammensetzung aus Wertzuweisung und Subtraktion $x = $x - $a
    $x *= $a;       // Zusammensetzung aus Wertzuweisung und Multiplikation $x = $x * $a
    $x /= $a;       // Zusammensetzung aus Wertzuweisung und Division $x = $x / $a
    $x %= $a;       // Zusammensetzung aus Wertzuweisung und Modulo $x = $x % $a
    
    
    $z = "Hallo Welt!";
    
    $z .= " Wie geht es Dir?";  // Zusammensetzung aus Wertzuweisung und Concatenate $z = $z . " Wie geht es Dir?"
    
    
    /**
     * Vergleichsoperatoren
     * 
     */
     
    echo $a > $b ;      // größer als
    echo $a >= $b ;     // größer oder gleich
    echo $a < $b ;      // kleiner als
    echo $a <= $b ;     // kleiner oder gleich
    echo $a != $b ;     // ungleich
    echo $a <> $b;      // ungleich
    echo $a == $b ;     // Gleichheit
    
    /**
     * logische Operatoren
     */
    
    echo true || false;     // logisches Oder
    echo true OR false;     // logisches Oder
    
    echo true && true;      // logisches Und
    echo true AND true;     // logisches Und
    
    // kleiner Test:
    
    echo "------------------" . PHP_EOL;
    
    $x = true AND false;    
    var_dump( $x );         // Ergebnis: true <<< ???   Erklärung: die Wertzuweisung "=" ist höherrangig als das "AND"
    
    $x = true && false;     //  "&&" ist höherranging als die Wertzuweisung "="
    var_dump( $x );         // Ergebnis: false <<< entspricht unserem Verständnis
    
    
    $y = false OR true;     
    var_dump( $y );         // Ergebnis: false <<< ???  Erklärung: die Wertzuweisung "=" ist höherrangig als das "OR"
     
    $y = false || true;     // "||" ist höherranging als die Wertzuweisung "="
    var_dump( $y );         // Ergebnis: true <<< entspricht unserem Verständnis
    
    
    
    
    
    
    
    
    
    
     