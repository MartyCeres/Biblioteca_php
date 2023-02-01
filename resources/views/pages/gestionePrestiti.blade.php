@extends('layout')

@section('content')
<header>

</header>
<br>
<div class="container row">
    <div class="col-sm-6 text-dark">
        <br>
        <h1>Lista Prestiti</h1>
    </div>
    <div class="col-sm-6">
        <img src="/images/prestiti1.jpg" class="rounded float-end" width="300" height="200">
    </div>
    </div>
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar-total">
    <br>
        <table id="roleTab" class="table table-hover table-responsive-md text-center">
            <thead class="table-success">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Titolo libro</th>
                    <th scope="col">Nome Lettore</th>
                    <th scope="col">Cognome Lettore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestiti as $prestito)
                    <tr>
                        <td>{{  $prestito->id  }}</td>
                        <td>{{  $prestito->titolo  }}</td>
                        <td>{{  $prestito->nome  }}</td>
                        <td>{{  $prestito->cognome  }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
