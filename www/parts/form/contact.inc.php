<form class="contact-form" method="post" action="App/Controllers/Contact.php">
	
	<label for="contact-nom">
		<input type="text" class="contact-nom" name='contact-nom' id='contact-nom' />
	</label>

	<label for="contact-prenom">
		<input type="text" class="contact-prenom" name='contact-prenom' id='contact-prenom' />
	</label>

	<label for="contact-societe">
		<input type="text" class="contact-societe" name='contact-societe' id='contact-societe' />
	</label>

	<label for="contact-mail">
		<input type="text" class="contact-mail" name='contact-mail' id='contact-mail' />
	</label>

	<label for="contact-telephone">
		<input type="number" class="contact-telephone" name='contact-telephone' id='contact-telephone' />
	</label>

	<label for="contact-type">
		<select name="contact-type" id="contact-type">
			<option value=""></option>
		</select>
	</label>

	<label for="contact-objet">
		<textarea name="contact-objet" id="contact-objet"></textarea>
	</label>

</form>