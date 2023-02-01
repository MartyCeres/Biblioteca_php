<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Prestito;
use Hash;

class PrestitoController extends Controller
{   
    public function postRegStr(Request $request){
        $request->validate([
            'titolo' => 'required',
            'nome' => 'required',
            'cognome' => 'required',
        ]);

        $titolo = $request['titolo'];
        $nome = $request['nome'];
        $cognome = $request['cognome'];
        
        $prestito = new Prestito();
        $prestito->titolo= $titolo;
        $prestito->nome= $nome;
        $prestito->cognome = $cognome;
        $prestito->save();
        $regDone=1;
        return redirect()->back()->withInput(array('regDone' => $regDone)); 
    }
}
