{{-- Ciao ragazzi,
oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!

Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando:

composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi (se vi trovate nella cartella dei progetti)

oppure

composer create-project --prefer-dist laravel/laravel:^7.0 . (se avete prima creato la cartella di progetto e vi siete spostati al suo interno)

Al termine dell'installazione, entriamo nella cartella del progetto (se non vi trovte gia' al suo interno);
cd laravel-primi-passi e avviamo l'artisan serve con uno di questi due comandi:

php artisan serve

oppure (solo se il primo non funziona)

php -S localhost:8000 -t public

A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
All'interno stampiamo un Hello World, poi rendiamo alcune parti dinamiche con Blade.
Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route() (edited)  --}}


<?php
$title = 'Hello World!!';
$links = ['pagina1', 'pagina2', 'pagina3'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP primi passi</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>{{$title}}</h1>
        <ul>
            @foreach ($links as $link)
                <li><a href="{{ '/'.$link }}"> {{ $link }}</a></li>
            @endforeach
        </ul>

    </header>
</body>
</html>
