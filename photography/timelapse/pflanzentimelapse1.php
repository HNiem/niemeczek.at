<!DOCTYPE html>
<html>

	<head>
		<?php 

			include "../../template/head/head.php";
		?>
	</head>
	<body>
		<?php 
			include '../../template/header/header.php';
		?>

		<section class="tabellen_zelle maximale_hoehe">
		
				<div id="headerbildhintergrund">
				<?php 
					include '../../template/headerbild/headerbild.php';
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
							<?php 
								include '../../template/fotografie/fotografie.php';
							?>	
							

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>Timelapse of germinating seeds</h1>
							<img src="/images/fotografie/timelapse/zeitraffer-titelbild-2.jpg" alt="" width="1px" height="1px" style="float: left;" />
							<p>
							</p>
							<p>
								<video class="video-full" controls>
									<source src="/images/fotografie/timelapse/Pflanzentimelapse1.mp4" type="video/mp4">
							<!--		<source src="/images/fotografie/timelapse/2015_08_05_Bad_Kleinkirchheim_Wanderung_alleine_TIMELAPSE_720pHDTV-OriginalProportions_1083x720.webm" type="video/webm">
									<source src="/images/fotografie/timelapse/2015_08_05_Bad_Kleinkirchheim_Wanderung_alleine_TIMELAPSE_720pHDTV-OriginalProportions_1083x720.ogv" type="video/ogg"> -->
									Ups. Dein Browser unterstützt keine OGG/WebM-HTML5-Videos. Versuche ihn zu updaten oder nutze einen anderen.
								</video>	
							</p>
						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../../template/footer/footer.php';
		?>	
	</body>
</html>

