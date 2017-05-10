<html>
	<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta name="description" content="Red Dingue est une équipe qui propose un service de traiteur, évenementielle, de vespacook et des séminaires." />
        <meta name="keywords" content="Quentin Stenuit, red, dingue, red dingue,reddingue,traiteur, event, évenementielle, vespacook, séminaire, bloshi corp" />

        <title>{{ $title }} | RedDingue</title>
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
	<body>
		
		<main class="full-w-h">
			
			{!! Form::open(['action' => 'Admin\IndexAdminController@logValidation']) !!}

				<label for="login-to-admin">
					<p>connexion à l'espace administration</p>
				</label>

				{!! Form::password('login-to-admin', null, ['class' => 'login-to-admin', 'id' => 'login-to-admin']) !!}

				<button class="button" type='submit' name='submit-login-to-admin'>Se connecter</button>

			{!! Form::close() !!}

		</main>

	</body>
</html>