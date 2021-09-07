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
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='taxi';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix pour une course de 30 minutes : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>



								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Gbaka </h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php include('communication_functions.php');
											$product='gbaka';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix pour une course de 30 minutes : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>

								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Bateau-bus </h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="transports.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='boat';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix pour une course de 30 minutes : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
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