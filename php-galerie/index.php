<?php 
    include 'php/session_control.php';
?>
<html>
    <head>
        <title>PHP Galerie</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" /> 
    </head>
    
    <body>
        
        <div id="pagewrapper">
        
        
            <div id="header">
            
            </div>
            
            
            <div id="navigation">
<?php 
                    include 'php/menu.php';
?>
            </div>

            
            <div id="content">
                
                <?php 
                
                    // Auslesen der angeforderten Seite aus der URL
                    $page = (isset($_GET['seite'])) ? $_GET['seite'] : 1;
                    
                    // laden des angeforderten Inhalts in den content-Bereich der Seite
                    switch( $page ) {

                        default:
                        case '1':   // Startseite
                            include 'php/seite-01.php';
                            break;
                            
                        case '2':   // Galerie-Übersicht mit Bildvorschau
                            include 'php/seite-02.php';
                            break;
                            
                        case '3':   // Formular zum Hochladen eines Bilds
                            include 'php/seite-03.php';
                            break;
                            
                        case '4':   // Detailansicht zu einem Bild
                            include 'php/seite-04.php';
                            break;
                            
                        case '5':   // Adminbereich zum Löschen von Bildern
                            include 'php/seite-05.php';
                            break; 
                        
                    }
                
                ?>
            </div>
        
        </div>
 
    </body>
</html>
