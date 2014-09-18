<html>
    <head>
        <title>PHP Formulare mit Mehrfachauswahl</title>
    </head>

    
    <body>
        
        <form action="php/auswertung.php" method="post">
            
            <label for="auswahl">Bitte wählen:</label>
            <br />
            <select name="auswahl[]" id="auswahl" multiple>
                <option value="0"></option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
                <option value="6">Option 6</option>
                <option value="7">Option 7</option>
                <option value="8">Option 8</option>
                <option value="9">Option 9</option>
            </select>
            <br />

            
            <input type="checkbox" name="chkbox[]" id="chkbox-1" value="1"> <label for="chkbox-1">Eins</label>
            <br />
            <input type="checkbox" name="chkbox[]" id="chkbox-2" value="2"> <label for="chkbox-2">Zwei</label>
            <br />
            <input type="checkbox" name="chkbox[]" id="chkbox-3" value="3"> <label for="chkbox-3">Drei</label>
            <br />
            <input type="checkbox" name="chkbox[]" id="chkbox-4" value="4"> <label for="chkbox-4">Vier</label>
            <br />
            <input type="checkbox" name="chkbox[]" id="chkbox-5" value="5"> <label for="chkbox-5">Fünf</label>
            <br />
            <input type="checkbox" name="chkbox[]" id="chkbox-6" value="6"> <label for="chkbox-6">Sechs</label>
            <br />
            
            <?php 
            
            for( $i = 0; $i<20; $i++) {
            ?>
            
            <input type="checkbox" name="cb[<?php echo $i;?>]" id="cb-<?php echo $i;?>" value="<?php echo $i; ?>" />
            <label for="cb-<?php echo $i; ?>"> Wert <?php echo $i; ?></label>
            <br />
            
            <?php 
            }            
            ?>
            
            
            
            <input type="submit" name="absenden" id="absenden" value="absenden" />
        </form>
    
    </body>
</html>