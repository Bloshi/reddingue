<div class="content contact">
	
	<h2>Contact</h2>

	<?php
		$contact = $db
			->pdo('SELECT 
				utilisateurID AS id
				t_nom AS nom, 
				t_prenom AS prenom, 
				t_mail AS mail, 
				i_numero AS numero
				FROM utilisateur');
	?>

	<?php if ( empty(array_filter($contact)) ): ?>
		<span>Ici retrouver votre liste de contact.</span>
		<a href="#ajouter" class="button u-pull-right">Ajouter un contact</a>
		<table class="u-full-width">
			<thead>
				<tr>
					<td>Nom</td><td>Prénom</td><td>eMail</td><td>Numéro</td>
					<td>Modifier</td><td>Supprimer</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($contact as $key => $utilisateur): ?>
					<tr>
						<td><?= ucfirst($utilisateur->nom); ?></td>
						<td><?= ucfirst($utilisateur->prenom); ?></td>
						<td><?= $utilisateur->mail; ?></td>
						<td><?= $utilisateur->numero; ?></td>
						<td><a href="index.php?p=contact&fiche=<?= $utilisateur->id; ?>&a=modifier" class="button">Modifier</a></td>
						<td><a href="index.php?p=contact&fiche=<?= $utilisateur->id; ?>&a=supprimer" class="button">Supprimer</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>

	<section id="ajouter" class="ajouter-contact">
		<p>Ajouter un contact</p>
		<?php include 'contact/add.contact.php'; ?>
	</section>

</div><!-- .content.contact -->