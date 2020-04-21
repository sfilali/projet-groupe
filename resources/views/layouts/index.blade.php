<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/users">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projets">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/taches">Taches</a>
            </li>
          </ul>
        </div>
      </nav>

      @yield('content')
</body>
</html>