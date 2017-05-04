<?php 
	
	session_start();
	$dirToIndex = '../../index.php';
	$_SESSION['flash'] = [];
	$_SESSION['miss']  = [];
	$_SESSION['old']   = [];

	if ( $_POST ) {
		
		if ( isset($_POST['inscription-event']) ) {
			
			$required = ['nom', 'prenom', 'mail', 'telephone', 'message'];
			$fails = 0;

			// if empty
			foreach ($required as $key) {
				if ( empty($_POST[$key]) || $_POST[$key] == '' ) {
					$_SESSION['miss'][$key] = $_POST[$key];
					$fails++;
				}
			}
			
			if ( $fails > 0 ) {
				$_SESSION['flash'][] = [
					'type' => 'error',
					'message' => 'Les champs avec astérisque sont obligatoir.'
				];
			} else {
				

				$_SESSION['flash'][] = [
					'type' => 'successe',
					'message' => 'Le mail à bien été envoyé nous vous répondrons dans les plus bref délais.'
				];
			}

		}
		
	} else {
		header('location:'. $dirToIndex);
	}