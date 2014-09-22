<!-- PHP und MySQL: INSERT -->
<html>

    <head>
        <title>PHP und MySQL</title>
    </head>
    
    <body>
        
        <h2>Städte eintragen in die Tabelle City</h2>            
        
        <form action="auswertung.php" method="post">
            
            <label for="name">Name:</label>
            <br />
            <input type="text" name="name" id="name" />
            <br />
            <br />
        
            <label for="countrycode">Ländercode:</label>
            <br />
            <input type="text" name="countrycode" id="countrycode" />
            <br />
            <br />
            
            <label for="district">Bundesland:</label>
            <br />
            <input type="text" name="district" id="district" />
            <br />
            <br />
            
            <label for="population">Einwohnerzahl:</label>
            <br />
            <input type="text" name="population" id="population" />
            <br />
            <br />
        
            <input type="submit" name="eintragen" id="eintragen" value="eintragen" />
        </form>
        
        
        
    </body>

</html>
