<h2>Detailansicht</h2>
<?php
$bildId = (isset ( $_GET ['bild'] )) ? $_GET ['bild'] : false;

// Details zu der BildID anzeigen:
if ($bildId) {
    
    $link = mysql_connect ( '10.10.102.145', 'www', 'linux' ) 
        or die ( mysql_error () );
    
    mysql_select_db ( 'db_galerie' ) 
        or die ( mysql_error () );
        
    $query  =   "SELECT
                    *
                 FROM
                    bilder
                 WHERE id =" . $bildId;
    
    $result = mysql_query( $query );
    
    // hole die Informationen zu dem einen Datensatz und weise diese skalaren Variablen zu ... 
    list( $id, $name, $beschreibung, $datum, $ort, $md5checksum, $ip ) = mysql_fetch_array( $result );
}
?>

    <div class="detail">
        <img src="<?php echo $name; ?>" />
        <br />
        <div class="beschreibung">
            <?php echo $beschreibung; ?>
        </div>
        <div class="meta">
            <?php echo $datum; ?>, <?php echo $ort;?>, <?php echo $ip; ?>
        </div>
    </div>
    
    