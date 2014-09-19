<html>
    <head>
        <title>PHP und MySQL</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    
    <body>
        <?php 
            
            // Verbindung herstellen
            mysql_connect('10.10.102.145', 'www', 'linux') 
                or die( mysql_error());
                
            // Datenbank auswählen
            mysql_select_db('db_world')
                or die( mysql_error());
            
            // Abfrage formulieren ...
            $query =    "SELECT
                            Code, Name, Continent, Region, SurfaceArea, Population
                         FROM
                            Country";
            
            // und senden
            $result = mysql_query ( $query );
            
        ?>
        <table>
        <?php 
            while( $datensatz = mysql_fetch_array($result, MYSQL_ASSOC)) {

        ?>
            <tr>
                <td><?php echo $datensatz['Code']; ?></td>
                <td><?php echo $datensatz['Name']; ?></td>
                <td><?php echo $datensatz['Continent']; ?></td>
                <td><?php echo $datensatz['Region']; ?></td>
                <td><?php echo $datensatz['SurfaceArea']; ?></td>
                <td><?php echo $datensatz['Population']; ?></td>
            </tr>
        <?php 
            }
        ?>
        </table>
        
    </body>
</html>