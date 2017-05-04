<?php 
	require '../App/connexion.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<?php require_once '../parts/meta.php'; ?>
	<title>Admin</title>
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../assets/css/skeleton.css" />
	<link rel="stylesheet" href="../assets/css/app.css" />
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
    
    <?php if ( isset($_SESSION['flash']) ): 
    	  $flash = $_SESSION['flash'];
    ?>
    	<div class="flash">
	    	<ul>
	    		<?php foreach ($flash as $key => $error): ?>
	    			<li class="<?= $error['type']; ?>">
	    				<span><?= $error['message']; ?></span>
	    			</li>
	    		<?php endforeach; ?>
	    	</ul>
	    </div><!-- .flash -->
    <?php endif; ?>

 	<section class="admin-container">
 		
		<aside class="admin-nav">
			<ul>
				<li>
					<a 
						class="admin-link _btn<?= $page == 'actualite' ? ' active' : '' ?>"
						href="index.php?p=actualite">actualite<i class="fa fa-chevron-right fa-1"></i>
					</a>
				</li>
				<li>
					<a 
						class="admin-link _btn<?= $page == 'evenement' ? ' active' : '' ?>"
						href="index.php?p=evenement">evenement<i class="fa fa-chevron-right fa-1"></i>
					</a>
				</li>
				<li>
					<a 
						class="admin-link _btn<?= $page == 'contact' ? ' active' : '' ?>"
						href="index.php?p=contact">contact<i class="fa fa-chevron-right fa-1"></i>
					</a>
				</li>
				<li>
					<a href="views/logout.admin.php" class="admin-link _btn">déconnection<i class="fa fa-chevron-right fa-1"></i></a></li>
			</ul>
		</aside>

		<main class="admin-view">
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

	            unset($_SESSION['flash']);
                unset($_SESSION['miss']);
                unset($_SESSION['old']);
	        ?>
		</main>

 	</section>  	
		

</body>
</html>