@extends('layout')

@section('content')
    
	<main class="view-page">
		
		<div class="wrap">
			
			{!! Form::open(['action' => 'ContactController@contacter']) !!}

				<div class="row">
					<div class="one-half column">
						<label for="contact-nom">Nom</label>
						{!! Form::text('t_nom', null, ['class' => 'contact-nom', 'id' => 'contact-nom']) !!}
					</div>

					<div class="one-half column">
						<label for="contact-prenom">Prénom</label>
						{!! Form::text('t_prenom', null, ['class' => 'contact-prenom', 'id' => 'contact-prenom']) !!}
					</div>
				</div>

				<div class="row">
					<div class="one-half column">
						<label for="contact-adresse">Votre adresse</label>
						{!! Form::text('t_adresse_physique', null, ['class' => 'contact-adresse', 'id' => 'contact-adresse']) !!}
					</div>
					<div class="one-half column">
						<label for="contact-mail">eMail</label>
						{!! Form::text('t_mail', null, ['class' => 'contact-mail', 'id' => 'contact-mail']) !!}
					</div>
				</div>

				<div class="row">
					<div class="one-half column">
						<label for="contact-numero">Numéro de GSM</label>
						{!! Form::text('i_numero', null, ['class' => 'contact-numero', 'id' => 'contact-numero']) !!}
					</div>
					<div class="one-half column">
						<label for="contact-telephone">eMail</label>
						{!! Form::text('i_telephone', null, ['class' => 'contact-telephone', 'id' => 'contact-telephone']) !!}
					</div>
				</div>

				<div class="row">
					<div class="one-half column">
						<label for="type-de-contact">Type de contact</label>
						<select name="ti_type_de_contact">
							<option value="0">Client</option>
							<option value="1">Fournisseur</option>
							<option value="2">Partenaire</option>
						</select>
					</div>
					
					<div class="one-half column">
						<label for="contact-societe">Société</label>
						{!! Form::text('t_societe', null, ['class' => 'contact-societe', 'id' => 'contact-societe']) !!}
					</div>
				</div>

				<label for="contact-message">Votre message</label>
				{!! Form::textarea('t_objet', null, ['class' => 'contact-message', 'id' => 'contact-message']) !!}

				<button class="button" type='submit' name='contacter'>Se connecter</button>

			{!! Form::close() !!}

		</div><!-- .wrap -->

	</main>

@endsection 