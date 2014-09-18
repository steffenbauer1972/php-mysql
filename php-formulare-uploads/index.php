<html>
    <head>
        <title>PHP Formulare Uploads</title>
    </head>

    <body>
    
        <!-- 
        
            enthält das Formular Upload-Elemente, dann ist:
                (a) die Methode POST zu verwenden
                (b) die Kodierung der Formularnachricht ist zu ändern auf 'multipart/form-data'
         -->
        <form action="php/auswertung.php" method="post" enctype='multipart/form-data' >
        
            <input type="file" name="upload" id="upload" />
            <br />
            
            <input type="submit" id="hochladen" name="hochladen" value="hochladen" />
        
        </form>
        
    </body>
</html>
