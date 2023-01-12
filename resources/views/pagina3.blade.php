<?php
$page_3_title = 'Ciao sono la pagina 3!!';
$link_go_home = 'Torna alla homepage';
$homepage = '/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina 3</title>
</head>
<body>
    <header>
        <h1>{{ $page_3_title }}</h1>

        <h2><a href=" {{ $homepage }}">{{ $link_go_home }}</a></h2>
    </header>
</body>
</html>
