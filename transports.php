<!DOCTYPE HTML>

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
								<h1>Transports<br>
									Sélectionnez le type de transport voulu.
								</h1>
								<p>Sélectionnez le type de transport voulu.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
										<h2>Taxi </h2>
											<div class="wrap">
  												<div class="form">
      												<input type="text" class="searchTerm" placeholder="Entrez votre juste prix :)">
      												<button type="submit" class="searchButton">
       													<i class="fa fa-arrow-up"></i>
     												</button>
  												</div>
											</div>
										
										<div class="content">
											<p>Prix pour une course de 30 minutes :</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="assets\images\pic02.jpg" alt="" />
									</span>
									<a>
										<h2>Gbaka</h2>
										<div class="content">
											<p>Prix pour une course de 30 minutes :</p>
										</div>
									</a>
								</article>

								<article class="style3">
									<span class="image">
										<img src="assets\images\pic03.jpg" alt="" />
									</span>
									<a>
										<h2>Car intercité</h2>
										<div class="content">
											<p>Prix à l'heure de route : </p>
										</div>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="assets\images\pic04.jpg" alt="" />
									</span>
									<a>
										<h2>Bus</h2>
										<div class="content">
											<p>Prix du tiquet :</p>
										</div>
									</a>
								</article>
								
								<article class="style5">
									<span class="image">
										<img src="assets\images\pic04.jpg" alt="" />
									</span>
									<a>
										<h2>Bateau bus</h2>
										<div class="content">
											<p>Prix du tiquet :</p>
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