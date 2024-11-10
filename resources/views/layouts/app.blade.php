<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <title>Insyncsafety</title>
        @include('libraries.app.styles')
        @stack('css')
    </head>
  <body>
        @include('components.nav')
        <div id="overlay" style="display: block;">
            <div class="loader"></div>
        </div>
        @yield('content')

        @include('components.footer')
        @include('libraries.app.scripts')
        @stack('scripts')
  </body>
</html>
