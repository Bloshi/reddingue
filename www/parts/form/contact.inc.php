<form action="App/controllers/contact.php" method="post" class="contact-form">
			
	<div class="row">
		<label for="nom" class="s2">
			<p>Nom</p>
			<input type="text" class="nom" name='nom' id="nom" />
		</label>

		<label for="prenom" class="s2">
			<p>Prenom</p>
			<input type="text" class="prenom" id="prenom" name='prenom' />
		</label>
	</div>

	<div class="row">
		<label for="societe" class="s2">
			<p>Sociéte</p>
			<input type="text" class="societe" id="societe" name='societe' />
		</label>

		<label for="adresse" class="s2">
			<p>Adresse</p>
			<input type="text" class="adresse" id="adresse" name='adresse' />
		</label>
	</div>

	<div class="row">
		<label for="mail" class="s2">
			<p>eMail</p>
			<input type="text" class="mail" id="mail" name='mail' />
		</label>

		<label for="telephone" class="s2">
			<p>téléphone</p>
			<input type="tel" class="telephone" id="telephone" name='telephone' />
		</label>
	</div>

	<div class="row">
		<label for="type-contact" class="s1">
			<p>type de contact</p>
			<select class="type-contact" id="type-contact" name='type-contact'>
				<option value="0">client</option>
				<option value="1">fournisseur</option>
				<option value="2">partenaire</option>
			</select>
		</label>
	</div>

	<div class="row">
		<label for="message" class="s1">
			<p>message</p>
			<textarea type="text" class="message" id="message" name='message'></textarea>
		</label>
	</div>

	<button class="contacter" name='contacter' type="submit">Contacter</button>

</form>