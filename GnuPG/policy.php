<!DOCTYPE html>
<html>

	<head>
		<?php 

			include "../template/head/head.php";
		?>
	</head>
	<body>
		<?php 
			include '../template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include '../template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">

							<p>SORRY! UNDER CONSTRUCTION!</p>

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">

							<h1>GnuPG-Key-Policy</h1>
							<p>
								
								<br /><br />
								You can change the end of this URL from .php to .txt to view a signed plain-text copy of this policy.
								<br /><br />
								This is my policy statement for the following GPG keys: 
								<br /><br />
							</p>
							<h3>Offline long term identity key</h3>
							<p>
									Used for key-signing:
							</p>
								<code class="codeblock">
									pub&emsp;&emsp;4096R/8B2E508B 2017-01-22 [verfällt: 2018-01-22]<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek (offline long-term identity key)<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek <h****d@niemeczek.at>
								</code>
							<p>
								<a href="">Get the key</a>
								<br /><br /><br /><br />
							</p>
							<h3>Key for everyday use:</h3>
							<p>
								<code class="codeblock">
									pub&emsp;&emsp;4096R/68A0EF1D 2016-10-12<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;h****d@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek (*******) &lt;e*******@student.tuwien.ac.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;deb_mailinglist@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;support@debianadmin.net&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;d******a@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;******.*****@gmail.com&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek (Jabber-Account) &lt;h***m@jabber.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;[jpeg image of size 47390]<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;******.*********@tuwien.ac.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;p********r@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;*****@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;a***e@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;s******y@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;h********r@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;w*******r@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;i**o@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;o****e@niemeczek.at&gt;<br />
									uid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harald Niemeczek &lt;k*****t@niemeczek.at&gt;<br />
									sub&emsp;&emsp;4096R/06EC4A8C 2016-10-12 [verfällt: 2017-10-12]<br />
									sub&emsp;&emsp;4096R/0B9D6722 2016-10-12 [verfällt: 2017-10-12]<br />
									sub&emsp;&emsp;4096R/94723897 2016-10-12<br />
								</code>
								<a href="">Get the key</a>
								<br /><br />
								Some Mail-Adresseses are hidden for privacy and spam-protection reasons.
								<br /><br /><br /><br />
							</p>

							<h2>Key security policy</h2>
							<p>
								My <i>offline long term identity key</i> is an offline key, stored only on a USB-Stick 
								kept encrypted and password protected at a secret place. There is an encrypted backup that is kept at a secure place, too.  
								The pass-phrase on the key consists of more than ten random characters chosen from among the 96 printable ASCII characters. 
								<br /><br />
								When I need to use this key, I boot a Tails live system that is only used for handling GPG keys on a PC with no network connection. 
								Tails uses an encrypted storage, where the keys are loaded from. Any data that needs to be signed or worked with is stored on my PCs hard drive accessed via Tails.
								
								The offline long term identity key will be used to:
							</p>
								<ul>
									<li>Sign my <i>key for everyday use</i></li>
									<li>Sign other peoples keys</li>
								</ul>
							<p>
								The offline long term identity key does not expire. I will revoke it if I have a specific reason to believe that it has been compromised.
								<br />
								<br />
								My <b>key for everyday use</b> is separated in the primary key and two sub-keys.<br />
								The primary key was kept at my PC for a long time and is now kept with the offline long term identity key. <br />
								The subkeys are used for everyday encryption and stored at my PC and my mobile phone as well as a few encrypted backups. <br />
								I also have a tails system with the keys available in the encrypted storage in case I need to work on a PC that is not my own.
								<br /><br />
								The subkeys expire every year, the primary key expires every five years. <br />
								I will revoke them in the event that a non-encrypted key is lost, stolen, if any vulnerability is discovered that could allow a 
								host device to extract keys from it, if I discover a forged or unauthorised signature or if the key has become insecure in another way.
								<br /><br />
							</p>
							<h2>Certification policy</h2>
							<p>
								I am ready to sign keys belonging to ...
							</p>
							
							<ul>
								<li style="list-style-type: none;">... natural persons</li>
								<li style="list-style-type: none;">... corporate entities (corporations, organisation)</li>
								<li style="list-style-type: none;">... groups (or shared keys)</li>
								<li style="list-style-type: none;">... a natural person or group using a pseudonym</li>
							</ul>
							<p>
								
								
								Certifying signatures from my offline long term identity key carry the following semantics:
								<br /><br />
								<br /><br />
								
								
								
								
							</p>	
								<h3>Signature type 0x13 (positive certification):</h3>
								<blockquote class="greyquote">
									<cite>
										<a href="https://tools.ietf.org/html/rfc4880#section-5.2.1" target="_blank">RFC 4880</a>
									</cite>
									<br />
									The issuer of this certification has done substantial
									verification of the claim of identity.
								</blockquote>
							
								<ul>
									<li>I have a significant personal or professional relationship with this person or company/organisation.</li>
									<li>I have checked this person’s government-issued identification. (Not required for people I have a very close relationship with, for instance my family)</li>
									<li>This person has provided me with his/her key fingerprint in person.</li>
								</ul>
							<p>
								<br /><br />
							
							
							
							
							</p>
							<h3>Signature type 0x12 (casual certification):</h3>
							
								<blockquote class="greyquote">
									<cite>
										<a href="https://tools.ietf.org/html/rfc4880#section-5.2.1" target="_blank">RFC 4880</a>
									</cite>
									<br />
									The issuer of this certification has done some casual
									verification of the claim of identity.
								</blockquote>
							<p>
								
								Either:
							</p>
							<ul>
								<li>
									I have checked this person’s government-issued identification.<br />
									For company/organisation-keys there has to be proven the legitimacy to that key. This can (for instance) be done by a company's owner or an authorized agent (de: Prokurist). 
									Those would have to prove their role by government issued documents or otherwise.
								</li>
								<li>This person has provided me with his/her key fingerprint in person.</li>
							</ul>
							<p>
								-or-:
								<br /><br />
								This person would otherwise qualify for positive certification, but I have done something slightly ad-hoc to verify his/her fingerprint, 
								such as receiving it over an OTR chat session after previously having verified his/her OTR fingerprint in person.
								<br /><br />
								<br /><br />
								
							</p>	
							<h3>Signature type 0x11 (persona certification):</h3>
								
							
								<blockquote class="greyquote">
									<cite>
										<a href="https://tools.ietf.org/html/rfc4880#section-5.2.1" target="_blank">RFC 4880</a>
									</cite>
									<br />
									The issuer of this certification has not done any verification of
									the claim that the owner of this key is the User ID specified.
								</blockquote>
								<br />
							<p>
								I have never used this certification type, but may use it to certify a key belonging to someone with a widely-recognised pseudonym. 
								<br />
								Such a signature would assert my belief that the person who controls that key is the same person whose past work is published under 
								that pseudonym, but would not assert anything in particular about how I justify that belief.
								<br />
								<br />
								<br />
								
								
								
								
								
								
							</p>	
							<h3>Signature type 0x10 (generic certification):</h3>
							
								<blockquote class="greyquote">
									<cite>
										<a href="https://tools.ietf.org/html/rfc4880#section-5.2.1" target="_blank">RFC 4880</a>
									</cite>
									<br />
									The issuer of this certification does not make any particular
									assertion as to how well the certifier has checked that the owner
									of the key is in fact the person described by the User ID.
								</blockquote>
							<p>
								<br />
								I do not use this signature type.
								<br /><br /><br /><br />
							</p>
							<h2>Key signing procedure</h2>
							<p>
								After meeting in person, exchanging the key-fingerprints and verifying the identity, 
								I will sign the keys at home and send them encrypted with the signed key to the
								mail address that is written in the main User ID. If the main user ID does not contain a 
								mail address, the key will be sent to another user ID's mail address. 
								<br /><br /><br /><br />
							</p>
							<h2>Signing policy</h2>
							
							
								<blockquote class="greyquote">
									<cite>
										<a href="https://tools.ietf.org/html/rfc4880#section-5.2.1" target="_blank">RFC 4880</a>
									</cite>
									<br />
									0x00: Signature of a binary document.<br />
									&emsp;&emsp;This means the signer owns it, created it, or certifies that it has not been modified.
									<br />
									<br />
									0x01: Signature of a canonical text document.<br />
									&emsp;&emspThis means the signer owns it, created it, or certifies that it has not been modified.<br />
									&emsp;&emspThe signature is calculated over the text data with its line endings converted to <CR><LF>.
								</blockquote>
							<p>
								"... that it has not been modified" will, for instance, be the case at forwarded E-Mails.
								
								<br />
								<br />
								The absence of my signature implies nothing; I sometimes send unsigned messages.
								<br />
								<br />
								<br />
								<br />
								This Key Signing Policy is based on https://www.dfranke.us/pgp-key-policy.html (©2014 Daniel Fox Franke), 
								which is licensed under <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
								<br />
								<br />
								This Key Signing Policy is also licensed under <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>, 
								with exception of the upper code-blocks containing my key-data.
								<br />
								<br />
								<a href="policy.txt">Here is a signed text version.</a><br />
								<a href="key-signatures.php">Here is a list of key-signatures I made.</a><br />
								<br /><br />
								<b>Previous versions of this key signing policy:</b>
								<br />
								There are currently no previous versions.
								
								
								
								
								
							</p>
							








						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../template/footer/footer.php';
		?>	
	</body>
</html>

