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
								<h1>Vie courante.</h1>
								<p>Sélectionnez le produit en question.</p>
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
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='biere';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix à l'unité : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
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
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='cigarette';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix à l'unité : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>		
								
								

								<article class="style3">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Paire de baskets</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="divers.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='basket';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix à l'unité : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
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
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price" placeholder="Entrez votre juste prix :)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='oeuf';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix à l'unité : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
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