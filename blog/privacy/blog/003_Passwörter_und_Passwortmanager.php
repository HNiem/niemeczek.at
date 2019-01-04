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
							?>	
							

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
								<h1>Passwörter</h1>
								<p>
									Wer sich heute bei einer Webseite registriert, der muss sich meist ein Passwort überlegen. Doof, wer will sich denn schon wieder ein neues merken? Da nimmt man doch viel lieber jenes Passwort, das auch schon für alle anderen Webseiten verwendet wurde - Vielleicht noch mit einer kleinen Variation.
									<br />
									<br />
									Eine gute Idee ist das aber nicht. Warum? Dafür müssen wir kurz in die Technik hinter den Webseiten abtauchen.
									<br />
									<br />
									Wenn der "Registrieren"-Knopf betätigt wurde, dann schickt die Webseite das neue Passwort durch ein kleines Programm, das das Passwort in unverständlichen Buchstabensalat verwandelt. Der Buchstabensalat ist allerdings eindeutig, sodass jedes Mal, wenn das Passwort durch das Programm gejagt wird, der selbe Buchstabensalat herauskommt. Wird jedoch ein anderes Passwort durch das Programm gejagt, so kommt auch anderer Buchstabensalat heraus. Dieses Erzeugen von Buchstabensalat heißt Hashing.
									<br />
									<br />
									<img src="img/003_Hash-Algorithmus.png" alt="Hash-Algorithmus">
									<br />
									<br />
									Der Betreiber der Webseite speichert jetzt nur die Kombination von Benutzername und Hash. Jedes Mal, wenn neu eingeloggt wird, wird auch der Hash neu erzeugt. Wenn der neue und der gespeicherte Hash übereinstimmen, so war das Passwort richtig.
									<br />
									<br />
									Leider kommt es immer wieder zu Daten-Leaks, bei denen hunderttausende dieser Kombinationen öffentlich werden. Mit Hilfe von sehr schnellen Computern schaffen es Hacker, sehr viele mögliche Passwörter auszuprobieren, sodass sie insbesondere bei kurzen Passwörtern schnell das richtige finden können. <br />
									Hier eine graphische Darstellung von <a href="https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/" >Daten-Leaks der vergangenen Jahre</a>
									<br />
									<br />
									Dann kann der Login auf anderen Webseiten mit diesen Passwörtern versucht werden und so Zugang zu den anderen Accounts erhalten werden.<br />
									<br />
									<br />
								</p>
								<h2>Passwörter merken ist immer noch doof!</h2>
								<p>
									Daher gibt Passwort-Manager. Die erstellen komplizierte Passwörter, für jede Seite ein neues, und speichern diese. Nun ist es nur noch notwendig, sich ein einziges Passwort für den Manager zu merken - Alle anderen Passwörter merkt sich dieser für uns.
									<br /><br />
									Ich verwende <a href="https://www.keepassx.org/">KeePassX</a>, aber es gibt auch andere gute Passwort-Manager. 
									<br /><br />
								</p>
								<h2>Es geht noch besser!</h2>
								<p>
									Viele Webseiten bieten Zwei-Faktor Authentifizierung an. Wenn es die gibt, lohnt es sich, die auch zu verwenden!
									<br /><br /><br /><br /><br /><br /><br />
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



































































<!-- 

<p class="test">
			Lorem ipsum dolor sit amet, consecteteur adipiscing elit fermentum cras taciti eni, libero, 
			ante pede cum. Nulla phasellus hac. Vel curabitur pharetra, semper parturient ipsum. Integer
			nunc taciti morbi eu turpis mauris, proin euismod cursus. Vivamus ac, cursus leo ut. Nulla 
			quisque. Massa varius in dui elementum facilisi. Eros sed velit nostra. Ac, ridiculus metus, 
			eu montes integer at, pede mi. Porttitor curae ipsum taciti suspendisse. Venenatis libero litora 
			tristique nam, etiam velit, blandit ad, proin ad eu tellus blandit. Orci elit habitasse varius, mi 
			praesent integer. Convallis. Proin enim ac magna suspendisse habitant, tristique diam orci non cum.
		</p>
	-->



































































<!-- 

<p class="test">
			Lorem ipsum dolor sit amet, consecteteur adipiscing elit fermentum cras taciti eni, libero, 
			ante pede cum. Nulla phasellus hac. Vel curabitur pharetra, semper parturient ipsum. Integer
			nunc taciti morbi eu turpis mauris, proin euismod cursus. Vivamus ac, cursus leo ut. Nulla 
			quisque. Massa varius in dui elementum facilisi. Eros sed velit nostra. Ac, ridiculus metus, 
			eu montes integer at, pede mi. Porttitor curae ipsum taciti suspendisse. Venenatis libero litora 
			tristique nam, etiam velit, blandit ad, proin ad eu tellus blandit. Orci elit habitasse varius, mi 
			praesent integer. Convallis. Proin enim ac magna suspendisse habitant, tristique diam orci non cum.
		</p>
	-->