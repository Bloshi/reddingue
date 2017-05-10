@extends('admin-layout')

@section('admin-content')
    
	<main>
			
		<h1>Gérer l'acualité</h1>

		@include('admin.actu.action-admin-nav')

		<table>
			<thead>
				<tr>
					<td>Nom</td>
				</tr>
			</thead>
		</table>

	</main>

@endsection