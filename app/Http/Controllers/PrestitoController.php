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
    public function updateOrCreate(){
        
        $prestiti = DB::table('prestiti')
            ->upsert([
                ['id'=>'4', 'libro_id'=> Libro::where('titolo', 'Il ritorno del re')->value('id'),
                'lettore_id'=>Lettore::where('cognome', 'Neri')->value('id')]
            ], ['id'], ['libro_id', 'lettore_id']);

        return redirect()->route('gestionePrestiti');
    }

    public function destroy(){
          
        $prestiti = Prestito::where('id', '4')->firstorfail()->delete();
        return redirect()->route('gestionePrestiti');
    }
}
