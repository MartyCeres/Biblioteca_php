@extends('layout')

@section('content')
<header>

</header>
<br>
<div class="container row">
    <div class="col-sm-6 text-dark">
        <br>
        <h1>Gestione Prestiti</h1>
    </div>
    </div>
</div>

<div class="container-fluid row">
    <div class="row">
    <div class="col-sm-8">
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
    <div class="col-sm-4 border border-secondary rounded">
        <br>
    <h3>Prestito</h3>
        <h6>Titolo Libro:</h6>
        <select id="Rtitolo" name="titolo" class="form-select form-select-md col-4" required>
        @foreach ($libri as $libro)
            <option value="{{ $libro->libro_id }}">{{ $libro->titolo}}</option>
        @endforeach
        </select>
        <br>
        <h6>Nome:</h6>
        <div class="form-inline">
            <select id="Rnome" name="nome" class="form-select form-select-md col-4" required>
            @foreach ($lettori as $lettore)
            <option value="{{ $lettore->lettore_id }}">{{ $lettore->nome}}, {{ $lettore->cognome}}</option>
            @endforeach
            </select>
            <br>
            <div>
                <a href="{{ route('cancgestionePrestiti') }}" class="btn btn-success col-4"> Cancella </a>
       
            
                <a href="{{ route('addgestionePrestiti') }}" class="btn btn-success col-4 float-end"> Registra </a>
            </div>
            <br>
        </div>
    </div> 
    </div>
</div>
@endsection
