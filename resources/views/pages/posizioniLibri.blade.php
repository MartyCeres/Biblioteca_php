@extends('layout')

@section('content')
<header>

</header>
<br>
<div class="container row">
    <div class="col-sm-6 text-dark">
        <br>
        <h1>Disposizione Libri</h1>
    </div>
    <div class="col-sm-6">
        <img src="/images/scaffale1.jpg" class="rounded float-end" width="300" height="200">
    </div>
    </div>
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar-total">
    <br>
    <table id="roleTab" class="table table-hover table-responsive-md text-center">
        <thead class="table-success">
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Nome Autore</th>
                <th scope="col">Cognome Autore</th>
                <th scope="col">Genere</th>
                <th scope="col">Zona</th>
                <th scope="col">Scaffale</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libri as $libro)
                <tr>
                    <td>{{  $libro->titolo  }}</td>
                    <td>{{  $libro->anome  }}</td>
                    <td>{{  $libro->cognome  }}</td>
                    <td>{{  $libro->genere  }}</td>
                    <td>{{  $libro->zona  }}</td>
                    <td>{{  $libro->scaffale  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
