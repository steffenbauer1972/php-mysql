<ul id="navlist">
    <li><a href="index.php?seite=1">Home</a></li>
    <li><a href="index.php?seite=2">Galerie</a></li>
<?php
    // Login-Formular anzeigen, falls noch nicht angemeldet 
    if( $_SESSION['login'] == true ):
?>
    <li><a href="index.php?seite=5">Admin</a></li>
<?php 
    endif;
?>

<?php
    // Login-Formular anzeigen, falls noch nicht angemeldet 
    if( $_SESSION['login'] != true ):
?>
    <li>
        <form action="php/log_in_out.php" method="post">
            <label for="user">user:</label>
            <input type="text" name="user" id="user"/>
            
            <label for="pass">passwort:</label>
            <input type="password" name="pass" id="pass" />
            
            <input type="submit" name="anmelden" id="anmelden" value="login" />
        </form>
    </li>
<?php 
    else:
    // Logout-Button anzeigen, falls bereits angemeldet
?>
    <li>
        <form action="php/log_in_out.php" method="post">
            <input type="submit" name="abmelden" id="abmelden" value="logout" />
        </form>
    </li>
<?php 
    endif;
?>
</ul>
