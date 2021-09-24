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
if(!empty($_POST['price5'])) $price5=$_POST['price5'];
if(!empty($_POST['price6']))  $price6=$_POST['price6'];
if(!empty($_POST['price7']))  $price7=$_POST['price7'];
if(!empty($_POST['price8']))  $price8=$_POST['price8'];
if(!empty($_POST['price9'])) $price9=$_POST['price9'];
if(!empty($_POST['price10']))  $price10=$_POST['price10'];
if(!empty($_POST['price11']))  $price11=$_POST['price11'];
if(!empty($_POST['price12']))  $price12=$_POST['price12'];
if(!empty($_POST['price13']))  $price13=$_POST['price13'];
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
								<h1>Fruits et légumes</h1>
								<p>Sélectionne le type de produit voulu.</p>
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
      													<input type="text" class="searchTerm" name="price1" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='banane';
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
									<h2>Mangues</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price2" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='mangue';
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
									<h2>Ananas</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price3" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='ananas';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price3)){
												   $price=htmlspecialchars($price3);
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

								
								<article class="style4">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Tomates</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price4" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='tomate';
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
									<h2>Concombres</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price5" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='concombre';
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
									<h2>Pommes de terre</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price6" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='patate';
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

								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Fruits de la passion</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price7" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='passion';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price7)){
												   $price=htmlspecialchars($price7);
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
									<h2>Avocats</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price8" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='avocat';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price8)){
												   $price=htmlspecialchars($price8);
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
									<h2>Pommes</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price9" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='pomme';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price9)){
												   $price=htmlspecialchars($price9);
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



								<article class="style4">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Oranges</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price10" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='orange';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price10)){
												   $price=htmlspecialchars($price10);
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
									<h2>Papayes</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price11" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='papaye';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price11)){
												   $price=htmlspecialchars($price11);
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
									<h2>Aubergines</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price12" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='aubergine';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price12)){
												   $price=htmlspecialchars($price12);
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


								<article class="style1">
									<span class="image">
										<img src="assets\images\pic01.jpg" alt="" />
									</span>
									<a>
									<h2>Courgettes</h2>
									<div class="content">
											<div class="wrap">
  												<div class="form">
												  <form action="fruits.php<?php commune_recuperation(); ?>" method="post">
      													<input type="text" class="searchTerm" name="price13" placeholder="Entre le juste prix :-)">
      													<button type="submit" class="searchButton">
       														<i class="fa fa-arrow-up"></i>
     													</button>
													</form>
  												</div>
											</div>
											<?php 
											$product='courgette';
											$commune=$_GET['commune'];
											$margin=0.5;											
											if (isset($price13)){
												   $price=htmlspecialchars($price13);
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