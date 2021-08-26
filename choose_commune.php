<!DOCTYPE HTML>

<html>

<!-- Head -->
	<?php $title="Recherche par commune" ?>
	<?php include("head.php"); ?>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include("header.php"); ?>

				<!-- Menu -->
					<?php include("menu.php"); ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Recherche par commune</h1>
							<p> Sélectionnez la commune d'Abidjan dans laquelle vous vous trouvez pour consulter les prix des biens et des services de votre choix.	
				<!--map-->
							<div class="map">
								<div class="main">
									<script src="cmap/France-map.js"></script>
									<script>francefree(); </script>

								</div>


							</div>
						</div>
					</div>



				<!-- Footer -->
					<?php include("footer.php"); ?>

			</div>

		<!-- Scripts -->
			<?php include("scripts.php") ?>



	</body>
</html>