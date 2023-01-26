<!DOCTYPE html>
<html lang="it">
<head>
  <title>Biblioteca</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="p-3 bg-success text-white text-center">
        <h1>Biblioteca</h1>
    </div>
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('libri')}}"> Libri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lettori')}}"> Lettori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('prestiti')}}"> Prestiti</a>
                    </li>
                    </ul>
                </div>

                <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())
                <li class="nav-item dropdown text-light">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Benvenuto {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profilo')}}">Profilo</a>
                        @if(Auth::user()->hasRole('admin'))
                            <a class="dropdown-item" href="#">Gestione Prestiti</a>
                        @endif
                        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </ul>
                </li>
                @endif
                @if(old('error'))
                <b class="text-danger">Errore di autenticazione!</b>
                @endif

                @if(!Auth::check())
                <li><a>
                    <button type="button" class="btn btn-outline-light" id="log" data-bs-toggle="modal" data-bs-target="#login"> Login </button>
                </a></li>
                @endif

                </ul>
            </div>
        </nav>
        <!--end navbar-->

        <div class="container">
            @yield('content')
        </div>

        <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--Modal Header-->
                <div class="modal-header">
                        <h5 class="modal-title">Area riservata</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!--Modal Body-->
                <div class="modal-body">
                    <div class="container mt-3">
                    <h3>Log-in</h3>
                    <form class="form-signin" method="POST" autocomplete="off" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="inputEmail">Email:</label>
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Inserisci Email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword">Password:</label>
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Inserisci Password" required>
                    </div>
                        <button class="btn btn-success" type="submit">Sign in</button>
                    </form>
                    <br>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>
