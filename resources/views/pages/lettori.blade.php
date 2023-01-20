@extends('layout')

@section('content')
<header>

</header>
<br>
<div class="container row">
    <div class="col-sm-6 text-dark">
        <br>
        <h1>Lettori Registrati</h1>
    </div>
    <div class="col-sm-6">
        <img src="/images/lettori1.jpg" class="rounded float-end" width="300" height="200">
    </div>
    </div>
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar-total">
    <br>
        <table id="roleTab" class="table table-hover table-responsive-md text-center">
            <thead class="table-success">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Città</th>
                    <th scope="col">Data di Nascita</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lettori as $lettore)
                    <tr>
                        <td>{{  $lettore->nome  }}</td>
                        <td>{{  $lettore->cognome  }}</td>
                        <td>{{  $lettore->citta  }}</td>
                        <td>{{  $lettore->data_nascita  }}</td>
                        <td>{{  $lettore->email  }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

