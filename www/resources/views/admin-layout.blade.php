<!doctype html>
<html lang="{{ config('app.locale') }}">
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
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <main class="admin-espace session row">

            <aside class="admin-nav coll-3 columns u-pull-left">
                <ul>
                    <li><a href="{{ route('admin.gestion.actu.list') }}" class="admin-link{{ $page == 'actu' ? ' active' : '' }}">Gérer l'actualité</a></li>
                    <li><a href="{{ route('admin.gestion.contact.list') }}" class="admin-link{{ $page == 'contact' ? ' active' : '' }}">Gérer les contacts</a></li>
                    <li><a href="{{ route('admin.gestion.event.list') }}" class="admin-link{{ $page == 'event' ? ' active' : '' }}">Gérer les événement</a></li>
                </ul>
            </aside>

            <section class="admin-container coll-9 columns u-pull-right">

                @yield('admin-content')

            </section><!-- .admin-container -->

        </main><!-- .admin-espace.session -->

        <footer>
            <p>Produit par <a href="http://bloshicorp.be" title="Site">Bloshi Corp</a></p>
        </footer>

    </body>
</html> 
