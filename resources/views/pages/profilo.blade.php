@extends('/layout')

@section('content')
<div class="center">
    <br>
<h3>Gestione profilo</h3>
<div class="row-full">
    <div class="col-lg col-md-6 mb-4">
        <form class="form-signin" method="POST" autocomplete="off" action="{{ route('modificaUtente') }}">
            @csrf
            <h6>Indirizzo email:</h6>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Indirizzo email">
            <h6>Nome:</h6>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Nome">
            <h6>Ruolo:</h6>
            <span class="border border-success rounded-2 w-50">@if(Auth::user()->hasRole('admin')) admin @endif @if(Auth::user()->hasRole('guest')) guest @endif</span>
            <button class="btn btn-lg btn-block text-uppercase btn-color" type="submit">Modifica</button>
        </form>
    </div>
</div>
</div>
@endsection