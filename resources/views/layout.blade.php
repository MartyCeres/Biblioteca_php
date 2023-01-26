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
                        <a class="dropdown-item" href="#">Profilo</a>
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

        <div class="modal" role="dialog" id="login" tabindex="-1">
        <div class="container">
            <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center fadeIn first">Sign In
                        <button type="button" name="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                    </h5>
                    <form class="form-signin" method="POST" autocomplete="off" action="{{ route('signin') }}">
                    @csrf
                    <div class="form-label-group fadeIn second">
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group fadeIn third">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>
                    <button class="btn btn-lg btn-color btn-block text-uppercase fadeIn fourth" type="submit">Sign in</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
</body>
</html>
