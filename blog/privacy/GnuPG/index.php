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
							<h1>Verschlüsselung mit PGP</h1>
							<p><br /><br /></p>
							<h3>Grundlagen E-Mail</h3>
							<p>
								Wenn Du ein E-Mail versendest (beispielsweise an mich), dann sendest Du das E-Mail nicht direkt an mich, 
								sondern erst mal an Deinen E-Mail-Provider (Gmail, Gmx, ...). Die Verbindung ("Protokoll") heißt SMTP und ist meist verschlüsselt. 
								Der E-Mail-Provider leitet Deine Mail dann über das Internet weiter zu mir. Da einige E-Mail Provider noch keine 
								Verschlüsselung anbieten, besteht die Gefahr, dass E-Mails hier unverschlüsselt oder nur schlecht verschlüsselt 
								übertragen werden. Kriminelle und Geheimdienste haben hier leichtes Spiel und können die Verbindungen (E-Mails) mitlesen.
								Mein E-Mail-Provider gibt das empfangene E-Mail verschlüsselt über die "Protokolle" SMTP oder POP verschlüsselt an meinen PC/Handy 
								weiter, wo ich es nun lesen kann. 
								<br />
								<br />
								Nun ist allerdings nicht nur die Verbindung zwischen den E-Mail Providern recht leicht lesbar, sondern auf den Servern der E-Mail Provider
								liegt die E-Mail ebenfalls im Klartext (unverschlüsselt) vor. Das wird beispielsweise genutzt, um auszuwerten, auf welche Werbung Du besonders 
								ansprichst, damit Dein E-Mail-Provider mit Dir Geld verdienen kann. Außerdem kam im Rahmen der Veröffentlichung der 
								<a href="https://de.wikipedia.org/wiki/Edward_Snowden">Snowden-Leaks</a> heraus, dass die NSA 
								<a href="https://www.washingtonpost.com/world/national-security/nsa-infiltrates-links-to-yahoo-google-data-centers-worldwide-snowden-documents-say/2013/10/30/e51d661e-4166-11e3-8b74-d89d714ca4dd_story.html">
								Zugriff auf die Datencenter von Google und Yahoo</a> hat. 
								<br />
								<br />
								Ein zweiter wichtiger Punkt ist, dass die Absender von E-Mails ziemlich einfach gefälscht werden können. Im Prinzip kann jeder 
								ein Mail mit einer beliebigen Absenderadresse* versenden. Das macht es Kriminellen sehr leicht - Einem Link in einer E-Mail 
								eines guten Freundes wird man ja nicht misstrauen!
								<br /><br /><br /><br />
							</p>
							<h3>Grundlagen PGP</h3>
							<p>
								Die Lösung dazu ist PGP (Pretty Good Privacy, auch GPG, GnuPG, GNU Privacy Guard genannt). Bei PGP besitzt jeder zwei Schlüsseln, 
								einen öffentlichen (Public Key) und einen privaten (Private Key). Der öffentliche Schlüssel wird verbreitet, indem er auf sogenannte
								Schlüsselserver hochgeladen, auf die eigene Webseite gestellt oder an E-Mail angehängt wird. Der Private Key <b>muss</b> geheim 
								gehalten werden und verbleibt am eigenen Rechner.
								<br />
								<br />
								Mit dem <b>Private Key</b> können Nachrichten unterschrieben werden. Das heißt, dass jeder, der den dazupassenden Public Key besitzt 
								zweifelsfrei die Echtheit einer Nachricht feststellen kann. Auch eine Veränderung des Nachrichtentextes ist leicht feststellbar!
								Außerdem können mit Hilfe des Public Keys verschlüsselte Nachrichten entschlüsselt werden.
								<br /><br />
								Mit dem <b>Public Key</b> können Nachrichten verschlüsselt werden, jedoch nicht mehr entschlüsselt. Zudem können Unterschriften damit überprüft werden.
								
								<br /><br />
								Dieses Verfahren nennt man eine <b>asymetrische Verschlüsselung</b> - Ein Teil des Schlüsselpaares wird verwendet zum verschlüsseln, das andere zum entschlüsseln.
								"Verschlüsselt" man mit dem privaten Schlüssel, nennt man das eine Unterschrift, die mit dem öffentlichen Schlüssel "entschlüsselt", also überprüft werden kann. 
								Ein verschlüsseltes E-Mail kann immer noch von jedem erstellt werden (Jeder kann einen Text mit dem Public Key verschlüsseln und per Mail versenden). 
								Daher ist es für eine sichere Kommunikation notwendig, dass E-Mails sowohl verschlüsselt als auch signiert werden.
								<br /><br />
								Trotzdem sind noch Metadaten (Also wann das E-Mail gesendet wurde, von wem es an wen gesendet wurde, die IP-Adresse des Absenders und damit 
								von wo der Absender das Mail gesendet hat, den Betreff der Nachricht etc.) einfach lesbar. Weitere Informationen dazu gibt es <a href="/blog/privacy/email/">hier</a>. 
								<br /><br />
								<b>Wie garantiert man die Echtheit eines öffentlichen Schlüssels?</b> (Der könnte ja auch gefälscht worden sein!)
								<br />
								Es ist nicht immer einfach möglich, den Empfänger eines E-Mail direkt zu treffen, um so seinen Schlüssel zu erhalten. Meist lädt man die Schlüsseln 
								des Empfängers von einem Key-Server herunter. Die Echtheit der Schlüsseln wird durch ein "Web of Trust", ein "Vertrauensnetz" überprüft. 
								<br />
								Das funktioniert so: Mit dem privaten Schlüssel können nicht nur E-Mails, sondern auch andere Daten signiert (unterschrieben) werden. 
								Nun unterschreibt man die privaten Schlüssel seiner Bekannten, die unterschreiben wieder die privaten Schlüssel ihrer Bekannten und so weiter. 
								Nun entsteht ein Netz an Unterschriften, mit durch das man auch die Echtheit der von Servern heruntergelandenen Schlüsseln wildfremder Menschen feststellen kann.
								Das wird dann "Chain of Trust" genannt.
								<br /><br />
								(Mehr Info dazu, wie verbunden wir sind: <a href="https://www.youtube.com/watch?v=TcxZSmzPw8k" target="_blank">Veritasium: The Science of Six Degrees of Separation (YouTube)</a> und
								<a href="2veritasium" target="_blank">2Veritasium: How Connected Are We? (YouTube)</a>)
								<br /><br />
								Um Schlüssel zu signieren gibt es auch sog. Key Signing Parties.
								<br /><br />
								Für Windows-User geht es <a href="windows.php">hier</a> weiter, Linux-User sparen sich den Schritt der PGP-Installation da die Software in der Regel bereits 
								mit der Distribution ausgeliefert wird. Für Linux-User geht es <a href="linux.php">hier</a> weiter.
							
							
							
							
							
							
								
								<br /><br />
								<br /><br />
								<b>Weitere Info zum Thema:</b>
								<br /><br />
								<a href="http://www.openpgp-schulungen.de/" rel="nofollow">PGP umfangreich und detailliert erklärt. Erst kürzlich entdeckt und schon davon begeistert</a>
								<br />
								<a href="https://www.youtube.com/watch?v=inxNRA4xK1Q" rel="nofollow">Youtube: Mailbox.org erklärt PGP</a>
								<br />
								<a href="https://emailselfdefense.fsf.org/de/" rel="nofollow">Free Software Foundation: Einrichtung unter verschiedenen Betriebssystemen</a>
								<br />
								<a href="https://www.youtube.com/playlist?list=PL3-bM7Aq1pUr8wiX4XFW1hxvH1SlfBtsT" rel="nofollow">Youtube: Sempervideo erklärt PGP</a>
								<br /><br />

								
								<br /><br />
								* Das gilt auch für Faxe und bedingt für Telefonanrufe und SMS.
							</p>
								
								
								
								
								
																
								<br /><br />
							
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