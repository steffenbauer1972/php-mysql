<!-- PHP und HTML voneinander abgrenzen -->
<!-- Einsatz von einzeiligen Kommentaren und Bereichskommentaren -->

<h1>PHP und HTML abgrenzen</h1>

<p>
	Hier sind wir in einem HTML-Bereich
</p>

<?php

	/* Hier sind wir im PHP-Bereich */

	/**
	 *  Es gibt mehrere Möglichkeiten, Kommentare zu verfassen.
	 *  
	 *  Eclipse stellt Bereichskommentare unterschiedlich gefärbt dar.
	 *  Die blauen Bereiche sind für PHPDOC gedacht, ein Werkzeug zur 
	 *  halbautomatischen Dokumentation der Quelltexte. 
	 */
?>

<p>
	Hier geht es wieder mit reinem HTML weiter....
</p>

<?php 
	
	// und das ist schon wieder ein neuer PHP-Bereich
?>

<p>
	... und schon wieder HTML. In diesem HTML-Bereich verwende ich <?php echo "PHP"; ?>.
	<br />
	Prinzipiell ist erlaubt, von PHP heraus HTML-Tags zu "generieren", d.h. eine PHP-Ausgabe
	darf HTML-Tags beinhalten, z.B.: <?php echo "<b>Fettschrift</b>"; ?>
	<br />
	Zum Vergleich: man kann PHP und HTML wieder stärker trennen: <b><?php echo "Fettschrift"; ?></b>.
</p>

<p>
	<!--  eine HTML-Tabelle -->
	<table>
		<tr>
			<td>Eins</td>
			<td>Zwei</td>
			<td>Drei</td>
		</tr>
	</table>
	
	<br />
	
	<?php 
		echo "	<table>
					<tr>
						<td>Eins</td>
						<td>Zwei</td>
						<td>Drei</td>
					</tr>		
				</table>";
	?>
	
	<br />
	
	<table>
		<tr>
			<td><?php echo "Eins"; ?></td>
			<td><?php echo "Zwei"; ?></td>
			<td><?php echo "Drei"; ?></td>
		</tr>		
	</table>
</p>

<?php 

	/* 
	 * Besteht eine Datei nur aus PHP-Anweisungen oder steht der PHP-Bereich am Ende 
	 * einer Datei, dann ist es üblich, diesen PHP-Bereich nicht zu schließen. Das Ende der Datei (EOF)
	 * ist dann gleichzeitig auch das Ende des PHP-Bereichs
	 *  
	 */







