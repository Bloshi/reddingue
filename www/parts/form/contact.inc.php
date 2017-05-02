<form action="App/controllers/contact.php" method="post" class="contact-form">
	<div class="row">
		<label for="nom" class="s2">
			<p>Nom</p>
			<input 
				type="text" name='nom' id="nom" placeholder="Luck" required
				class="nom <?= isset($_SESSION['miss']['nom']) ? ' error' : '' ?>" 
				<?php if ( isset($_SESSION['old']['nom']) ): ?>value="<?= $_SESSION['old']['nom']; ?>"<?php endif; ?>
			/>
		</label>

		<label for="prénom" class="s2">
			<p>Prénom</p>
			<input 
				type="text" id="prenom" name='prenom' placeholder="Skywalker" required
				class="prenom <?= isset($_SESSION['miss']['prenom']) ? ' error' : '' ?>"  
				<?php if ( isset($_SESSION['old']['prenom']) ): ?>value="<?= $_SESSION['old']['prenom']; ?>"<?php endif; ?>
			/>
		</label>
	</div>

	<div class="row">
		<label for="societe" class="s2">
			<p>Sociéte</p>
			<input 
				type="text" class="societe" id="societe" name='societe' placeholder="Temple Jedi" 
				<?php if ( isset($_SESSION['old']['societe']) ): ?>value="<?= $_SESSION['old']['societe']; ?>"<?php endif; ?>
			/>
		</label>

		<label for="adresse" class="s2">
			<p>Adresse</p>
			<input 
				type="text" class="adresse" id="adresse" name='adresse' placeholder="Coruscante" 
				<?php if ( isset($_SESSION['old']['adresse']) ): ?>value="<?= $_SESSION['old']['adresse']; ?>"<?php endif; ?>
			/>
		</label>
	</div>

	<div class="row">
		<label for="mail" class="s2"> 
			<p>eMail</p>
			<input 
				type="text" id="mail" name='mail' placeholder="skywalker@contact.cc" required
				class="mail <?= isset($_SESSION['miss']['mail']) ? ' error' : '' ?>" 
				<?php if ( isset($_SESSION['old']['mail']) ): ?>value="<?= $_SESSION['old']['mail']; ?>"<?php endif; ?>
			/>
		</label>

		<label for="telephone" class="s2">
			<p>téléphone</p>
			<input 
				type="tel" id="telephone" name='telephone' placeholder="02345678" required
				class="telephone <?= isset($_SESSION['miss']['telephone']) ? ' error' : '' ?>" 
				<?php if ( isset($_SESSION['old']['telephone']) ): ?>value="<?= $_SESSION['old']['telephone']; ?>"<?php endif; ?>
			/>
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
			<textarea 
				type="text" id="message" name='message' placeholder="Il y a bien longtemps dans une galaxie lointaine, ... très lointaine"
				class="message <?= isset($_SESSION['miss']['message']) ? ' error' : '' ?>" required
			><?php if ( isset($_SESSION['old']['message']) ){ echo $_SESSION['old']['message']; }?></textarea>
		</label>
	</div>

	<button class="contacter" name='contacter' type="submit">Contacter</button>

</form> 