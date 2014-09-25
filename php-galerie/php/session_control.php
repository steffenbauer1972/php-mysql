<?php
    /**
     * Session starten und nach 5 Minuten Inaktivität automatisch beenden 
     */

    session_start();
    
    $name   = session_name();
    $sessid = session_id();
    $ablauf = mktime() + 300;
    
    setcookie($name, $sessid, $ablauf, "/" );
    
    