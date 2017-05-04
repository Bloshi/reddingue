<?php 
	
	session_start();
	$dirToIndex = '../../index.php';
	$_SESSION['flash'] = [];
	$_SESSION['miss']  = [];
	$_SESSION['old']   = [];

	// mail info
	$to = 'esgalduine@gmail.com';
	$date = date('d/m/Y').' à '.date('H:i:s');

	if ( $_POST ) {
		
		if ( isset($_POST['contacter']) ) {
			
			$required = ['nom', 'prenom', 'mail', 'telephone', 'message'];
			$fails = 0;

			// if empty
			foreach ($required as $key) {
				if ( empty($_POST[$key]) || $_POST[$key] == '' ) {
					$_SESSION['miss'][$key] = $_POST[$key];
					$fails++;
				}
			}

			// save old data
			array_pop($_POST);
			foreach ($_POST as $key => $old) {
				if ( !empty($_POST[$key]) || $_POST[$key] != '' ) {
					$_SESSION['old'][$key] = $old;
				}
			}

			if ( $fails > 0 ) {
				$_SESSION['flash'][] = [
					'type' => 'error',
					'message' => 'Les champs avec astérisque sont obligatoir.'
				];
			} else {
				if ( isset($_POST['mail']) ) {
					if ( filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ) {
						$headers = "RedDingue [".$_POST['type-contact']."] - Demande de contact - de ".$_POST['mail']." le ".$date;
						$message = "Mmme/Mr ".$_POST['prenom']." ".$_POST['nom']." [".$_POST['type-contact']."] souhaite vous contacter\n";
						$message .= "Message : ".$_POST['message']."\n";
						$message .= "Numéro : ".$_POST['telephone']." - société : ".$_POST['message']."\n";
						$message .= "Mail : ".$_POST['mail']."\n";
						$message .= "Adresse physique : ".$_POST['adresse'];
						mail($to, $headers, $message);

						$_SESSION['flash'][] = [
							'type' => 'successe',
							'message' => 'Le mail à bien été envoyé nous vous répondrons dans les plus bref délais.'
						];
					} else {
						$_SESSION['flash'][] = [
							'type' => 'error',
							'message' => 'Votre eMail est incorrecte.'
						];
					}
				}
			}

			header('location:'. $dirToIndex .'?p=contact');
		}
		
	} else {
		header('location:'. $dirToIndex);
	}