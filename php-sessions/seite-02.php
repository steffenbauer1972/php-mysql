<?php 
    
    session_start();
    
    var_dump ( $_SESSION );
    
    $_SESSION['nochWas'] = "Seite 2 will sich auch etwas merken";
    
?>
<h2>Seite 2</h2>
<a href="seite-01.php"> Seite 1</a>
<a href="seite-02.php"> Seite 2</a>
<a href="seite-03.php"> Seite 3</a>
<?php
