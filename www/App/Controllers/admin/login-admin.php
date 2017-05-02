<?php 
	session_start();
	$_SESSION['flash'] = [];

	if ( $_POST ) {
		if ( isset($_POST['login']) ) {
			
			$mdp = $_POST['mdpAdmin'];
			$pw  = md5(sha1('test'));

			if ( !empty($mdp) || $mdp != '' ) {
				$mdp = md5(sha1($mdp));

				if ($mdp === $pw) {
					$_SESSION['log'] = true;
					header('location:../../../admin/index.php?p=contact');
				} else {
					$_SESSION['log'] = false;
					$_SESSION['flash'][] = [
						'type' => 'error', 
						'message' => 'Mot de passe incorrecte.'
					];
					header('location:../../../admin/index.php');
				}
			} else {
				$_SESSION['log'] = false;
				$_SESSION['flash'][] = [
					'type' => 'error', 
					'message' => 'Entrez votre mot de passe.'
				];
				header('location:../../../admin/index.php');
			}

		}
	} else {
		header('location:../index.php');
	} 