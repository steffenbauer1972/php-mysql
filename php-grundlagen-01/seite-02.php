<!-- PHP und HTML voneinander abgrenzen -->
<!-- Einsatz von einzeiligen Kommentaren und Bereichskommentaren -->
<?php 
	// auch hier darf PHP notiert werden
?>
<html>
	<head>
		<title>PHP Grundlagen</title>
		<link rel="stylesheet" href="main.css" type="text/css" />
	</head>

	<body>
		<h1>Ich bin HTML</h1>
		
		<h2>Ich bin <?php echo "PHP"; ?></h2>
		
		<div class="something">
			
			<?php  echo "Huhu, Box!"; ?>
		
		</div>
		
		<div class="<?php echo "geht-auch"; ?>">
		
			Und gleich ist Frühstück ... :D
			
		</div>
	</body>
</html>
