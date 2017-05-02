<div class="content event">
	
	<h2>Contact</h2>
	<span>Ici retrouver votre liste de contact.</span>

	<nav class="filter-admin">
		<ul>
			<li>
				<a href="index.php?p=evenement&f=ajouter" class="filter-event-admin">Ajouter</a>
			</li>
			<li>
				<a href="index.php?p=evenement&f=modifier" class="filter-event-admin">Mofidier</a>
			</li>
			<li>
				<a href="index.php?p=evenement&f=supprimer" class="filter-event-admin">Supprimer</a>
			</li>
		</ul>
	</nav>

	<div class="view-filter-admin">
		
		<?php 
			$filter = isset($_GET['f']) ? $_GET['f'] : 'ajouter';

			switch ( $filter ) {
				case 'modifier':
					include 'evenement/modifier.php';
					break;

				case 'supprimer':
					include 'evenement/supprimer.php';
					break;
				
				default:
					include 'evenement/ajouter.php';
					break;
			} 
		?>

	</div><!-- .view-filter-admin -->

</div><!-- .content.event -->