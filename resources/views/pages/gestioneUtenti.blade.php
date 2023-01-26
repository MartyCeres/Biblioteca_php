@extends('layout')

@section('content')
<input type="hidden" id="page" value="users">
<br>
<div id="table" class="top-shift">
    <h2>Gestione ruoli</h2>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table id="roleTab" class="table table-hover table-responsive-md text-center">
        <thead class="table-success">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ruolo</th>
                <th scope="col"></th>
                <th scope="col" id="res"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            @if($user->id != Auth::user()->id)
            <tr id="{{ $user->id }}">
                    <td style="display: none;">{{  $user->name  }}</td>
                    <td style="display: none;">{{  $user->email  }}</td>
                    <td style="display: none;">@if($user->hasRole('admin')) admin @endif @if($user->hasRole('guest')) guest @endif </td>
                    <th scope="row"><h4>{{ $user->name }}</h4></th>
                    <td><h4>{{ $user->email }}</h4></td>
                    <td>
                            <input id="Eemail" type="hidden" value="{{ $user->email }}" name="email">
                            <select id="Erole" name="role" class="custom-select custom-select-md mb-3">
                                <option value="role_admin" {{ $user->hasRole('admin') ? 'selected' : '' }}>Admin</option>
                                <option value="role_guest" {{ $user->hasRole('guest') ? 'selected' : '' }}>Guest</option>
                            </select>
                    </td>
                    <td><button onclick="roleAssign()" class="btn btn-success">Cambia Ruolo</button></td>
                    <td>
                        <input id="Did" type="hidden" value="{{ $user->id }}" name="id">
                        <button onclick="deleteUser({{ $user->id }})" class="btn btn-success">Cancella Utente</button>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    </div>
    <br>
    <div class="col">
        <h3>Registra utente</h3>
            <h6>Indirizzo email:</h6>
            <input id="Remail" type="email" name="email" class="form-control align-left col-4" placeholder="Indirizzo email" required>
            <h6>Nome:</h6>
            <input id="Rname" type="text" name="name" class="form-control align-left col-4" placeholder="Nome" required>
            <h6>Password:</h6>
            <input id="Rpassword" type="password" name="password" class="form-control align-left col-4" placeholder="Password" required>
            <br>
            <button onclick="signup()" class="btn btn-lg btn-success btn-block text-uppercase col-4" type="submit">Registra</button>
    </div>
    <br>
</div>
<script>
        function roleAssign(){
            var role= $("#Erole").val();
            var email= $("#Eemail").val();
            $.ajax({
                url:"{{ route('assegnoRuolo') }}",
                method: "POST",
                data: {_token: "{{ csrf_token() }}", email:email, role:role},
                success: function(){
                    $('#res').html('<b class=\"text-success\"> Utente aggiornato!</b>');
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
    <script>
            function deleteUser(id){
                var table = document.getElementById("roleTab");
                var tr = table.getElementsByTagName("tr");
                var f=1;
                var c=0;
                $.ajax({
                    url:"{{ route('cancellaUtente') }}",
                    method: "POST",
                    data: {_token: "{{ csrf_token() }}", id: id},
                    success: function(){
                        $('#res').html('<b class=\"text-danger\"> Utente eliminato!</b>');
                        for (i = 0; i < tr.length; i++) {
                            var tid= tr[i].getAttribute("id");
                            if(tid != id && f){
                                c++;
                            }else{
                                f=0;
                            }
                        }
                        document.getElementById("roleTab").deleteRow(c);
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
        <script>
                function signup(){
                    var name= $('#Rname').val();
                    var email= $('#Remail').val();
                    var password= $('#Rpassword').val();
                    $.ajax({
                        url:"{{ route('iscrizione') }}",
                        method: "POST",
                        data: {_token: "{{ csrf_token() }}",  name:name, email:email, password:password},
                        success: function(){
                            location.reload();
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
