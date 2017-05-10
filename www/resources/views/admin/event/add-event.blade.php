@extends('admin-layout')

@section('admin-content')
    
	<main>
			
		<h1>Gérer les événement</h1>

		@include('admin.event.action-evenement-admin')

		{!! Form::open(['action' => 'Admin\GestionEventController@postEventAdd', 'enctype' => 'multipart/form-data']) !!}
			<div class="row">

				<div class="columns coll-6">
					<label for="t_titre_evenement">Titre de l'événement</label>
					{!! Form::text('t_titre_evenement', null, ['id' => 't_titre_evenement']) !!}
				</div>

				<div class="columns coll-6">
					<label for="d_date">Date</label>
					{!! Form::date('d_date', \Carbon\Carbon::now(), ['id' => 'd_date']) !!}
				</div>

				<div class="columns coll-12">
					<label for="t_lieu">Lieu</label>
					{!! Form::text('t_lieu', null, ['id' => 't_lieu']) !!}
				</div>

				<!--
					
					ici mettre les différentes fomules dispo 
					la mettre la possibiliter dans ajouter sur la  même page ? 
					avec un bouton ça serait cool

				-->

				<div class="columns coll-12">
					<label for="t_description">Description</label>
					{!! Form::textarea('t_description', null, ['id' => 't_description']) !!}
				</div>

				<div class="columns coll-12">
					<label class="upload-file" for="t_url_image">Image</label>
					<input type="file" name="t_url_image[]" id="t_url_image" multiple />

					<output id="list-show--up_img"></output>
                    <script>
                        function handleFileSelect(evt) {
                            var files = evt.target.files;
                            for (var i = 0, f; f = files[i]; i++) {
                                if (!f.type.match('image.*')) {
                                    continue;
                                }

                                var reader = new FileReader();

                                reader.onload = (function(theFile) {
                                    return function(e) {
                                        var span = document.createElement('span');
                                        span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                        '" title="', escape(theFile.name), '"/>'].join('');
                                        document.getElementById('list-show--up_img').insertBefore(span, null);
                                    };
                                })(f);
                                reader.readAsDataURL(f);
                            }
                        }
                        document.getElementById('t_url_image').addEventListener('change', handleFileSelect, false);
                    </script>
				</div>

				<div class="columns coll-12">
					<p>Est-ce un événement privé ?</p>
					<label for="ti_prive_non">non{!! Form::radio('ti_prive', '0', true, ['id' => 'ti_prive_non']); !!}</label>
					<label for="ti_prive_oui">oui{!! Form::radio('ti_prive', '1', false, ['id' => 'ti_prive_oui']); !!}</label>
				</div>
				
				<div class="columns coll-12">
					<p>Champ visible pour l'inscription</p>
					<label for="champ1"><input type="checkbox" name="champs" id="champ1" checked /> Le nom du truc</label>
					<label for="champ2"><input type="checkbox" name="champs" id="champ2" checked /> Le nom du truc</label>
					<label for="champ3"><input type="checkbox" name="champs" id="champ3" checked /> Le nom du truc</label>
					<label for="champ4"><input type="checkbox" name="champs" id="champ4" checked /> Le nom du truc</label>
				</div>

			</div><!-- .row -->

			
			<button class="add-new-event" type='submit' name='add-new-event'>Ajouter l'événement</button>
		{!! Form::close() !!}

	</main>

@endsection
