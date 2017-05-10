@extends('admin-layout')

@section('admin-content')
    
	<main>
			
		<h1>Gérer les contacts</h1>

		{!! Form::model('model', ['action' => 'ContactController@contacter']) !!}
			<legend>Ajouter un contact</legend>

			<div class="row">
				<div class="coll-6 columns">
					<label for="contact-nom">Nom</label>
					{!! Form::text('t_nom', null, ['class' => 'contact-nom', 'id' => 'contact-nom']) !!}
				</div>

				<div class="coll-6 columns">
					<label for="contact-prenom">Prénom</label>
					{!! Form::text('t_prenom', null, ['class' => 'contact-prenom', 'id' => 'contact-prenom']) !!}
				</div>
			</div>

			<div class="row">
				<div class="coll-6 columns">
					<label for="contact-adresse">Adresse</label>
					{!! Form::text('t_adresse_physique', null, ['class' => 'contact-adresse', 'id' => 'contact-adresse']) !!}
				</div>
				<div class="coll-6 columns">
					<label for="contact-mail">eMail</label>
					{!! Form::text('t_mail', null, ['class' => 'contact-mail', 'id' => 'contact-mail']) !!}
				</div>
			</div>

			<div class="row">
				<div class="coll-6 columns">
					<label for="contact-numero">Numéro de GSM</label>
					{!! Form::text('i_numero', null, ['class' => 'contact-numero', 'id' => 'contact-numero']) !!}
				</div>
				<div class="coll-6 columns">
					<label for="contact-telephone">eMail</label>
					{!! Form::text('i_telephone', null, ['class' => 'contact-telephone', 'id' => 'contact-telephone']) !!}
				</div>
			</div>

			<button class="button" type='submit' name='contacter'>Se connecter</button>

		{!! Form::close() !!}

		@if ( isset($users) )
			<table>
				<thead>
					<tr>
						<td class="coll-2 columns">Nom</td>
						<td class="coll-2 columns">Prénom</td>
						<td class="coll-2 columns">Numéro(gsm)</td>
						<td class="coll-2 columns">eMail</td>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td class="coll-2 columns">{{ ucfirst($user->t_nom) }}</td>
							<td class="coll-2 columns">{{ ucfirst($user->t_prenom) }}</td>
							<td class="coll-2 columns">{{ $user->i_numero }}</td>
							<td class="coll-2 columns">{{ $user->t_mail }}</td>
							<td class="coll-2 columns u-pull-right"><button class="_btn">modifier/supprimer</button></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif

	</main>

@endsection