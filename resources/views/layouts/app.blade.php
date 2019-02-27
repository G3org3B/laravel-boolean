<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content=" @yield('meta_description', 'Boolean Careers - Corso Full Stack')">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Boolean Careers')</title>
  </head>
  <body>
    <header>
      <div class="header-left">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Logo">
      </div>
      <div class="header-right">
        <ul>
          <li class="active">
            <a href="{{ route('home') }}">Home</a>
          </li>
          <li>
            <a href="{{ route('static.privacy' )}}">Privacy Policy</a>
          </li>
          <li>
            <a href="{{ route('static.work' )}}">Lavora con noi</a>
          </li>
        </ul>
      </div>


    </header>

    @yield('content')
  </body>
</html>
