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
							<h1>Diverses zum Thema Privatspäre und Internet-Sicherheit</h1>
							<p>
								<br /><br />
							
								<?php 
									include '003_preview_Passwörter_und_Passwortmanager.php'; 
									include '002_preview_Erpresser-E-Mails.php'; 
								?>
							
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











