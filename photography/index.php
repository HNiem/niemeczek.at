<!DOCTYPE html>
<html>

	<head>
		<?php 

			include "../template/head/head.php";
			include "../template/head/lightbox.php";
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
					include "../template/head/lightbox.php";
				?>	
								
				</div>
				<div id="content_area">
					<div id="linke_spalte"> <!-- linke Spalte -->
						<div class="databox newsbox">
							<?php 
								include '../template/fotografie/fotografie.php';
							?>	
							

						</div>
						
					</div>	
					<div id="haupt_spalte"> <!-- haupt Spalte -->	
						<div class="databox contentbox">
							<h1>Photography</h1>
							<p>In that area of my website I show some of the photos I made. 
							In photography I especially like messing around with time, for instance by making long-exposure images, stacking images taken over a long time to a single one 
							or creating a time-lapse out of several hundred images.
							<br /><br />
							NOTE: Most of the pages there are still in German, but the images can also be enjoyed without description.
							<br /><br /><br />
							</p>
							<a href="/images/fotografie/naturfotografie/SchornsteinAbgase/DSC_0007.jpg" data-lightbox="bild-1" data-title="Abgase einer Fabrik">
   								<img class="img-full" src="/images/fotografie/naturfotografie/SchornsteinAbgase/DSC_0007-small.jpg" alt="Abgase einer Fabrik">
 							</a>
							<a href="/images/fotografie/starlapse/badkleinkirchheim-2015-Sommerurlaub.jpg" data-lightbox="bild-1" data-title="Bildunterschrift">
   								<img class="img-full" src="/images/fotografie/starlapse/badkleinkirchheim-2015-Sommerurlaub-small.png" alt="alternative Erklärung">
 							</a>						
 						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../template/footer/footer.php';

		?>	
	</body>
</html>

