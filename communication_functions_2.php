<?php


function send_data($commune, $product, $price){
    if(data_absurdity_test($commune, $product, $price)==TRUE){ //the data is sent only if the value is not absurd
        //Recuperation of the IP adress
	    $IP=getIP();

	    //opening of the database
	    try {
	    	$price_database = new PDO('mysql:host=localhost;dbname=babiprix;charset=utf8', 'root', 'root'); ///A changer lors de l'hébergement
	    } catch (Exception $e) {
	    	die('Erreur : '.$e->getMessage());
	    }

	    //if the user is a new_comer, one just insert another line of price
	    if (new_contributor($IP, $product, $commune)==0){
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
        return TRUE;
    }
    else{
        return FALSE;
    }
}

function data_absurdity_test($commune, $product, $price){
    $average=average_price($commune, $product);
    if($average==0){
        return TRUE;  //If there is no value, the first value is right.
    }
    elseif($average!=0 && $price>=0.5*$average && $price<=1.5*$average){
        return TRUE; //if the value is between 50 and 150% of the average value, the price is declared not absurd
    }
    else{
        return FALSE;
    }
}

function average_price($commune, $product){
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

function display($commune, $product, $price, $type){
    $average=average_price($commune,$product);
    $data_sent_test=send_data($commune,$product,$price);
    if($average!=0){
        if($data_sent_test==TRUE){
            echo "<p> Merci d'avoir contribué à Babiprix !</p>"
        }
        else{
            echo "<p>Le prix entré est un peu élevé, regarde Babiprix la prochaine fois ;-) </p>"
        }
        echo '<p><strong>Prix';
		echo $type;
		echo $average;
		echo 'FCFA</strong></p>';
    }

    else{
        echo '<p><strong>Sois le premier à entrer le juste prix pour ce produit dans cette commune !</strong></p>';
    }


}

?>