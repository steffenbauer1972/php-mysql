<h2>Galerie-Übersicht</h2>
<p>
    Sie können ein Bild <a href="index.php?seite=3">hochladen</a>.
</p>
<?php

    $link = mysql_connect( '10.10.102.145', 'www', 'linux' )
        or die(mysql_error());
    
    mysql_select_db('db_galerie')
        or die(mysql_error());
        
    $query =    "SELECT
                    *
                 FROM
                    bilder";

    $result = mysql_query( $query );
    
    // alle Datensätze einzeln verarbeiten...
    while( $datensatz = mysql_fetch_array( $result, MYSQL_ASSOC)) {
?>
        <div class="thumbnail">
            <a href="index.php?seite=4&bild=<?php echo $datensatz['id']; ?>">
                <img src="<?php echo $datensatz['name']; ?>" alt="" width="80" height="80"></a>
            <br />
            <div class="datum"><?php echo $datensatz['datum'];?></div>
            <div class="ort"><?php echo $datensatz['ort'];?></div>
        </div>  

<?php         
    }