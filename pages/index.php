<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Camping Scrum BV</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/scss/app.scss' ,'resources/js/app.js'])
    </head>
    <body class="blur main-background-home">
      <header>
        <div class="container-main"> 
          <div class="logo-container">
            <a href="/">
              <img class="logo" src="{{ url('media/logo.png') }}" alt="logo">
            </a>
          </div>
          <div class="nav-container">
            <ul>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/reserveren') }}">Reserveren</a></li>
              <li><a href="{{ url('/contact') }}">Contact</a></li>
              <li><a href="{{ url('/overscrum') }}">Over Scrum BV</a></li>
              <li><a class="d-flex" href="{{ url('/login') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>Login</a></li>
            </ul>
          </div>
        </div>
      </header>


      <div class="content-container container-fluid">
        <div class="row filler-row">
          <div class="home-page-hero col-12">
            <h1 class="text-white fw-bold">Camping Scrum BV</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="{{ url('/reserveren') }}"><button type="button" class="btn btn-lg btn-outline-light">Reserveer nu</button></a>
          </div>
        </div>
      </div>
    </body>
</html>
