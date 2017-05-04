<form action="App/controllers/inscription-evenement.php" method="post" class="inscription-evenement.php-form">
	<div class="row">
		<div class="six columns">
			<label for="nom"><p>Nom</p></label>
			<input 
				type="text" name='nom' id="nom" placeholder="Luck" required
				class="nom <?= isset($_SESSION['miss']['nom']) ? ' error' : '' ?>" 
				<?php if ( isset($_SESSION['old']['nom']) ): ?>value="<?= $_SESSION['old']['nom']; ?>"<?php endif; ?>
			/>
		</div><!-- .six.columns -->

		<div class="six columns">
			<label for="prénom"><p>Prénom</p></label>
			<input 
				type="text" id="prenom" name='prenom' placeholder="Skywalker" required
				class="prenom <?= isset($_SESSION['miss']['prenom']) ? ' error' : '' ?>"  
				<?php if ( isset($_SESSION['old']['prenom']) ): ?>value="<?= $_SESSION['old']['prenom']; ?>"<?php endif; ?>
			/>
		</div><!-- .six.columns -->
	</div>

	<div class="row">
		<div class="six columns">
			<label for="societe"><p>Sociéte</p></label>
			<input 
				type="text" class="societe" id="societe" name='societe' placeholder="Temple Jedi" 
				<?php if ( isset($_SESSION['old']['societe']) ): ?>value="<?= $_SESSION['old']['societe']; ?>"<?php endif; ?>
			/>
		</div><!-- .six.columns -->

		<div class="six columns">
			<label for="adresse"><p>Adresse</p></label>
			<input 
				type="text" class="adresse" id="adresse" name='adresse' placeholder="Coruscante" 
				<?php if ( isset($_SESSION['old']['adresse']) ): ?>value="<?= $_SESSION['old']['adresse']; ?>"<?php endif; ?>
			/>
		</div><!-- .six.columns -->
	</div>

	<div class="row">
		<div class="six columns">
			<label for="mail"><p>eMail</p></label>
			<input 
				type="text" id="mail" name='mail' placeholder="skywalker@contact.cc" required
				class="mail <?= isset($_SESSION['miss']['mail']) ? ' error' : '' ?>" 
				<?php if ( isset($_SESSION['old']['mail']) ): ?>value="<?= $_SESSION['old']['mail']; ?>"<?php endif; ?>
			/>
		</div><!-- .six.columns -->

		<div class="six columns">
			<label for="telephone"><p>téléphone</p></label>
			<input 
				type="tel" id="telephone" name='telephone' placeholder="02345678" required
				class="telephone <?= isset($_SESSION['miss']['telephone']) ? ' error' : '' ?>" 
				<?php if ( isset($_SESSION['old']['telephone']) ): ?>value="<?= $_SESSION['old']['telephone']; ?>"<?php endif; ?>
			/>
		</div><!-- .six.columns -->
	</div>

	<label for="type-formule"><p>type de contact</p></label>
	<select class="type-contact u-full-width" id="type-contact" name='type-contact'>
		<option value="0">client</option>
	</select>

	<label for="message"><p>message</p></label>
	<textarea 
		type="text" id="message" name='message' placeholder="Il y a bien longtemps dans une galaxie lointaine, ... très lointaine"
		class="message u-full-width <?= isset($_SESSION['miss']['message']) ? ' error' : '' ?>" required
	><?php if ( isset($_SESSION['old']['message']) ){ echo $_SESSION['old']['message']; }?></textarea>
		

	<button class="inscription-event" name='inscription-event' type="submit">Contacter</button>

</form> 