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
        
        <header id="header">
            <div class="fond">
                <div class="logo"><a href="{{ route('accueil') }}">logo</a></div> 
                <nav class="menu">
                    <ul>
                        <li><a href="#header" title="Accueil">Accueil</a></li>

                        <li><a href="#propos" title="A propos">À propos</a></li>
                        <li><a href="#actualite" title="Actualitée">Actualités</a></li>
                        <li><a href="#service" title="Services">Services</a></li>
                        <li><a href="{{ route('contact.index') }}" title="Contact">Contact</a></li>
                    </ul>
                </nav>
            </div><!-- .fond -->
        </header><!-- /header -->

        <section class="container">

            @yield('content')

        </section> <!-- End container  -->

        <footer>
            <p>Produit par <a href="http://bloshicorp.be" title="Site">Bloshi Corp</a></p>
        </footer>

    </body>
</html> 
