<!-- Kontrollstrukturen -->
<?php

    /**
     * Üblicherweise werden häufig benötigte Funktionen
     * ausgelagert, um sie bei Bedarf in neuen Projekten
     * wieder einbinden zu können.
     * 
     */
     
    // externe Skripte einbinden mit include
    
    include 'bibliothek.php';
    
    rechtsUm();
    
    // externe Skripte einbinden mit require (benötigt)
    
    require 'bibliothek-A.php';
    
    echo "na, geht das hier noch weiter?";
     