<?php 
	require 'App/connexion.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <?php require_once 'parts/meta.php'; ?>
        <title>redding</title>
    </head>
    <body>
        <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home'
        ?>
        
        <div class="content-view">
        	
			<?php
                switch ($page) {
                    case 'home':
                        include 'views/home.php';
                        break;
                
                    default:
                        include 'views/404.php';
                        break;
                }
            ?>

        </div><!-- .content-view -->

        <?php include_once 'parts/footer.php'; ?>
        <script src="assets/js/app.js"></script>
    </body>
</html>