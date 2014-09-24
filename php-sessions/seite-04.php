<?php 
    /**
     * Um eine Sitzung PHP-seitig zu beenden, muss die Sitzung
     * zunächste einmal fortgesetzt werden (session_start()).
     * 
     * Anschließend kann der Inhalt der Sitzung gelöscht werden, z.B.
     * durch 
     * 
     *  $_SESSION = array();    // ein leeres Feld überschreibt alle Sitzungsdaten
     * 
     * 
     */    

    session_start();
    
    $_SESSION = array();    // wir überschreiben die Daten der Sitzung
    
?>
<h2>Seite 4 (Sitzungsdaten löschen)</h2>
<a href="seite-01.php"> Seite 1</a>
<a href="seite-02.php"> Seite 2</a>
<a href="seite-03.php"> Seite 3</a>
