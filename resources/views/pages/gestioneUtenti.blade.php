@extends('layout')

@section('content')
<input type="hidden" id="page" value="users">
<br>
<div class="container row">
    <div class="col-sm-6 text-dark">
        <br>
        <h1>Lista Utenti</h1>
    </div>
    <div class="col-sm-6">
        <img src="/images/utente1.png" class="rounded float-end" height="200">
    </div>
    </div>
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar-total">
    <br>
    <table id="roleTab" class="table table-hover table-responsive-md text-center">
        <thead class="table-success">
            <tr>
                <th scope="col">ID Utente</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ruolo</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            @if($user->id != Auth::user()->id)
                <tr id="{{ $user->id }}">
                    <th>{{ $user->id }}</th>
                    <th>{{  $user->name  }}</th>
                    <th>{{  $user->email  }}</th>
                    <th>@if($user->hasRole('admin')) admin @endif @if($user->hasRole('guest')) guest @endif</th>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
<br>
@endsection
