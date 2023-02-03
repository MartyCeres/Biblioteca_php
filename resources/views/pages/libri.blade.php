@extends('layout')

@section('content')
<header>

</header>
<br>
<div class="container row">
    <div class="col-sm-6 text-dark">
        <br>
        <h1>Catalogo Libri</h1>
    </div>
    <div class="col-sm-6">
        <img src="/images/libri1.jpg" class="rounded float-end" width="300" height="200">
    </div>
    </div>
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar-total">
    <br>
    <table id="roleTab" class="table table-hover table-responsive-lg text-center">
        <thead class="table-success">
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Nome Autore</th>
                <th scope="col">Cognome Autore</th>
                <th scope="col">Editore</th>
                <th scope="col">Anno</th>
                <th scope="col">Genere</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libri as $libro)
                <tr>
                    <td>{{  $libro->titolo  }}</td>
                    <td>{{  $libro->anome  }}</td>
                    <td>{{  $libro->cognome  }}</td>
                    <td>{{  $libro->nome  }}</td>
                    <td>{{  $libro->anno  }}</td>
                    <td>{{  $libro->genere  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
