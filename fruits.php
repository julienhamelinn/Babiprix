<!DOCTYPE HTML>

<?php include('communication_functions.php');?>
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
								<h1>Fruits et légumes</h1>
								<p>Sélectionnez le produit en question</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Bananes</h2>
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
											$product='banane';
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
									<h2>Mangues</h2>
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
											$product='mangue';
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
									<h2>Ananas</h2>
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
											$product='ananas';
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
									<h2>Tomates </h2>
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
											$product='tomate';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix au kilo : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>



								<article class="style4">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Concombres </h2>
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
											$product='concombre';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix au kilo : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>



								<article class="style5">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Pomme de terre</h2>
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
											$product='patate';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix au kilo : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>



								<article class="style6">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Fruits de la passion</h2>
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
											$product='passion';
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
								
								
								
								<article class="style7">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Avocats</h2>
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
											$product='avocat';
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



								<article class="style8">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Pommes</h2>
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
											$product='pomme';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix au kilo : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>



								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Oranges</h2>
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
											$product='orange';
											$commune=$_GET['commune'];
												if (isset($_POST['price'])){
   													$price=htmlspecialchars($_POST['price']);
    												$IP=getIP();
    												send_data($product, $commune, $price);
    											echo 'Merci d\'avoir contribué à babiprix ! <br/>';
												}
												?>
										
										
											<p>Prix au kilo : <strong><?php echo round(average_price($product, $commune),-1)?> FCFA</strong></p>
										</div>
									</a>
								</article>



								<article class="style2">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Papayes</h2>
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
											$product='papaye';
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
									<h2>Aubergine</h2>
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
											$product='aubergine';
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