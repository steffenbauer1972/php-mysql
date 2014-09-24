<?php 
    session_start();
    
?>
<html>
    <head>
        <title>PHP Sitzungen An-/Abmelden</title>
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