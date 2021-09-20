<!DOCTYPE HTML>
<?php include('communication_functions.php'); ?>
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

if(!empty($_POST['price1'])) $price1=$_POST['price1'];
if(!empty($_POST['price2']))  $price2=$_POST['price2'];
if(!empty($_POST['price3']))  $price3=$_POST['price3'];
if(!empty($_POST['price4']))  $price4=$_POST['price4'];
if(!empty($_POST['price5']))  $price5=$_POST['price5'];
if(!empty($_POST['price6']))  $price6=$_POST['price6'];
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
								<h1>Vie courante</h1>
								<p>Sélectionne le type de produit voulu.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Pinte de bière</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price1" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='biere';
											$commune=$_GET['commune'];
											$margin=0.5;											
												if (isset($price1)){
   													$price=htmlspecialchars($price1);
    												send_data($product, $commune, $price, $margin);
												}
											$type=' à l\'unité : ';
											echo '<p><strong>Prix';
											echo $type;
											echo average_price($product, $commune);
											echo ' FCFA</strong></p>';
											?>
										
										
										</div>
									</a>
								</article>




								<article class="style2">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Paquet de cigarettes</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price2" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='cigarette';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price2)){
												   $price=htmlspecialchars($price2);
												send_data($product, $commune, $price, $margin);
											}
										$type=' à l\'unité : ';
										echo '<p><strong>Prix';
										echo $type;
										echo average_price($product, $commune);
										echo ' FCFA</strong></p>';
										?>
										
										
										</div>
									</a>
								</article>
								
								
								<article class="style3">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Paire de basket</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price3" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='basket';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price3)){
												   $price=htmlspecialchars($price3);
												send_data($product, $commune, $price, $margin);
											}
										$type=' à la paire : ';
										echo '<p><strong>Prix';
										echo $type;
										echo average_price($product, $commune);
										echo ' FCFA</strong></p>';
										?>
									</div>
									</a>
								</article>		

								
								<article class="style4">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Oeufs</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price4" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='oeuf';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price4)){
												   $price=htmlspecialchars($price4);
												send_data($product, $commune, $price, $margin);
											}
										$type=' à l\'unité : ';
										echo '<p><strong>Prix';
										echo $type;
										echo average_price($product, $commune);
										echo ' FCFA</strong></p>';
										?>
										
										
										</div>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Bouteille d'eau</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price5" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='eau';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price5)){
												   $price=htmlspecialchars($price5);
												send_data($product, $commune, $price, $margin);
											}
										$type=' à l\'unité : ';
										echo '<p><strong>Prix';
										echo $type;
										echo average_price($product, $commune);
										echo ' FCFA</strong></p>';
										?>
										
										
										</div>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Bouteille de soda</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price6" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='soda';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price6)){
												   $price=htmlspecialchars($price6);
												send_data($product, $commune, $price, $margin);
											}
										$type=' à l\'unité : ';
										echo '<p><strong>Prix';
										echo $type;
										echo average_price($product, $commune);
										echo ' FCFA</strong></p>';
										?>
										
										
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