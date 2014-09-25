<ul id="navlist">
    <li><a href="?page=1"> Seite 1</a>
    <li><a href="?page=2"> An-/Abmelden </a>
    <?php 
        if( $_SESSION['login'] == true ) {
    ?>
    <li><a href="?page=3"> Seite 3</a>
    <?php 
        }
    ?>
</ul>