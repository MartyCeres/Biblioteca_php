<?php

namespace App\Http\Controllers;

use App\Models\Lettore;
use App\Models\Libro;
use DB;
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


    public function updateOrCreate(Request $request){
        
        $prestiti = DB::table('prestiti')
            ->upsert([
                ['id'=>'4', 'libro_id'=> Libro::where('titolo', 'Il ritorno del re')->value('id'),
                'lettore_id'=>Lettore::where('cognome', 'Neri')->value('id')]
            ], ['id'], ['libro_id', 'lettore_id']);

        return redirect()->route('gestionePrestiti');
    }
}
