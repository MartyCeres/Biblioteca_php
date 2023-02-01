@extends('/layout')

@section('content')
<div class="center">
    <br>
<h3>Gestione profilo</h3>
<div class="container row">
<div class="row">
    <div class="col-lg col-md-6 mb-4">
        <form class="form-signin" method="POST" autocomplete="off" action="{{ route('modificaUtente') }}">
            @csrf
            <h6>Indirizzo email:</h6>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Indirizzo email">
            <br>
            <h6>Nome:</h6>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Nome">
            <br>
            <h6>Ruolo:</h6>
            <h4>
                <span class="badge bg-secondary">@if(Auth::user()->hasRole('admin')) admin @endif @if(Auth::user()->hasRole('guest')) guest @endif</span>
                <button class="btn btn-block text-uppercase btn-outline-success float-end" type="submit">Modifica</button>
            </h4>
        </form>
    </div>
    <div class="col-lg col-md-6 mb-4">
        <img src="/images/IconaUtente1.png" class="rounded float-end" width="300" >
    </div>
</div>
</div>
</div>
@endsection