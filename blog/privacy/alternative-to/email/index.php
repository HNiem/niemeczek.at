<!DOCTYPE html>
<html>
	<head>
		<?php 

			include "../../../../template/head/head.php";
			include "../../../../template/head/lightbox.php";
		?>
	</head>
	<body>
		<?php 
			include '../../../../template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include '../../../../template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
							<?php 
								include '../../../../template/blog/privacy/privacy.php';
								include '../../../../template/blog/privacy/GnuPG.php';
							?>	
							

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>E-Mail Anbieter</h1>
							<p>
								<br /><br />
								Eigentlich sollte es klar sein: Es gibt kein gratis. Das gilt auch für E-Mail. <br />
								GMail, GMX, web.de und andere Freemail-Anbieter machen ihr Geschäft mit Deinen Daten. Sie analysieren gesendete und empfangene E-Mails, 
								um Werbung schalten zu können oder verkaufen die Daten. Dadurch bist Du nicht Kunde, sondern Produkt. Sollte es einmal Probleme mit 
								Deinem Mailaccount geben, kannst Du Dich nicht an den Support wenden, denn den gibt es nicht (oder ist sehr teuer).
								
								<br /><br />
								
								Wer seine Mailadresse bei einem Internetprovider hat ist so an diesen gebunden und tut sich bei einem Wechsel zu einem anderen Internetprovider sehr schwer.
								Außerdem sind Mailserver bei Internetprovidern nicht das Kerngeschäft und deshalb möglicherweise leichter angreifbar.
								
								<br /><br />
								Eine Alternative dazu ist, seinen Mailserver selbst zu hosten. Das setzt jedoch viel Erfahrung oder die Bereitschaft viele Stunden zu lernen voraus.
								
								<br /><br />
								Die für die meisten Menschen weitaus bessere Alternative ist, auf einen Mailprovider umzusteigen. Im Folgenden seien zwei Beispiele genannt. 
								Die beiden Unternehmen haben ihren Sitz in Deutschland und unterliegen daher den relativ strengen deutschen/europäischen Datenschutzbestimmungen.
								<br /><br />
								<br /><br />
							</p>
							
							<h3 id="POSTEO">Posteo.de</h3>
							<p>
								<a target="_blank" href="https://posteo.de"> Posteo</a> bietet für einen Euro monatlich eine E-Mail Adresse (+zwei Alias-Adressen) mit 2GB Postfachgröße (erweiterbar), 
								Posteingangsverschlüsselung, Zwei-Faktor-Authentifizierung, synchronisierbares, verschlüsselbares Adressbuch, drei synchronisierbare, 
								verschlüsselbare Kalender usw. an. 
								<br /><br />
								Der Strom wird von von Greepeace Energy (100% Ökostrom) bezogen, es wird ressourcenschonende 
								Hardware benutzt und auch sonst wird stark auf Nachhaltigkeit gesetzt. Die Server stehen in Deutschland.
								<br /><br />
								Posteo gibt an, vollkommen auf Datenhandel oder Datenweitergabe zu verzichten, verlangt nicht die Angabe persönlicher Daten und sogar 
								eine anonyme Zahlung (Bargeld per Post) ist möglich.
								Mails von einer eigenen Domain (das teil rechts vom @ in der Mailadresse) zu versenden ist leider nicht möglich, da dafür persönliche 
								Daten erhoben werden müssten.<sup>[1]</sup> Auch ein <a href="/blog/privacy/alternative-to/whatsapp/#XMPP">XMPP-Server</a> ist derzeit noch nicht verfügbar.
								(Ist laut Anfrage an den Support im Herbst 2016 geplant und befindet sich derzeit in rechtlicher Prüfung). 
								Einzelne Dienste (weitere Alias-Adressen, mehr Speicherplatz etc.) können zugebucht werden.
								Weitere Informationen sind unter <a target="_blank" href="https://posteo.de/site/leistungen">Leistungen</a> einzusehen. 
								<br /><br />
								<br /><br />
							</p>
							<h3 id="MAILBOX-ORG">Mailbox.org</h3>
							<p>
								Auch <a target="_blank" href="https://mailbox.org/">Mailbox.org</a> bietet für einen Euro monatlich ein E-Mail Postfach mit 2GB Speicherplatz (erweiterbar) und 
								drei Alias-Adressen, Posteingangsverschlüsselung, Zwei-Faktor-Authentifizierung, synchronisierbarem Adressbuch, synchronisierbarem Kalender, synchronisierbarem 
								Aufgabenplaner und über den Browser zugreifbare Office-Programme mit 100 MB Dateispeicher. Die gesamten Sicherheitsfeatures sind 
								<a target="_blank" href="https://mailbox.org/sicherheit-privacy-bei-mailbox-org/">hier</a> einsehbar.
								<br /><br />
								Die Server und Büros werden mit 100% Ökostrom verschiedener Anbieter betrieben. Die Bezahlung verschiedener Pakete
								ist per per Überweisung, Paypal, Bitcoin, Bargeldeinzahlung auf Girokonto oder Bargeld per Post möglich, die vollkommen anonyme Nutzung des Services ebenfalls 
								möglich. Das Anlegen eines Testaccounts für 30 Tage ist ebenfalls möglich (mit gewissen Einschränkungen).
								<br /><br />
								Zudem ist ein <a target="_blank" href="/blog/privacy/alternative-to/whatsapp/#XMPP">XMPP-Server</a> für Kunden verfügbar. 
								<a target="_blank" href="https://support.mailbox.org/knowledge-base/article/e-mail-adressen-der-eigenen-domain-nutzen">Mailadressen der eigenen Domain</a> 
								<a target="_blank" href="https://support.mailbox.org/knowledge-base/article/jabber-service-mit-eigener-domain-nutzen">(und XMPP)</a> können 
								ebenfalls genutzt werden. Die Domain kann aber nicht über mailbox.org registriert werden, dies muss über einen externen Anbieter geschehen.
								<br /><br />
								Es ist möglich, seine PGP Schlüsseln hochzuladen, um damit online verschlüsseln zu können. Das sehe ich aber sehr kritisch, 
								private PGP-Keys haben anderswo als am eigenen Rechner nichts zu suchen. Besser ist es das 
								<a href="https://www.mailvelope.com/de" target="_blank">Mailvelope-Plugin</a>, 
								<a href="/blog/privacy/GnuPG/thunderbird-enigmail.php"> Enigmail in Thunderbird</a> oder auf Android <a href="/blog/privacy/GnuPG/android.php">OpenKeyChain 
								mit K-9-Mail</a> zu nutzen.
								<br /><br />
								<br /><br />
								
								
								
							</p>
							<hr />
							<p>
							<br />
								<b>Transparenzhinweis:</b> Die Beschreibungen der Unternehmen sind übrigens freiwillig. Ich erhalte dafür weder Geld noch andere Leistungen. Ich bin nicht / war noch nicht Kunde der
								beiden Unternehmen und kann aus diesem Grund über keine eigenen Erfahrungen berichten, die Texte sind auf Basis der Webseiten und Rückfragen beim Support 
								entstanden. Ich habe am 2017-12-27 ein Mail an beide Unternehmen gesendet. Eine Antwort kam nur von mailbox.org, diese baten um einige Ergänzungen, die ich durchgeführt habe. 
								<br />
								<br />
								[1] Die sogenannten Whois-Informationen, die für gewöhnlich eine Menge über den Domaininhaber verraten, lassen sich jedoch auch verbergen. 
								Mailbox.org beschreibt dies auch in den eigenen 
								<a href="https://support.mailbox.org/knowledge-base/article/e-mail-adressen-der-eigenen-domain-nutzen" target="_blank">FAQ</a>.
							</p>






							
						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../../../../template/footer/footer.php';
		?>	
		<script src="/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>




