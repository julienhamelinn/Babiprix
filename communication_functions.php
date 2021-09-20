<?php
//////File that contains the communication function to make the link between php and sql




///Function that calcul the average price of a product in a certain commune, based on the data contained in babiprix.sql
function average_price($product, $commune){
	//opening of the database
	try {
		$price_database = new PDO('mysql:host=localhost;dbname=babiprix;charset=utf8', 'root', 'root'); ///A changer lors de l'hébergement
		$price_database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	//Recuperation of the price data attributed to the right product in the right commune and stocking in $response
	$response = $price_database->prepare('SELECT price FROM prices WHERE commune = ? AND product = ?');
	$response->execute(array($commune, $product));
	
	$average=0;
	$i=0;

	//recuperation of the data and calcul of the average
	while ($data = $response->fetch()) {
		$average = $average+$data['price'];
		$i=$i+1;
	}
	$response->closeCursor();
	if($i!=0){
		$average=$average/$i;
    }
    return $average;
}

//function that get the IP adress of the user
function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//function that controls wether the entered value is correct or not
function data_absurdity_test($commune, $product, $price, $margin, $average){
    if($average==0){
        return TRUE;  //If there is no value, the first value is right.
    }
    elseif($average!=0 && $price>=(1-$margin)*$average && $price<=(1+$margin)*$average){
        return TRUE; //if the value is between 50 and 150% of the average value, the price is declared not absurd
    }
    else{
        return FALSE;
    }
}

//function that send data to the database
function send_data($product, $commune,$price, $margin){
    $average=average_price($product,$commune);
	if(data_absurdity_test($commune, $product, $price, $margin, $average)==TRUE){//Recuperation of the IP adress
	    $IP=getIP();

	    //opening of the database
	    try {
	    	$price_database = new PDO('mysql:host=localhost;dbname=babiprix;charset=utf8', 'root', 'root'); ///A changer lors de l'hébergement
	    } catch (Exception $e) {
	    	die('Erreur : '.$e->getMessage());
	    }

	    //if the user is a new_comer, one just insert another line of price
	    if ($average==0){
	    	//Filling the right case corresponding with the commune in which the price is stated with the use of 
	    $query = $price_database->prepare('INSERT INTO prices(IP, commune, product, price) VALUES(:IP, :commune, :product, :price)');
	    $query->execute(array(
	    		'IP' => $IP,
	    		'commune' => $commune,
	    		'product' => $product,
	    		'price' => $price
	    	));
	    }
 

	    else {
	    	//Update the price value (a user can only upload one price per couple (commune,price))
	    	$query = $price_database->prepare("UPDATE prices SET price = :price WHERE IP = :IP AND product=:product AND commune=:commune");
	    	$query->execute(array('price' => $price,'product' => $product, 'IP' => $IP, 'commune' => $commune)); 
	    }
        echo "<p>Merci d'avoir contribué à Babiprix !</p>";
    }
    else{
        echo "<p>Le prix entré est un peu élevé, regarde Babiprix la prochaine fois ;-) </p>";
    }
}

