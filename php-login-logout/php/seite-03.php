<?php 
    /**
     * Soll der Inhalt einer Seite nur angemeldeten Benutzern
     * zugänglich gemacht werden, ist das Laden des Inhalts
     * von einer erfolgreichen Anmeldung abhängig zu machen.
     * 
     * 
     */

    if( $_SESSION['login'] == true ) {
?>
<h2>Seite 3</h2>
<p>
    Nur für angemeldete Mitglieder ... 
</p>

<?php 
    }
    else
    {
?>
    <h2>Anmeldung erforderlich!</h2>
<?php 
    }
?>