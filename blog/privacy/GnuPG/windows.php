<!DOCTYPE html>
<html>
	<head>
		<?php 

			include "../../../template/head/head.php";
			include "../../../template/head/lightbox.php";
		?>
	</head>
	<body>
		<?php 
			include '../../../template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include '../../../template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
							<?php 
								include '../../../template/blog/privacy/privacy.php';
								include '../../../template/blog/privacy/GnuPG.php';
							?>	
							

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>GPG4Win</h1>
							<p><br /><br /></p>
							<h3>Installation</h3>
							<p>
								Windowsnutzer können sich die Software von der GPG4Win-Webseite <a href="https://www.gpg4win.de/">herunterladen</a>.
								<b>ACHTUNG: mit dem Internet-Explorer lässt sich das Programm nicht herunterladen (Der Browser kann die Webseite nicht darstellen)!</b>
								Auf der Gpg4Win-Webseite wird um Spenden gebeten, um die Entwicklung zu finanzieren. Wenn man 0€ auswählt, funktioniert der Download auch ohne zu spenden.
								<br /><br />
								Danach folgt man der Standardinstallation. Nutzer, die kein Outlook verwenden können bei der Auswahl der zu installierenden Komponenten GpgOL abwählen.
								Nachdem die Installation fertig ist öffnet sich ein Editor mit einer Datei, die Informationen über die installierte Software, bekannte Probleme etc. gibt.
								<br />
								Nach der Installation geht es mit <a href="thunderbird-enigmail.php">Enigmail in Thunderbird</a> weiter.
								<br />
								Eine Anleitung für Outlook kann ich leider nicht liefern, da MS Office nur nach Angabe der Kreditkartendaten heruntergeladen werden kann. Sorry!
								<br />
								Eine kurze Suche bei der Suchmaschine des geringsten Misstrauens hilft hier weiter.
								<br />
								
							</p>
								
								
								
								
								
																
								
							
						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../../../template/footer/footer.php';
		?>	
		<script src="/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>










