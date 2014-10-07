<?php 

	class Lotto {

		static public function draw($min, $max, $limit) {
			$balls = range($min, $max);
			shuffle($balls);
			array_splice($balls, $limit);
			return $balls;
		}


	}

	// Lotto
	//print_r( Lotto::draw(1,49,6) );

	// Euro
	print_r( Lotto::draw(1,50,5) );
	print_r( Lotto::draw(1,11,2) );


 ?>