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
						<h1>Bienvenu(e) sur Babiprix, la solution colaborative pour consommer au juste prix dans les dédales d'Abidjan</h1>
				<p>Grâce à sa communauté, Babiprix recense et détermine le vrai prix des biens et des services de Babi. Chaque utilisateur est donc invité à rentrer le prix qu'il juge bon pour telle ou telle chose pour que comme lui, un autre puisse déjouer les tentatives d'arnaques.</p>
				<p>Sélectionne la commune d'Abidjan dans laquelle tu te trouves pour consulter les prix des biens et des services de ton choix.</p>
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