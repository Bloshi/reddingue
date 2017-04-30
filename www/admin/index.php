<?php 
	require '../App/connexion.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<?php require_once '../parts/meta.php'; ?>
	<title>Admin</title>
</head>
<body>
	
	<?php 
		$logged = isset($_SESSION['log']) ? $_SESSION['log'] : false;
		if ( $logged === false ) {
			$page = 'connection';
		} else {
			$page = isset($_GET['p']) ? $_GET['p'] : 'connection';
		}
    ?>
    
 	<section class="view">
 		
		<aside class="admin-nav">
			<ul>
				<li><a href="index.php?p=actualite" class="admin-link">actualite</a></li>
				<li><a href="index.php?p=evenement" class="admin-link">evenement</a></li>
				<li><a href="index.php?p=contact" class="admin-link">contact</a></li>
				<li><a href="index.php?p=connection" class="admin-link">déconnection</a></li>
			</ul>
		</aside>

		<main class="admin-content">
			<?php
	            switch ($page) {
	                case 'actualite':
	                    include 'views/actualite.admin.php';
	                    break;

	                case 'evenement':
	                    include 'views/evenement.admin.php';
	                    break;

	                case 'contact':
	                    include 'views/contact.admin.php';
	                    break;
	            
	                default:
	                    include 'views/login.admin.php';
	                    break;
	            }
	        ?>
		</main>

 	</section>  	
		

</body>
</html>