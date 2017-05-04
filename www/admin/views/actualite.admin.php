<div class="content actu">
	
	<h2>Actualité</h2>
	<span>ici gérez les actualité du site</span>

	<?php
		$filter = isset($_GET['f']) ? $_GET['f'] : 'ajouter';
	?>

	<nav class="filter-admin">
		<ul class="row">
			<li class="one-third column">
				<a 
					href="index.php?p=actualite&f=ajouter" 
					class="button filter-event-admin<?= $filter == 'ajouter' ? ' active' : '' ?>"
				>Ajouter</a>
			</li>
			<li class="one-third column">
				<a 
					href="index.php?p=actualite&f=modifier" 
					class="button filter-event-admin<?= $filter == 'modifier' ? ' active' : '' ?>"
				>Mofidier</a>
			</li>
			<li class="one-third column">
				<a 
					href="index.php?p=actualite&f=supprimer" 
					class="button filter-event-admin<?= $filter == 'supprimer' ? ' active' : '' ?>"
				>Supprimer</a>
			</li>
		</ul>
	</nav>

	<div class="view-filter-admin">
		
		<?php 
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

</div><!-- .content.actu -->