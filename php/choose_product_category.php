<!DOCTYPE HTML>

<!--Function for the recuperation of the commune in case the user used the "Recherche par commune" option -->



<html>

<!--Function for the recuperation of the communde id if the user chose to go through the "Rechercher par commune" option-->
<?php
function commune_recuperation()
{
	if (isset($_GET['commune']))
	{
		echo '?commune='.$_GET['commune'];
	}
}
?>

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
							<header>
								<h1>Choix de la catégorie de bien ou de service</h1>
								<p>Sélectionne la catégorie de bien ou de service voulue.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a href="fruits.php<?php commune_recuperation(); ?>">
										<h2>Fruits et légumes</h2>
										<div class="content">
											<p>Pour se régaler dans les nombreux stands de maraichage de rue !</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="assets\images\pic02.jpg" alt="" />
									</span>
									<a href="transports.php<?php commune_recuperation(); ?>">
										<h2>Transports</h2>
										<div class="content">
											<p>Pour se déplacer en toute sérénité et découvrir les nombreux trésors d'Abidjan !</p>
										</div>
									</a>
								</article>

								<article class="style3">
									<span class="image">
										<img src="assets\images\pic03.jpg" alt="" />
									</span>
									<a href="divers.php<?php commune_recuperation(); ?>">
										<h2>Vie courante</h2>
										<div class="content">
										<p>Pour vivre et kiffer sans se ruiner !</p>
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