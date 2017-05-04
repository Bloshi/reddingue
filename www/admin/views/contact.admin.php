<div class="content contact">
	
	<h2>Contact</h2>
	<span>Ici retrouver votre liste de contact.</span>

	<?php
		$contact = $db
			->pdo('SELECT 
			t_nom AS nom, 
			t_prenom AS prenom, 
			t_adresse_physique AS adresse, 
			t_mail AS mail, 
			i_numero AS numero, 
			i_telephone AS telephone
			FROM utilisateur');
	?>

	<table class="u-full-width">
		<thead>
			<tr>
				<td>Nom</td><td>Prénom</td><td>eMail</td><td>Adresse</td><td>Numéro</td><td>Téléphone</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($contact as $key => $utilisateur): ?>
				<tr>
					<td><?= ucfirst($utilisateur->nom); ?></td>
					<td><?= ucfirst($utilisateur->prenom); ?></td>
					<td><?= $utilisateur->adresse; ?></td>
					<td><?= $utilisateur->mail; ?></td>
					<td><?= $utilisateur->numero; ?></td>
					<td><?= $utilisateur->telephone; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</div><!-- .content.contact -->