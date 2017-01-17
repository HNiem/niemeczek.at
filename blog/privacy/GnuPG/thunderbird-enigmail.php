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
							<h1>Thunderbird</h1>
							<p><br /><br /></p>
							<h3>Installation</h3>
							<p>
								Benutzer, die einen Rechner mit Linux benutzen können sich Thunderbird meist direkt aus den Paketquellen installieren, PGP ist meist vorinstalliert. 
								Unter Debian tut es beispielsweise ein <code>apt-get install icedove</code>.
								<br /><br />
								<b>Windowsnutzer</b> können sich die Software von der Mozilla-Webseite (Herstellen von Thunderbird) <a href="https://www.mozilla.org/de/thunderbird/">herunterladen</a>
								und die Standardinstallation durchgehen.
								<br /><br />
								Nach dem ersten Start wird gefragt, wie Thunderbird genutzt werden soll ("Systemintegration"). Hier das Häkchen vor "Bei jedem Start von Thunderbird überprüfen" 
								entfernen und "Als Standard festlegen" klicken.
								Danach wird der erste Mailaccount eingerichtet:
								<br /><br />
								- "Überspringen und meine existierende E-Mail-Adresse verwenden" klicken
								<br />
								- Name, Mailadresse und Passwort angeben und auf weiter klicken. Thunderbird erkennt im Normalfall die richtigen Einstellungen, 
								ist das nicht der Fall muss manuell nachgeholfen werden. Die E-Mail-Provider stellen die Information normalerweise online zur Verfügung. 
								Mit "Fertig" bestätigen
								<br />
								- Bei Google Konten muss man sich nun nochmal in Thunderbird anmelden und bestätigen, dass Thunderbird die E-Mails abrufen darf.
								<br />
								<br />
								Thunderbird ist nun fertig eingerichtet.
								<br />
								<br />
							</p>	
							<h3>Einrichtung von PGP</h3>
							<p>
							Dafür muss Pgp4Win bereits eingerichtet sein!
							<br /><br />
								- Mit der rechten Maustaste an den oberen Rand des Fensters klicken und "Menüleiste" ebenfalls auswählen. Eine neue Leiste erscheint.
								<br />
								- über Extras > Add-ons kommt man zu einem neuen Tab. In der oberen Suchleiste "Enigmail" eingeben und "installieren" auswählen. 
								Danach Thunderbird schließen und neu starten.
								<br />
								- Nach dem Neustart erscheint ein "Einrichtungs-Assistent" für Enigmail. 
								<br />
								- "Jetzt einrichten" auswählen, mit "Weiter >" bestätigen.
								<br />
								- "Ich bevorzuge eine ausführliche Konfiguration (...)" auswählen, danach "Weiter >"
								<br />
								- "Ich möchte ein neues Schlüsselpaar erzeugen", danach "Weiter >"
								<br />
								- Gute Passphrase überlegen, aufschreiben/in den Passwortmanager einspeichern, danach "Weiter >"
								<br />
								- Nun wird der Schlüssel erzeugt. Das kann einige Zeit dauern.
								<br />
								- Das Widerrufszertifikat erzeugen und speichern, danach "Weiter >"
								<br />
								- Enigmail ist fertig eingerichtet, das Fenster kann geschlossen werden. In der Leiste ganz oben ist nun ein Reiter "Enigmail" zu sehen.
								<br /><br />
								
							<h4>Ablaufdatum des Schlüssels ändern</h4>
 							<p>
 								<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/1.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/1.png" alt="alternative Erklärung">
 								</a>
 								Über Enigmail > Schlüssel verwalten kann man alle vorhandenen Schlüssel einsehen. Per Doppelklick auf den zu bearbeitenden Schlüssel kann man dessen
 								genaue Eigenschaften ansehen. Hier das Ablaufdatum ändern und das Häkchen bei "Läuft nie ab" setzen. Die Änderung wird erst sichtbar, nachdem das 
 								Schlüsseleigenschaften-Fenster geschlossen (und erneut geöffnet) wurde.
 								<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/5.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/5.png" alt="alternative Erklärung">
 								</a>
 								<br /><br />
 							</p>
 							<h4>Schlüssel sichern</h4>
 							<p>
 								Im selben "Schlüssel verwalten"-Fenster kann man den Schlüssel nach einem Klick mit der rechten Maustaste auf den entsprechenden Schlüssel "In (eine) Datei 
 								exportieren". Dort muss dann "Geheime Schlüssel exportieren" ausgewählt werden. Dann geht der Dateimanager auf und der Ort, an dem die Datei gespeichert 
 								werden soll kann ausgewählt werden.<br />
 								Die entstandene Datei sowie das vorhin angelegte Widerrufszertifikat sollten auf einen USB-Stick oder eine CD gespeichert (und/oder ausgedruckt) werden. 
 								Danach die Dateien löschen und den Papierkorb ausleeren.
 								
 								Der USB-Stick oder die CD sollten an einem sicheren Ort (z.B. ein Safe) als Backup gelagert (und nicht für andere Dinge benutzt) werden.
 								Passwort gut merken (ggf ebenfalls aufschreiben)! Wenn das Passwort vergessen wurde, kann der Schlüssel nicht mehr benutzt werden!
 								<br /><br />
 							</p>
 							<h4>Nachrichten standardmäßig unterschreiben</h4>
 							<p>
 								Über den Reiter Extras die Konteneinstellungen aufrufen, danach in der Spalte links "OpenPGP-Sicherheit" auswählen und das Häkchen in 
 								"Nachrichten standardmäßig unterschreiben", "Unverschlüsselte Nachrichten unterschreiben" und "Verschlüsselte Nachrichten unterschreiben" setzen.
 								Mit "OK" bestätigen.
 								<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/7.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/7.png" alt="alternative Erklärung">
 								</a>
 								<br /><br /><br />
 							</p>
 							<h4 id="SCHLÜSSELSERVER">Auf Schlüsselserver hochladen</h4>
							<p>
								Schlüsselserver dienen dem Austausch von PGP-Schlüssel. Um seinen eigenen Schlüssel zu verbreiten ist es sinnvoll, 
								diesen auf Schlüsselserver hochzuladen.
								<br /><br />
								Dazu über den Reiter Enigmail die Einstellungen aufrufen. 
 								<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/4.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/4.png" alt="alternative Erklärung">
 								</a>
 								Dann auf "Experten-Optionen und -Menüpunkte anzeigen" klicken. Nun ist ein Reiter "Schlüsselserver" sichtbar. Hier das Häkchen aus 
 								"Immer ersten Schlüsselserver verwenden" entfernen und in der Zeile unter ("Schlüssel zur Signaturüberprüfung automatisch von 
 								folgendem Server herunterladen:") folgendes einfügen: pool.sks-keyservers.net
								<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/6.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/6.png" alt="alternative Erklärung">
 								</a>
								Anschließend die Einstellungen schließen und die Schlüsselverwaltung über Enigmail > "Schlüssel verwalten" aufrufen. 
								
 								<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/3.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/3.png" alt="alternative Erklärung">
 								</a>
								Mit der rechten Maustaste auf den Schlüssel klicken und dann "Auf Schlüsselserver hochladen". Nun einen der angeführten 
								Schlüsselserver auswählen und mit Okay bestätigen. Anschließend auch auf die anderen angeführten Schlüsselserver hochladen.
								<br /><br />
									Einrichtung fertig!
								<br /><br /><br />
							</p>
 							

							<h3>Verwendung<br /><br /></h3>
							<h4>E-Mail schreiben</h4>
							<p>
								Links oben auf "Verfassen" klicken, danach das E-Mail verfassen. Bedenke, dass der Betreff nicht verschlüsselt wird!
								<br />
								Wird das erste mal eine E-Mail an eine E-Mail-Adresse mit PGP verschlüsselt, muss manuell an der oberen Leiste das Symbol mit dem Schloss (verschlüsseln)
								ausgewählt werden. Nach dem absenden meldet Enigmail, dass kein Schlüssel für die Mailadresse gefunden wurde. Unten kann man dann über
								"Fehlende Schlüssel herunterladen" auf einem Schlüsselserver nach passenden Schlüssel suchen. Wurden passende Schlüssel gefunden, 
								kann man diese auswählen und per Klick auf "OK" herunterladen. Häufig sind mehrere Schlüssel verfügbar, hier eignet sich meist der neueste.
								<br />
								Nun sollte Enigmail sich gemerkt haben, dass zukünftige Mails an diese Mailadresse stets mit dem ausgewählten Schlüssel verschlüsselt werden sollen.
							</p>
							<h4>Unterschriebene E-Mails prüfen</h4>
 							<p>
 								Öffnet man eine unterschriebene Mail zeigt Enigmail eine Leiste über der Mail an, in der steht "NICHT VERTRAUENSWÜRDIGE Korrekte Unterschrift von ..." an 
 								(Dauert beim ersten mal ein bisschen). Voraussetzung dafür ist, dass die Schlüssel des Unterschreibenden auf dem "pool.sks-keyservers.net" Keyserver hochgeladen
 								wurden. 
 								<br /><br /><br />
 							</p>
							<h4>Verschlüsselte E-Mails lesen</h4>
							<p>
							
								<br /><br /><br />
							</p>
							<h3>Web of Trust aufbauen<br /><br /></h3>	
							<p>
								Angenommen, Du möchtest eine verschlüsselte Mail an Alice schreiben. Alice wohnt auf der anderen Seite der Welt, Du kannst ihn nicht persönlich treffen,
								damit ihr die Schlüssel austauschen könnt bzw. diese auf deren Echtheit kontrollieren könnt. Nun hast Du aber den Schlüssel von Paul unterschrieben, 
								der wiederum den Schlüssel von Markus unterschrieben hat, und Markus hat den Schlüssel von Alice unterschrieben. Du kannst Dir jetzt die Schlüssel herunterladen 
								und so die Echtheit von Alice's Schlüssel prüfen. Diese "Kette des Vertrauens" oder auch "Chain of Trust" setzt allerdings voraus, dass jeder 
								versucht, möglichst viele Unterschriften zu sammeln und, dass bevor ein Schlüssel unterschrieben wird, dessen Echtheit gut kontrolliert wird.
								<br /><br />
								
							</p>
							<h4>Schlüssel unterschreiben (Key signing)</h4>
							<p>
								Um fremde Schlüssel zu unterschreiben kannst Du beispielsweise folgenden Weg gehen:
								<br /><br />
								Du triffst dich mit jemandem, dessen Schlüssel Du unterschreiben möchtest und der Deinen Schlüssel unterschreiben soll. 
								
								<br /><br />
								Jeder Schlüssel hat einen einzigartigen Fingerabdruck. Den Deines Schlüssels kannst Du in der Schlüsselverwaltung (unter Enigmail > Schlüssel verwalten) ansehen. 
								Dazu in der Leiste, in der bereits die Reiter "Name" und "Schlüsselkennung" stehen, auf das kleine Symbol ganz rechts klicken und Fingerabdruck auswählen. 
								Der Fingerabdruck aller vorhandenen Schlüssel wird nun in der Übersicht angezeigt.
								<br /><br />
								Du teilst Deinem Gegenüber Deine Mailadresse und den Fingerabdruck Deines Schlüssels mit, und er Dir seine Mailadresse und den Fingerabdruck seines Schlüssels.
								Dann macht ihr euch einen geheimen Code aus (z.B. "adhf3430%df?n3x"). Daheim lädst Du Dir den Schlüssel zur Mailadresse von einem Schlüsselserver herunter, 
								überprüfst, ob die Fingerabdrücke übereinstimmen und sendest dann den Code verschlüsselt und unterschrieben an Deinen Partner. Dein Partner tut das selbe.
								
								<br /><br />
								Erhältst Du nun von Deinem Partner den richtigen Code, so kannst Du sichergehen, dass E-Mail-Adresse und Schlüssel zusammenpassen und Deinem Partner gehören
								und seinen Schlüssel unterschreiben. Das kann über die Schlüsselverwaltung > Rechte Maustaste auf den zu unterschreibenden Schlüssel > Unterschreiben... geschehen.
								Im nun aufgehenden Fenster "Ich habe es sehr genau geprüft" auswählen und per Klick auf "OK" unterschreiben.
								<br /><br />
								Anschließend kannst Du über die Schlüsselverwaltung > Rechte Maustaste auf den zu unterschreibenden Schlüssel > Öffentliche Schlüssel per E-Mail senden  
								Deinem Partner die Unterschrift senden (natürlich unterschrieben und verschlüsselt). Dein Partner sollte genau das selbe tun.
								<br /><br />
								Erhältst Du nun den unterschriebenen Schlüssel Deines Partners, speicherst Du ihn ab, lädst ihn über die Schlüsselverwaltung 
								(Datei > Importieren > Schlüssel im Dateimanager auswählen > "OK") in Deinen Schlüsselbund und anschließend auf einen Keyserver hoch 
								(Siehe <a href="SCHLÜSSELSERVER">Auf Schlüsselserver hochladen</a>).
								<br /><br /><br />
							</p>
							<h4>Besitzervertrauen festlegen</h4>
							<p>
								Damit Enigmail die Vertrauenswürdigkeit einer "Chain of Trust" beurteilen kann und Dir das über empfangenen unterschriebenen E-Mails mitteilen kann, kann man die 
								Vertrauenswürdigkeit des Besitzers festlegen.
								<br /><br />
								Das funktioniert so: In der Schlüsselverwaltung mit der rechten Maustaste auf den betreffenden Schlüssel klicken, dann "Benutzervertrauen festlegen" auswählen,
								dieses festlegen (Meines Wissens nach funktioniert nur "Ich vertraue ihm absolut") und mit "OK" bestätigen.
								
								<br /><br /><br />
								Das war's! Du kannst mir nun (wenn Du willst) testweise <a href="/contact.php">eine E-Mail schreiben</a>!
								<br /><br /><br /><br /><br /><br />
							</p>
 								
 								

 							
 							
							
							
							
								
								
								
								
								
							<!--									
							<a href="/images/blog/privacy/GnuPG/thunderbird-enigmail/2.png" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/blog/privacy/GnuPG/thunderbird-enigmail/2.png" alt="alternative Erklärung">
 							</a>	-->
							
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