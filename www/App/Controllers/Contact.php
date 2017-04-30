<?php 

	if ( $_POST ) {
		
		if ( isset($_POST['contacter']) ) {
			
			var_dump($_POST);

		}
		
	} else {
		header('location:../../index.php');
	}