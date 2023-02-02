<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Prestito;
use Hash;

class PrestitoController extends Controller
{   
    public function create()
    {
        return view('create');
    }
    public function postRegStr(Request $request){
        $request->validate([
            'titolo' => 'required',
            'nome' => 'required',
        ]);

        $titolo = $request['titolo'];
        $nome = $request['nome'];
        
        
        $prestito = new Prestito();
        $prestito->libro_id= $titolo;
        $prestito->lettore_id= $nome;
        $prestito->save();
        $regDone=1;
        return redirect()->back()->withInput(array('regDone' => $regDone));

        /*$storeData = $request->validate([
            'titolo' => 'required',
            'nome' => 'required',
            'cognome' => 'required',
        ]);
        $prestito = Prestito::create($storeData);
        $regDone=1;
        return redirect()->back()->withInput(array('regDone' => $regDone));*/
    }
}
