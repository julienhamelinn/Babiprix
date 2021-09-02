<!DOCTYPE HTML>

<html>

<!-- Head -->
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
							<header>
								<h1>Bienvenu(e) sur Babiprix, la solution colaborative pour consommer au juste prix dans les dédales d'Abidjan</h1>
								<p>Grâce à sa communauté, Babiprix recense et détermine le vrai prix des biens et des services de Babi. Chaque utilisateur est donc invité à rentrer le prix qu'il juge bon pour telle ou telle chose pour que comme lui, un autre puisse déjouer les tentatives d'arnaques.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="assets\images\marche_babi.jpg" alt="" />
									</span>
									<a href="choose_product_category.php">
										<h2>Recherche par produit</h2>
										<div class="content">
											<p>Recherchez un produit et trouvez le prix par commune.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="assets\images\carte_abidjan_carree.jpg" alt="" />
									</span>
									<a href="choose_commune.php">
										<h2>Recherche par commune</h2>
										<div class="content">
											<p>Indiquez la commune dans laquelle vous vous trouvez et le produit recherché et trouvez son juste prix.</p>
										</div>
									</a>
								</article>
								
							</section>
						</div>
					</div>

				<!-- Footer -->
					<?php include("footer.php"); ?>

			</div>

		<!-- Scripts -->
			<?php include("scripts.php") ?>

	</body>
</html>