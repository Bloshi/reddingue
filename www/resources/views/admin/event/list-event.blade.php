@extends('admin-layout')

@section('admin-content')
    
	<main>
			
		<h1>Gérer les événement</h1>

		@include('admin.event.action-evenement-admin')

		<div class="row">
			
			<div class="columns coll-12">
				<label for="list-inscrit-event">Choisissez votre événement</label>
				<select name="list-inscrit-event" id="list-inscrit-event" onchange="document.location.href=this.value">
					<option 
						value="{{ route('admin.gestion.event.list') }}"
						{{ $selectOption == 'null' ? 'selected' : '' }}
					>tous</option>
					@if(isset($filterEvent))
						@foreach($filterEvent as $Event)
							<option 
								value="{{ route('admin.gestion.event.list', ['id' => $Event->evenementID]) }}"
								{{ $selectOption == $Event->evenementID ? 'selected' : '' }}
							>{{ $Event->t_titre_evenement }}</option>
						@endforeach
					@endif
				</select>
			</div>

		</div><!-- .row -->

		<table>
			<thead> 
				<tr class="row">
					<td class="columns coll-3">Nom</td>
					<td class="columns coll-3">Prénomom</td>
					<td class="columns coll-3">Gsm</td>
					<td class="columns coll-3">eMail</td>
				</tr>
			</thead>
			<tbody>
				@foreach($results as $user)
					<tr class="row">
						<td class="columns coll-3">{{ ucfirst($user->t_nom) }}</td>
						<td class="columns coll-3">{{ ucfirst($user->t_prenom) }}</td>
						<td class="columns coll-3">{{ $user->i_numero }}</td>
						<td class="columns coll-3"><a href="mailto:{{ $user->t_mail }}">{{ $user->t_mail }}</a></td>
					</tr>
				@endforeach 
			</tbody>
		</table>

	</main>

@endsection