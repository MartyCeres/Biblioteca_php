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
    <div class="col-sm-4">
    <h3>Registra Nuovo Prestito</h3>
        <h6>Titolo Libro:</h6>
        <input id="Rtitolo" type="text" name="titolo" class="form-control align-left col-4" placeholder="Titolo" required>
        <br>
        <h6>Nome:</h6>
        <div class="form-inline">
            <input id="Rnome" type="text" name="nome" class="form-control align-left col-2" placeholder="Nome" required>
            <br>
            <input id="Rcognome" type="text" name="cognome" class="form-control align-left col-1 ml-2" placeholder="Cognome" required>
        </div>
        <br>
        <button class="btn btn-block text-uppercase btn-outline-success float-end col-4" onclick="regStr()">Registra</button>
    </div>
    </div>
</div>

<script>
    function regStr(){
        var titolo= $('#Rtitolo').val();
        var nome= $('#Rnome').val();
        var cognome= $('#Rcognome').val();
        $.ajax({
            url:"{{ route('regStr') }}",
            method: "POST",
            data: {_token: "{{ csrf_token() }}",  titolo:titolo, nome:nome, cognome:cognome},
            success: function(){
                titolo.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('jqXHR:');
                console.log(jqXHR);
                console.log('textStatus:');
                console.log(textStatus);
                console.log('errorThrown:');
                console.log(errorThrown);
            },
        })
    }
</script>
@endsection