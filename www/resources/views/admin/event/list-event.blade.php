@extends('admin-layout')

@section('admin-content')
    
	<main>
			
		<h1>Gérer les événement</h1>

		@include('admin.event.action-evenement-admin')

		<div class="row">
			
			{!! Form::open(['action' => 'Admin\GestionEventController@eventList']) !!}
				<div class="columns coll-8 u-pull-left">
					<label for="list-inscrit-event">Choisissez votre événement</label>
					<select name="list-inscrit-event" id="list-inscrit-event">
						<option value="all">tous</option>
						@if(isset($filterEvent))
							@foreach($filterEvent as $Event)
								<option value="{{ $Event->evenementID }}">{{ $Event->t_titre_evenement }}</option>
							@endforeach
						@endif
					</select>
				</div>

				<div class="columns coll-4 u-pull-right">
					<button type="submit" name="filter-event-database">Filtrer</button>
				</div>
			{!! Form::close() !!}

		</div><!-- .row -->

		{{ dd($results) }}

		<table>
			<thead> 
				<tr>
					<td>Nom</td>
					<td>Prénomom</td>
					<td>Gsm</td>
					<td>eMail</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nom</td>
					<td>Prénomom</td>
					<td>Gsm</td>
					<td>eMail</td>
				</tr>
			</tbody>
		</table>

	</main>

@endsection