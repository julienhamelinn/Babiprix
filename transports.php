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
								<h1>Transports
								</h1>
								<p>Sélectionne le type de transport voulu.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Taxi </h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price1" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php
											$product='taxi';
											$commune=$_GET['commune'];
											$margin=1;											
											if (isset($price1)){
												   $price=htmlspecialchars($price1);
												send_data($product, $commune, $price, $margin);
											}
										$type=' pour une course de 10 minutes : ';
										echo '<p><strong>Prix';
										echo $type;
										echo round(average_price($product, $commune),-1);
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
									<h2>Gbaka</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price2" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php
											$product='gbaka';
											$commune=$_GET['commune'];
											$margin=1;											
											if (isset($price2)){
												   $price=htmlspecialchars($price2);
												send_data($product, $commune, $price, $margin);
											}
										$type=' pour une course de 10 minutes : ';
										echo '<p><strong>Prix';
										echo $type;
										echo round(average_price($product, $commune),-1);
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
									<h2>Bateau bus</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price3" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php
											$product='boat';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price3)){
												   $price=htmlspecialchars($price3);
												send_data($product, $commune, $price, $margin);
											}
										$type=' du ticket : ';
										echo '<p><strong>Prix';
										echo $type;
										echo round(average_price($product, $commune),-1);
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
									<h2>Bus</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price4" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php
											$product='bus';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price4)){
												   $price=htmlspecialchars($price4);
												send_data($product, $commune, $price, $margin);
											}
										$type=' du ticket : ';
										echo '<p><strong>Prix';
										echo $type;
										echo round(average_price($product, $commune),-1);
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
									<h2>Location de voiture (avec chauffeur)</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price5" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php
											$product='car';
											$commune=$_GET['commune'];
											$margin=0.2;											
											if (isset($price5)){
												   $price=htmlspecialchars($price5);
												send_data($product, $commune, $price, $margin);
											}
										$type=' à la journée : ';
										echo '<p><strong>Prix';
										echo $type;
										echo round(average_price($product, $commune),-1);
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