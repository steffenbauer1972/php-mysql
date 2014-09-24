<?php 
    
    /**
     * Jjede Seite, die mit der Session arbeiten möchte, muss den
     * Aufruf "session_start()" ausführen.
     * 
     * session_start() ändert HTTP-Header-Informationen und muss folglich
     * aufgerufen werden, bevor irgendeine Ausgabe erfolgt. (nicht mal 
     * ein Leerzeichen, eine Leerzeile oder ähnliches)
     */

    session_start();
    
    $_SESSION['beispiel'] = "Hallo Welt!";
?>
<h2>Seite 1</h2>
<a href="seite-01.php"> Seite 1</a>
<a href="seite-02.php"> Seite 2</a>
<a href="seite-03.php"> Seite 3</a>
<?php
