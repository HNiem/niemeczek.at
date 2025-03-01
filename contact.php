<!DOCTYPE html>
<html>

	<head>
		<?php 

			include "template/head/head.php";
		?>
	</head>
	<body>
		<?php 
			include 'template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include 'template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
									<?php 
										include 'template/donate/donate.php';
									?>
						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>Contact</h1>
							<p>
								You can contact me via:
								<ul>
									<li>
										E-Mail: <a href="mailto:postmaster@niemeczek.at?subject=Request%20on%20niemeczek.at%20(Contact)%20(Don!%20Change!)">postmaster@niemeczek.at</a> (Encryption via <a href="/GnuPG/">GPG</a> is desired.)
									</li>
									<li>
										XMPP/Jabber: <a href="xmpp:postmaster@niemeczek.at">postmaster@niemeczek.at</a>, see below for OMEMO-Key
									</li>
									<li>
										<a href="https://twitter.com/HNieme" target="_blank">Twitter</a> (rarely visited!)
									</li>
									<li>
										Telefon/Phone: <a href="tel:+4367761208583">+4367761208583</a> - Please respect that I live in Europe and really like undisturbed sleep during the night and early morning.
									</li>
								</ul>
								<br /><br />
							</p>
							<p>
								
								<br />
								<a href="https://github.com/HNieme/" target="_blank">Github</a>
								<br /><br /><br />
								
							</p>	
							<h2>PGP-Keys:</h2>
							<p>
								<a href="/GnuPG">What is PGP?</a>
								<br /><br />
								<b>Key for usual signing and encrypting:</b> 
								<br />
								<a href="/GnuPG/Harald Niemeczek harald@niemeczek.at (0x68A0EF1D) pub.asc">0x68A0EF1D</a>  -  
								Fingerprint: 9258 49E8 4B61 5C76 235A DE49 FD27 9AD7 68A0 EF1D
								<br /><br />
								This key uses <a target="_blank" href="https://wiki.debian.org/Subkeys">Subkeys</a>, the master key is stored as an offline key, so that if there happens something, 
								I only need to replace the subkeys. These are rotated every 2 years, too. This key can be considered to have low security level. It is signed by my 
								<br /><br />
								<b>Keysigning Key</b>
								<br />
								<a href="/GnuPG/Harald Niemeczek (offline long-term identity key) (0x8B2E508B) pub.asc">0x8B2E508B</a>  -  
								Fingerprint: 5A64 3A84 3226 9551 F76A 6A9B D059 3ABB 8B2E 508B
								<br /><br />
								This is an offline key, only used to sign (my) other keys and as my connection to the web of trust. This key can be considered to have a high level of security.
								
								<br /><br />
								<a href="https://keybase.io/hnieme">Keybase.io</a>
								
								
								
								<br /><br />
								<b><a target="_blank" href="https://www.heise.de/security/artikel/OMEMO-fuer-Jabber-eine-Einordnung-3603601.html" >OMEMO</a>-Fingerprint:</b> 
								<br />
								d6e3efb6 11f2203c 3543f765 9a3ccfe3 e03ed899 41f69dfb a1c2679d 3d02f217
								<br />
								(for <a href="xmpp:postmaster@niemeczek.at">postmaster@niemeczek.at</a>)
								<br /><br />
							</p>
							

						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include 'template/footer/footer.php';
		?>	
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
