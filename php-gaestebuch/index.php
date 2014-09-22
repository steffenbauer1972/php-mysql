<html>
    <head>
        <title>PHP Gästebuch</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    </head>
    
    <body>
    
        <div id="pagewrapper">
            
            <!-- Layout: Header, Menu, Content -->
            <div id="header">
            
            </div>
        
        
            <div id="navigation">
            
                <!-- 
                    die unsortierte Liste als Basis unserer Seitennavigation gruppiert zum einen
                    die Navigationselemente und ist zum anderen leicht um weitere Menupunkte zu erweitern
                -->
                <ul id="navlist">
                    <li><a href="index.php?seite=1"> Home </a></li>
                    <li><a href="index.php?seite=2"> Gästebuch </a></li>
                </ul>
            </div>
            
            
            <div id="content">
            
                <?php 
                    /**
                     * Fallunterscheidung Template-Technik
                     * 
                     */
                
                    // aus der URL die angeforderte Seite extrahieren und in $page speichern
                    $page = (isset($_GET['seite'])) ? $_GET['seite'] : 1;
                
                    // testweises Ausgeben der angeforderten Seitennummer
                    // echo $page;
                    
                    switch( $page ) {
                
                        default:
                        case '1':   
                            include 'php/seite01.php';   
                            break;
                            
                        case '2':
                            include 'php/seite02.php';
                            break;
                            
                        case '3':
                            include 'php/seite03.php';
                            break;
                    }
                    
                    
                ?>
            </div>
        
        </div>
    </body>

</html>