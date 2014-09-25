<?php
    session_start(); 

    /**
     * Automatisches Beenden der Sitzung nach X Minuten Inaktivität
     * 
     * Der Session-Cookie kann leider nicht mehr nachträglich verändert werden.
     * Ist er einmal gesetzt, wird session_start() immer auf diesen
     * bereits gesetzten Cookie zurückgreifen.
     * 
     * ==>  ein automatisches Beenden nach Inaktivtät lässt sich nur durch
     *      einen kleinen Trick realisieren
     *      
     * Trick:   Wir setzen selber einen Cookie, der den Original-Sitzungscookie
     *          mit neuen Werten überschreibt.
     *          
     *          neue Werte = neuer Ablaufzeitpunkt, alle anderen Informationen 
     *                      behalten wir bei
     *                      
     * Konzept: Wenn wir mit jedem Seitenaufruf diesen neuen Cookie setzen, dann
     *          wird jedes mal ein neuer Ablaufzeitpunkt für den Cookie festgelegt.
     *          
     *          Bleibt der Seitenaufruf aus, weil man inaktiv am Rechner ist, dann
     *          bleibt der Ablaufzeitpunkt im Cookie natürlich unverändert. Läuft
     *          die Zeit ab, wird automatisch der Cookie gelöscht und damit ist 
     *          die Sitzung (und damit auch die Anmeldung) abgelaufen.
     */
    
    // wir holen uns den Namen der Sitzung für den Cookie (PHPSESSID)
    $name = session_name();
    
    // wir holen uns die ID der Sitzung für den Cookie-Inhalt
    $sessionID = session_id();
    
    // wir berechnen einen neuen Ablaufzeitpunkt für den Cookie
    $ablauf = mktime() + 180;   // Ablauf = aktuelle Zeit + 3 Minuten
    
    // wir setzen nun einen neuen eigenen Cookie, der geauso heißt, wie der originale Session-Cookie
    setcookie($name, $sessionID, $ablauf, "/");
    
?>
<html>
    <head>
        <title>PHP Sitzungen An-/Abmelden</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    </head>

    <body>
        
        <div id="pagewrapper">
            
            <div id="header"></div>
            
            <div id="navigation">
<?php 
                include 'php/menu.php';                    
?>
            </div>
            
            
            <div id="content">
<?php 
                $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                
                switch( $page ) {

                    default:
                    case '1':   // Startseite
                        include 'php/seite-01.php';
                        break;

                    case '2':   // An-/Abmeldeseite
                        include 'php/seite-02.php';
                        break;
                    
                    case '3':   // irgendein Inhalt
                        include 'php/seite-03.php';
                        break;
                }
?>                
            </div>
        
        </div>
    
    </body>
</html>