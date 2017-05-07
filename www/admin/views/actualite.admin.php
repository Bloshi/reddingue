<div class="content actu">
	
	<h2>Actualité</h2>
	<span>ici gérez les actualité du site</span>

	<?php
		$filter = isset($_GET['f']) ? $_GET['f'] : 'ajouter';
	?>

	<nav class="filter-admin">
		<ul class="row">
			<li class="one-half column">
				<center><a 
					href="index.php?p=actualite&f=ajouter" 
					class="button filter-event-admin<?= $filter == 'ajouter' ? ' active' : '' ?>"
				>Ajouter</a></center>
			</li>
			<li class="one-half column">
				<center><a 
					href="index.php?p=actualite&f=liste" 
					class="button filter-event-admin<?= $filter == 'liste' ? ' active' : '' ?>"
				>Liste actualité</a></center>
			</li>
		</ul>
	</nav>

	<div class="view-filter-admin">
		
		<?php 
			switch ( $filter ) {
				case 'modifier':
					include 'actualite/fiche.actu.php';
					break;

				case 'liste':
					include 'actualite/list.actu.php';
					break;
				
				default:
					include 'actualite/add.actu.php';
					break;
			} 
		?>

	</div><!-- .view-filter-admin -->

</div><!-- .content.actu -->