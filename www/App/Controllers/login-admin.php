<?php 
	
	if ( $_POST ) {
		if ( isset($_POST['login']) ) {
			echo 'coucou';
		}
	} else {
		header('location:../index.php');
	}