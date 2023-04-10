<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>{{ env('APP_NAME')}} - @yield('pagename')</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
    @include('partials._header')

    @yield('jumbotron')
    
    <main>
      <section class="bg-dark py-5">
        @yield('comic-cards')
      </section>

      <section >
        @yield('main_bottom')
      </section>
    </main>

    @include('partials._footer')
  </div>
</body>
</html>