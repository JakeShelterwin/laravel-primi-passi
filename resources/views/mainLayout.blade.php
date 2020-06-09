<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      {{-- GOAL: Come visto a lezione, riproporre un layout comune a 3 pagine comprensivo di header + navbar (sulla sinistra) + footer; complessita' di questi 3 componenti a piacere (va bene dalla scritta del <p> come visto questa mattina alla navbar di Amazon); le pagine dovranno invece definire un content (attraverso la tecnica vista yield/section/extends) come Home, About e Contact; anche in questo caso, la complessita' del content e' a piacere --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel, primi passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js">
        </script>
    </head>
    <body>
      @include('header')
      <main>
        @include('navBar')
        @yield('content')
      </main>
      @include('footer')
    </body>
</html>
