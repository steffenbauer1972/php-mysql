<html>
    <head>
        <title>PHP Formulare</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    </head>
    
    <body>
        
        <!-- ein Beispielformular, das alle möglichen Formularelemente enthält -->
        
        <!-- 
            Method beschreibt, auf welche Art und Weise die Daten an den Webserver übermittelt werden.
            
                möglich sind: GET, POST (Get und Post sind HTTP-Verben)
                
                GET: die Daten werden in der URL übermittelt
                
                        Bsp.: auswertung.php ? feld1=wert1 & feld2=wert2 & ... & feldN=wertN
                        
                POST: die Daten werden in einer separaten Nachricht an den Server gesendet
                
                
                Hinweis: die verwendete Methode entscheidet für die Auswertung im PHP, wo die Informationen des Formulars 
                        gespeichtert werden ( $_POST, $_GET ) 
        
         -->
        <form action="php/auswertung-01.php" method="post">
        
            <!-- einzeiliges Textfeld -->
            <label for="benutzer">Benutzer:</label>
            <input type="text" name="benutzer" id="benutzer" />
            <br />
            
            <!-- Passwortfeld -->
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort" />
            <br />
        
            <!-- mehrzeiliges Textfeld -->
            <label for="kommentar">Kommentar:</label>
            <textarea name="kommentar" id="kommentar"></textarea>
            <br />
            
            <!-- verstecktes Feld -->
            <input type="hidden" name="geheim" id="geheim" value="geheimeInfo"/>
            
            
            <!-- Dropdown-Listen, Auswahllisten -->
            <label for="auswahl">Auswählen!</label>
            <select name="auswahl" id="auswahl">
                <option></option>
                <option>Deutschland</option>
                <option>Schweiz</option>
                <option>Österreich</option>
                <option>Dänemark</option>
            </select>
            <br /> 
            
            <input type="radio" name="anrede" id="herr" value="anrede-1" /> <label for="herr">Herr</label>
            <br /> 
            <input type="radio" name="anrede" id="frau" value="anrede-2" /> <label for="frau">Frau</label>
            <br /> 
            <input type="radio" name="anrede" id="na" value="anrede-3" /> <label for="na">unbestimmt</label>
            <br />
            
            <input type="checkbox" name="news" id="news" value="newsletter" /> <label for="news">Newsletter bestellen</label>
            <br />
            <input type="checkbox" name="agb" id="agb" value="agb" /> <label for="agb">AGB gelesen und akzeptiert</label>
            <br />
            
            <input type="submit" name="absenden" id="absenden" value="absenden" />
            <input type="reset" name="reset" value="reset" />
            
            <button>
                <h2>Drück mich!</h2>
                
            </button>
            <button>
                <h2>Stehplatz</h2>
                <p>10 &euro;</p>            
            </button>
            
            <button>
                <h2>Sitzplatz</h2>
                <p>20 &euro;</p>            
            </button>
        </form>
        
        
    </body>
</html>