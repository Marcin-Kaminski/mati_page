<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:image" content="https://mati-page.studiokam.pl/images/oggraph.png"/>

        <title>{{ $title ?? 'mattmastering.pl' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
