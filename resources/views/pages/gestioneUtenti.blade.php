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
@section('javascript')
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
