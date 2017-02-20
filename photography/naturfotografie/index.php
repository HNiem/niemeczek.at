<!DOCTYPE html>
<html>
	<head>
		<?php 

			include "../../template/head/head.php";
			include "../../template/head/lightbox.php";
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

							<h1>Naturfotografie</h1>
							<div class="height-10px"></div>
							<div class="height-10px"></div>
							<div class="height-10px"></div>

							<section class="preview">
									<a href="/photography/naturfotografie/blumenundgräser.php">
										<div class="preview-img">
											<img src="/images/fotografie/naturfotografie/blumenundgr%C3%A4ser/grashalm-mit-wassertropfen-small.jpg" alt="Gras mit Tautropfen" />
										</div>
										<div class="preview-text">
											<h2>Blumen und Gräser</h2>
											<p>
												Die Schönheit eines Büschels Gras, einer Blüte oder eines Metallgitters in Bildern festgehalten.
											</p>
											<p class="preview-more">
												mehr...
											</p>
										</div>
									</a>
								</section>
								<div class="height-10px"></div>
								<div class="height-10px"></div>
								<div class="height-10px"></div>
								<p>
									More content is coming soon!
								</p>

							
						</div>
					</div>					
	
				</div>
	
		</section>
		<?php 
			include '../../template/footer/footer.php';
		?>	
		<script src="/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>

