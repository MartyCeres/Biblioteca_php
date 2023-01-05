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
                        <a class="nav-link" href='#'> Libri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#'> Lettori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#'> Prestiti</a>
                    </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a class="nav-link" href="#">
                        <span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                </ul>
            </div>
        </nav>
        <!--end navbar-->

        <div class="container">
            @yield('content')
         </div>
</body>
</html>
